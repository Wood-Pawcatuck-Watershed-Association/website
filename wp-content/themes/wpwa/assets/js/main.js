import domReady from "@wordpress/dom-ready";
import "bootstrap";
import Theme from "./modules/Theme";

//const { render } = wp.element;

domReady(() => {
    Theme.hamburger(".hamburger");
});

// const App = () => {};
// render(<App />, document.getElementById('root'));
