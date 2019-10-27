//Import Libraries
import Vue from 'vue';
import domReady from '@wordpress/dom-ready';

// Import custom components
import Eventbrite from './components/Eventbrite.vue';

// Run Class Based Scripts Here
domReady(function () {

  if (document.getElementById('events-calendar')){
    new Vue({
        el: '#events-calendar',
        components: {
          'events-calendar': Eventbrite
        }
    });
  }

});
