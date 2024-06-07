class ContactTabs {
  constructor() {
    this.tabLinks = document.querySelectorAll('.tab-link')
    this.tabs = document.querySelectorAll('.tab')
    this.selectTab = document.getElementById('tabs')
    this.contactTabs = document.getElementById('contact-tabs')
    if (!this.contactTabs) {
      console.error("Element with id 'contact-tabs' not found.")
      return
    }

    this.initializeTabs()
    this.syncTabsWithSelect()
    this.syncSelectWithTabs()
    this.handleHashNavigation() // Call handleHashNavigation on initialization
    this.handleFormSubmission() // Handle form submission on initialization
  }

  initializeTabs() {
    // Hide all tab contents except the first one
    this.tabs.forEach((tab, index) => {
      if (index !== 0) {
        tab.style.display = 'none'
      }
    })

    // Activate the first tab link by default
    this.tabLinks[0].classList.add('bg-gray-100')

    this.tabLinks.forEach((tabLink) => {
      tabLink.addEventListener('click', this.handleTabLinkClick.bind(this))
    })
  }

  handleTabLinkClick(event) {
    event.preventDefault() // Prevent scrolling to the hash position
    const tabLink = event.currentTarget
    const tabName = tabLink.getAttribute('data-tab')

    // Store the last opened tab in session storage
    sessionStorage.setItem('lastTab', tabName)

    // Update the hash
    this.updateHash(tabName)

    // Show the clicked tab
    this.showTab(tabName)

    // Scroll to the hash position
    const hashElement = document.getElementById(tabName)
    if (hashElement) {
      hashElement.scrollIntoView({ behavior: 'smooth', block: 'start' })
    }
  }

  showTab(tabName) {
    // Hide all tabs
    this.tabs.forEach((tab) => {
      tab.style.display = 'none'
    })

    // Deactivate all tab links
    this.tabLinks.forEach((link) => {
      link.classList.remove('bg-gray-100')
    })

    // Show the selected tab
    document.getElementById(tabName).style.display = 'block'

    // Activate the clicked tab link
    const tabLink = document.querySelector(`[data-tab="${tabName}"]`)
    if (tabLink) {
      tabLink.classList.add('bg-gray-100')
    }

    // Update the select dropdown
    if (this.selectTab) {
      this.selectTab.value = tabName
    }
  }

  syncTabsWithSelect() {
    if (!this.selectTab) return

    this.selectTab.addEventListener('change', (event) => {
      const selectedTabName = event.target.value

      // Store the last opened tab in session storage
      sessionStorage.setItem('lastTab', selectedTabName)

      // Update the hash
      this.updateHash(selectedTabName)

      this.showTab(selectedTabName)
    })
  }

  syncSelectWithTabs() {
    if (!this.tabLinks) return

    this.tabLinks.forEach((tabLink) => {
      tabLink.addEventListener('click', (event) => {
        const tabName = tabLink.getAttribute('data-tab')

        // Store the last opened tab in session storage
        sessionStorage.setItem('lastTab', tabName)

        // Update the hash
        this.updateHash(tabName)

        this.selectTab.value = tabName
      })
    })
  }

  handleHashNavigation() {
    const lastTab = sessionStorage.getItem('lastTab')
    const hash = window.location.hash.substring(1)

    if (hash) {
      // If there's a hash in the URL, attempt to show the corresponding tab
      this.showTab(hash)
      // Store the last opened tab in session storage
      sessionStorage.setItem('lastTab', hash)
    } else if (lastTab) {
      // If there's a stored tab, show that tab
      this.showTab(lastTab)
    } else {
      // If there's neither a stored tab nor a hash, default to showing the first tab
      this.showTab(this.tabLinks[0].dataset.tab)
    }
  }

  updateHash(hash) {
    // Update the hash without causing the page to scroll
    history.replaceState(null, null, '#' + hash)
  }

  handleFormSubmission() {
    // Check for success or failure notifications in the URL query parameters
    const urlParams = new URLSearchParams(window.location.search)
    const successMessage = urlParams.get('success')
    const errorMessage = urlParams.get('error')

    if (successMessage || errorMessage) {
      // If success or error notification is present, show the last opened tab
      const lastTab = sessionStorage.getItem('lastTab')
      if (lastTab) {
        this.showTab(lastTab)
      }
      // Remove the message from the URL
      history.replaceState(null, null, window.location.pathname)
    }
  }
}

document.addEventListener('DOMContentLoaded', function () {
  // Check if element with id "contact-tabs" exists
  const contactTabs = document.getElementById('contact-tabs')
  if (contactTabs) {
    const tabs = new ContactTabs()
    // Handle hash navigation on hash change
    window.addEventListener('hashchange', () => {
      tabs.handleHashNavigation()
    })
  } else {
    console.log("Element with id 'contact-tabs' not found.")
  }
})
