function data() {
  function getThemeFromLocalStorage() {
    // if user already changed the theme, use it
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'))
    }

    // else return their preferences
    return (
      !!window.matchMedia &&
      window.matchMedia('(prefers-color-scheme: dark)').matches
    )
  }

  function setThemeToLocalStorage(value) {
    window.localStorage.setItem('dark', value)
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark
      setThemeToLocalStorage(this.dark)
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen
    },
    closeSideMenu() {
      this.isSideMenuOpen = false
    },
    isNotificationsMenuOpen: false,
    toggleNotificationsMenu() {
      this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen
    },
    closeNotificationsMenu() {
      this.isNotificationsMenuOpen = false
    },
    isProfileMenuOpen: false,
    toggleProfileMenu() {
      this.isProfileMenuOpen = !this.isProfileMenuOpen
    },
    closeProfileMenu() {
      this.isProfileMenuOpen = false
    },

    // Section PC
    isPagesMenuOpen: false,
    togglePagesMenu() {
      this.isPagesMenuOpen = !this.isPagesMenuOpen
    },
    isPagesMenuOpen2PC: false,
    togglePagesMenu2PC() {
      this.isPagesMenuOpen2PC = !this.isPagesMenuOpen2PC
    },
    isPagesMenuOpen3PC: false,
    togglePagesMenu3PC() {
      this.isPagesMenuOpen3PC = !this.isPagesMenuOpen3PC
    },
    isPagesMenuOpen4PC: false,
    togglePagesMenu4PC() {
      this.isPagesMenuOpen4PC = !this.isPagesMenuOpen4PC
    },

    // Section mobile
    isPagesMenuOpen1: false,
    togglePagesMenu1() {
      this.isPagesMenuOpen1 = !this.isPagesMenuOpen1
    },
    isPagesMenuOpen2: false,
    togglePagesMenu2() {
      this.isPagesMenuOpen2 = !this.isPagesMenuOpen2
    },
    // Modal
    isModalOpen: false,
    trapCleanup: null,
    openModal() {
      this.isModalOpen = true
      this.trapCleanup = focusTrap(document.querySelector('#modal'))
    },
    closeModal() {
      this.isModalOpen = false
      this.trapCleanup()
    },
  }
}
