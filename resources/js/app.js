import './bootstrap';
import.meta.glob([ '../images/**', ]);





// contador

document.addEventListener('DOMContentLoaded', function() {
  const counters = document.querySelectorAll('.counter');
  const speed = 200;

  counters.forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText;

      const inc = target / speed;

      if (count < target) {
        counter.innerText = Math.ceil(count + inc);
        setTimeout(updateCount, 1);
      } else {
        counter.innerText = target;
      }
    };

    updateCount();
  });
});

// sidebar

const setup = () => {
  function getSidebarStateFromLocalStorage() {
    if (window.localStorage.getItem('isSidebarOpen')) {
      return JSON.parse(window.localStorage.getItem('isSidebarOpen'))
    }

    return (
     false
    )
  }

  function setSidebarStateToLocalStorage(value) {
    window.localStorage.setItem('isSidebarOpen', value)
  }

return {
      loading: true,
      isSidebarOpen: getSidebarStateFromLocalStorage(),
      toggleSidbarMenu() {
        this.isSidebarOpen = !this.isSidebarOpen
        setSidebarStateToLocalStorage(this.isSidebarOpen)
      },
      isSettingsPanelOpen: false,
      isSearchBoxOpen: false,
  }
}
