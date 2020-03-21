// Import Libraries
import domReady from "@wordpress/dom-ready";
import "bootstrap";

// Import custom modules
import App from "./modules/app";

// Run Class Based Scripts Here
domReady(() => {
  App.hamburger(".hamburger");
  App.mediaSlickSlider();
});
