import 'bootstrap';
import 'lity';
import domReady from '@wordpress/dom-ready';
import Theme from './modules/Theme';

// const { render } = wp.element;

domReady(() => {
  Theme.hamburger('.hamburger');
});

// const App = () => {};
// render(<App />, document.getElementById('root'));
