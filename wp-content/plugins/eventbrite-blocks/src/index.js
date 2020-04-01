import { render } from '@wordpress/element';
import domReady from '@wordpress/dom-ready';

import EventList from './components/EventList';
import { getLocalizeData } from './utilities';
import './style.css';
import './blocks/event-cards';

const [ events, attributes ] = getLocalizeData( 'events', 'attributes' );

function App() {
	return <EventList events={ events } attributes={ attributes } />;
}

domReady( function() {
	if ( document.getElementById( 'root-eventbrite-blocks' ) ) {
		render( <App />, document.getElementById( 'root-eventbrite-blocks' ) );
	}
} );
