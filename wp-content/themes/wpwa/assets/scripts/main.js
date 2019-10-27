//Import Libraries
import 'bootstrap';

// Import custom modules
import App from'./modules/app.js';


//Initiate Classes Here
const app = new App();


// Run Class Based Scripts Here
function run() {

  app.init();
  app.hamburger(".hamburger");
  app.mediaSlickSlider();

}


// in case the document is already rendered
if (document.readyState!='loading') run();
// modern browsers
else if (document.addEventListener) document.addEventListener('DOMContentLoaded', run);
// IE <= 8
else document.attachEvent('onreadystatechange', function(){
    if (document.readyState=='complete') run();
});
