const htmlElement = document.documentElement

const __THEME__ = JSON.parse(localStorage.getItem('__THEME__') || '{}')

if (
  __THEME__.mode === 'dark' ||
  (!__THEME__.mode &&
    window.matchMedia('(prefers-color-scheme: dark)').matches)
) {
  htmlElement.classList.add('dark')
} else {
  htmlElement.classList.remove('dark')
}

function toggleTheme() {
  let __THEME__ = JSON.parse(localStorage.getItem('__THEME__') || '{}')

  if (htmlElement.classList.contains('dark')) {
    htmlElement.classList.remove('dark')
    __THEME__.mode = 'light'
  } else {
    htmlElement.classList.add('dark')
    __THEME__.mode = 'dark'
  }

  localStorage.setItem('__THEME__', JSON.stringify(__THEME__))
}

window.toggleTheme = toggleTheme
