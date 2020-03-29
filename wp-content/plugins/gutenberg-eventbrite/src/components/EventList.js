import Event from './Event';

export default function EventList({ events, attributes }) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
	} = attributes;

	return (
		<div className="jw-flex jw-flex-wrap jw-justify-center">
			{events.map((event) => (
				<Event
					key={event.id}
					id={event.id}
					title={event.name.text}
					description={event.description.text}
					cost={event.ticket_classes[0].cost?.display}
					startDate={new Date(event.start.utc)}
					image={event.logo?.original.url}
					status={event.status}
					colors={{
						firstButtonBackgroundColor,
						secondButtonBackgroundColor,
					}}
				/>
			))}
		</div>
	);
}
