import getUserCountry from './ip.js'

const EUR_AMOUNT = 1.95

async function convertCurrency(amount, from, to) {
  try {
    const response = await fetch(
      `https://api.exchangerate-api.com/v4/latest/${from}`
    )
    const data = await response.json()
    const rate = data.rates[to] || 1
    return (amount * rate).toFixed(2)
  } catch (error) {
    console.error('Ошибка конвертации валют:', error)
    return amount.toFixed(2)
  }
}

async function displayPrice() {
  const { currency } = await getUserCountry()
  const convertedAmount = await convertCurrency(EUR_AMOUNT, 'EUR', currency)
  document.getElementById(
    'price'
  ).textContent = `${convertedAmount} ${currency} `
}

displayPrice()
