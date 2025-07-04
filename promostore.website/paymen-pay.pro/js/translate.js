async function loadTranslations(lang) {
  try {
    const response = await fetch(`lang/${lang}.json`)
    if (!response.ok) throw new Error('Translation file not found')
    return await response.json()
  } catch (error) {
    console.error('Error loading translation:', error)
    return {}
  }
}

async function applyTranslations() {
  const userLang = navigator.language.split('-')[0]
  const translations = await loadTranslations(userLang)

  document.querySelectorAll('[data-translate]').forEach((element) => {
    const key = element.getAttribute('data-translate')
    if (translations[key]) {
      element.textContent = translations[key]
    }
  })
}

applyTranslations()
