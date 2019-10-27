//Import Libraries
import $ from 'jquery';
import 'bootstrap';
import Vue from 'vue';
import { store } from './store';

// Import custom modules
import App from'./modules/app.js';
import Hamburgers from'./modules/hamburgers.js';

// Import custom components
import Posts from './components/Posts.vue';


//Initiate Classes Here
const app = new App();
const hamburgers = new Hamburgers();


// Run Class Based Scripts Here
function run() {

  app.init();
  app.hamburger(".hamburger");
  app.mediaSlickSlider();
  // const appPosts = new Vue({ 
  //     el: '#appPosts',
  //     store: store,
  //     components: {
  //       Posts
  //     }
  // });

}


// in case the document is already rendered
if (document.readyState!='loading') run();
// modern browsers
else if (document.addEventListener) document.addEventListener('DOMContentLoaded', run);
// IE <= 8
else document.attachEvent('onreadystatechange', function(){
    if (document.readyState=='complete') run();
});