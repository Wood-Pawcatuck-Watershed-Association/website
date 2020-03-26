import axios from 'axios';
// helper function to fetch events from api with axios
export default function fetchEvents(
	endpoint,
	organizationId,
	apiToken,
	state,
	setState
) {
	//Get events and assign to state
	axios
		.get( endpoint, {
			params: {
				token: apiToken, //'I6HEXNTVQFQWEK2BR7AB',
				status: 'live',
				//status: "draft",
				order_by: 'start_asc',
			},
		} )
		.then( ( response ) => {
			const { data } = response;

			if ( state.length === null ) {
				//add events to state
				setState( ...data.events );

				if ( data.pagination.has_more_items ) {
					//TODO: fetch more
					const fetchMoreUrl = `https://www.eventbriteapi.com/v3/organizations/${ organizationId }/events/?&continuation=${ data.pagination.continuation }`;

					fetchEvents( fetchMoreUrl );
				}
				//Once the initial state is populated we can add more events and keep running the fetch request until there is no more pagination
			} else {
				//concat events to this.events state
				setState( ...state, ...data.events );

				if ( data.pagination.has_more_items ) {
					//TODO: fetch more
					const fetchMoreUrl = `https://www.eventbriteapi.com/v3/organizations/${ organizationId }/events/?&continuation=${ data.pagination.continuation }`;

					fetchEvents( fetchMoreUrl );
				}
			}
		} )
		.catch( ( error ) => {
			throw Error( error );
		} );
}
