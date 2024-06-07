class CollapsePanel {
  constructor() {
    this.init()
  }

  init() {
    document.addEventListener('DOMContentLoaded', () => {
      this.addToggleCollapseListener('.accordion-toggle')
    })
  }

  addToggleCollapseListener(selector) {
    this.toggles = document.querySelectorAll(selector)
    this.toggles.forEach((toggle) => {
      toggle.addEventListener('click', () => {
        toggle.parentNode.parentNode.classList.toggle('active')
      })
    })
  }
  
}

export default CollapsePanel
