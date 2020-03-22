class Theme {
  static hamburger(element) {
    this.element = element;
    // Look for .hamburger
    const hamburger = document.querySelector(element);
    // On click
    hamburger.addEventListener("click", () => {
      // Toggle class "is-active"
      hamburger.classList.toggle("is-active");

      if (hamburger.classList.contains("is-active")) {
        hamburger.setAttribute("aria-label", "Close Menu");
      } else {
        hamburger.setAttribute("aria-label", "Open Menu");
      }
    });
  }
}

export default Theme;
