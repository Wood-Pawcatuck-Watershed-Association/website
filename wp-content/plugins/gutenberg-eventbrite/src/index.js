import { render } from "@wordpress/element";
import domReady from "@wordpress/dom-ready";
import EventList from "./components/EventList";

import "./blocks";

function App() {
	return <EventList events={window.eventbrite} />;
}

domReady(function() {
	render(<App />, document.getElementById("root-eventbrite"));
});
