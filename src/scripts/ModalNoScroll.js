class ModalNoScroll {
  constructor() {
    this.init();
  }

  init() {
    document.addEventListener("DOMContentLoaded", function () {
      // Function to check if the hash corresponds to a modal
      const isModalHash = function (hash) {
        return /^#modal-\w+$/.test(hash); // Updated regular expression to match alphanumeric characters (\w)
      };

      // Function to disable scrolling
      const disableScroll = function () {
        document.body.style.overflow = "hidden";
      };

      // Function to enable scrolling
      const enableScroll = function () {
        document.body.style.overflow = "";
      };

      // Event listener for hash change
      window.addEventListener("hashchange", function () {
        if (isModalHash(window.location.hash)) {
          disableScroll();
        } else {
          enableScroll();
        }
      });

      // Check hash on page load
      if (isModalHash(window.location.hash)) {
        disableScroll();
      }
    });
  }
}

export default ModalNoScroll;
