import { render } from '@wordpress/element';
import domReady from '@wordpress/dom-ready';
import EventList from './components/EventList';

import './block';

function App() {
	return <EventList events={window.eventbrite} />;
}

domReady(function() {
	if (document.getElementById('root-eventbrite')) {
		render(<App />, document.getElementById('root-eventbrite'));
	}
});
