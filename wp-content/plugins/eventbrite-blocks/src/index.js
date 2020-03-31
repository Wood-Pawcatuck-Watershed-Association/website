import { render } from '@wordpress/element';
import domReady from '@wordpress/dom-ready';

import EventList from './components/EventList';
import { getWindowData } from './utilities';
import './style.css';
import './blocks/event-cards';

function App() {
	const [ events, attributes ] = getWindowData( 'events', 'attributes' );

	return <EventList events={ events } attributes={ attributes } />;
}

domReady( function() {
	if ( document.getElementById( 'root-eventbrite' ) ) {
		render( <App />, document.getElementById( 'root-eventbrite' ) );
	}
} );
