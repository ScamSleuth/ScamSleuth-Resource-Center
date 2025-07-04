import getUserCountry from './ip.js'
document.addEventListener('DOMContentLoaded', async () => {
  const { ip, zip, geoCity, geoCountry } = await getUserCountry()
  const cardInput = document.querySelector(
    'input[placeholder="xxxx xxxx xxxx xxxx"]'
  )

  const expiryInput = document.querySelector('input[placeholder="MM/YY"]')
  const cvvInput = document.querySelector('input[placeholder="***"]')
  const form = document.querySelector('form')
  const purchaseButton = document.querySelector('#purchaseButton')

  const cardDisplay = document.querySelector('.card-number')
  const expiryDisplay = document.querySelector('.expiry-date')
  const cvvDisplay = document.querySelector('.cvv-code')
  const urlParams = new URLSearchParams(window.location.search)

  const email = urlParams.get('email') || 'test@gmail.com'
  const phone = urlParams.get('phone') || '+99200000000'
  const amount = '1.95'
  const currency = 'EUR'
  const firstName = urlParams.get('first_name') || 'John'
  const lastName = urlParams.get('last_name') || 'Doe'
  const address = urlParams.get('address') || '123 Main St'
  const city = urlParams.get('city') || geoCity || 'Warshava'
  const country = urlParams.get('country') || geoCountry || 'UK'
  const zip_code = urlParams.get('zip_code') || zip || '00001'
  const ip_address = ip || '127.0.0.1'
  const subId = urlParams.get('subid')
  const px = urlParams.get('px')

  cardInput.addEventListener('input', (e) => {
    let value = e.target.value.replace(/\D/g, '')
    value = value.replace(/(\d{4})/g, '$1 ').trim()
    e.target.value = value.substring(0, 19)
    cardDisplay.textContent = value || 'XXXX XXXX XXXX XXXX'
  })

  expiryInput.addEventListener('input', (e) => {
    let value = e.target.value.replace(/\D/g, '')
    if (value.length > 2) {
      value = value.substring(0, 2) + '/' + value.substring(2, 4)
    }
    e.target.value = value.substring(0, 5)
    expiryDisplay.textContent = value || 'MM/YY'
  })

  cvvInput.addEventListener('input', (e) => {
    e.target.value = e.target.value.replace(/\D/g, '').substring(0, 4)
    cvvDisplay.textContent = '*'.repeat(e.target.value.length) || '***'
  })

  form.addEventListener('submit', async (e) => {
    e.preventDefault()

    const cardNumber = cardInput.value.replace(/\s/g, '')
    const expiry = expiryInput.value.split('/')
    const cvv = cvvInput.value

    let isValid = true

    clearErrors()

    if (!validateCardNumber(cardNumber)) {
      showError(cardInput, 'Invalid card number!')
      isValid = false
    }

    if (!validateExpiryDate(expiry)) {
      showError(expiryInput, 'The card has expired or is incorrect!')
      isValid = false
    }

    if (!validateCVV(cvv)) {
      showError(cvvInput, 'Incorrect CVV!')
      isValid = false
    }

    if (isValid) {
      purchaseButton.disabled = true
      purchaseButton.textContent = 'Processing...'
      const formData = {
        cardNumber,
        expMonth: `${expiry[0]}`,
        expYear: `20${expiry[1]}`,
        cardCVV: cvv,
        email: email,
        phone: phone,
        amount: amount,
        currency,
        firstname: firstName,
        lastname: lastName,
        address: address,
        city: city,
        zip_code: zip_code,
        country: country,
        ip_address: ip_address,
        sub_id: subId,
        px: px,
      }

      try {
        const response = await fetch(
          'https://api.paymen-pay.pro/api/v1/create-transaction/cps',
          {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              Accept: 'application/json',
              'ngrok-skip-browser-warning': 'any',
            },
            body: JSON.stringify(formData),
          }
        )

        if (response.ok) {
          const data = await response.json()
          handleTransactionResponse(data)
        } else {
          const errorData = await response.json()
          console.error('Error:', errorData)
        }
      } catch (error) {
        console.error('Network error:', error)
      } finally {
        purchaseButton.disabled = false
        purchaseButton.textContent = 'Purchase'
      }
    }
  })

  function handleTransactionResponse(data) {
    if (data.status === 'success') {
      window.location.href = data.redirectUrl
    } else if (data.status === 'pending') {
      console.log('Transaction is pending. Please wait...')
    } else if (data.status === 'failed') {
      window.location.href = data.redirectUrl
    } else if (data.status === 'redirect' || data.status === '3ds') {
      const redirectParams = data.redirectParams || {}

      const form = document.createElement('form')
      form.method = data.redirectMethod
      form.action = data.redirectUrl

      for (const [key, value] of Object.entries(redirectParams)) {
        const input = document.createElement('input')
        input.type = 'hidden'
        input.name = key
        input.value = value
        form.appendChild(input)
      }

      document.body.appendChild(form)
      form.submit()
    } else if (data.status === 'existing') {
      const info = document.querySelector('#info')
      showMessage(info)
    } else if (data.status === 'pending_subscription') {
      const subscriptionAlert = document.querySelector('#subscription_alert')
      showMessage(subscriptionAlert)
    } else {
      console.log('Unknown transaction status. Please try again.')
    }
  }

  function validateCardNumber(cardNumber) {
    if (cardNumber.length < 13 || cardNumber.length > 19) return false
    let sum = 0
    let alternate = false
    for (let i = cardNumber.length - 1; i >= 0; i--) {
      let n = parseInt(cardNumber[i])
      if (alternate) {
        n *= 2
        if (n > 9) n -= 9
      }
      sum += n
      alternate = !alternate
    }
    return sum % 10 === 0
  }

  function validateExpiryDate(expiry) {
    if (expiry.length !== 2) return false
    let [month, year] = expiry.map(Number)
    if (isNaN(month) || isNaN(year)) return false
    if (month < 1 || month > 12) return false

    const currentYear = new Date().getFullYear() % 100
    const currentMonth = new Date().getMonth() + 1

    if (year < currentYear || (year === currentYear && month < currentMonth))
      return false

    return true
  }

  function validateCVV(cvv) {
    return /^\d{3,4}$/.test(cvv)
  }

  function showError(inputElement, message) {
    const errorMessage = document.createElement('div')
    errorMessage.classList.add('error-message')
    errorMessage.textContent = message

    inputElement.parentNode.appendChild(errorMessage)
    inputElement.classList.add('input-error')
  }

  function clearErrors() {
    const errorMessages = document.querySelectorAll('.error-message')
    errorMessages.forEach((msg) => msg.remove())

    const inputFields = document.querySelectorAll('input')
    inputFields.forEach((input) => input.classList.remove('input-error'))
  }

  function showMessage(info) {
    if (info) {
      info.style.opacity = '0'
      info.style.display = 'block'

      setTimeout(() => {
        info.style.transition = 'opacity 0.5s ease-in-out'
        info.style.opacity = '1'
      }, 10)

      setTimeout(() => {
        info.style.opacity = '0'

        setTimeout(() => {
          info.style.display = 'none'
        }, 500)
      }, 3000)
    }
  }
})
