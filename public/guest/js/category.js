// Header
class Category extends HTMLElement {
  constructor() {
    super();
  }

  connectedCallback() {
    this.innerHTML = `



    `;
  }
}

//Footer


customElements.define("main-category", Category);
