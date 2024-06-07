class NavControl {
  constructor() {
    this.navbar = document.getElementById('header-nav')
    this.contentContainer = document.getElementById('content-container')
    this.toggleMenuBtn = document.getElementById('toggle-nav')
    this.slideOutMenu = document.getElementById('slide-out-menu')
    this.accordions = document.querySelectorAll('#slide-out-menu .accordion')

    this.init()
  }

  init() {
    document.addEventListener('click', (event) => {
      this.handleLinkAndOutsideClick(event)
    })

    // Open and Close the Nav Menu
    this.toggleMenuBtn.addEventListener('click', () => this.toggleNavMenu())

    document.addEventListener('keyup', (e) => this.keyPressDispatcher(e))
  }

  isMenuOpen() {
    return this.slideOutMenu.classList.contains('open')
  }

  keyPressDispatcher(e) {
    if (e.target.tagName === 'INPUT' || e.target.tagName === 'TEXTAREA') {
      return // Don't handle key presses when input fields are focused
    }

    console.log('Key pressed: ', e.keyCode) // Logging the key press

    if (e.keyCode === 83) {
      // this.toggleSearch();
    }
    if (e.keyCode === 77) {
      this.toggleNavMenu()
    }

    if (e.keyCode === 27) {
      if (this.isMenuOpen()) {
        this.toggleNavMenu()
      }
    }
  }

  handleLinkAndOutsideClick(event) {
    const target = event.target

    // Handle link clicks
    const link = target.closest('a')
    if (link) {
      if (
        link.href === window.location.href &&
        this.toggleMenuBtn.classList.contains('active')
      ) {
        this.toggleNavMenu()
      }
      return
    }

    // Handle outside clicks
    const isOutsideMenu =
      !this.toggleMenuBtn.contains(target) &&
      !this.slideOutMenu.contains(target)
    if (isOutsideMenu) {
      this.toggleMenuBtn.classList.remove('active')
      this.slideOutMenu.classList.remove('open')
      this.removeBodyNoScroll()
    }
  }

  toggleNavMenu() {
    this.toggleMenuBtn.classList.toggle('active')
    this.slideOutMenu.classList.toggle('open')
    document.body.classList.toggle('noScroll')
    this.collapseAllAccordions()
  }

  // toggleSearch() {
  //   if (this.toggleMenuBtn.classList.contains('active')) {
  //     this.toggleNavMenu();
  //   }
  //   this.headerSearch.classList.toggle('active');
  //   this.headerSearchOverlay.classList.toggle('active');
  //   this.headerSearch.querySelector('input').focus();
  //   document.body.classList.toggle('noScroll');

  //   if (this.headerSearch.classList.contains('active')) {
  //     this.headerSearch.querySelector('input').value = '';
  //   }
  // }

  collapseAllAccordions() {
    this.accordions.forEach((accordion) => {
      accordion.classList.remove('active')
    })
  }

  removeBodyNoScroll() {
    if (document.body.classList.contains('noScroll')) {
      document.body.classList.remove('noScroll')
    }
  }

  businessHours() {
    const dayOfWeek = new Date().getDay()
    const defaultHours = 'Open Today from 9:00 am - 5:00 pm'
    let todaysBusinessHours

    switch (dayOfWeek) {
      case 0: // Sunday
      case 6: // Saturday
        todaysBusinessHours = `<span class="text-red-500">We are closed today.</span>`
        break
      default: // Monday to Friday
        todaysBusinessHours = `<span class="text-gray-500">${defaultHours}</span>`
        break
    }

    this.todaysBusinessHoursEl.innerHTML = todaysBusinessHours
  }
}

export default NavControl
