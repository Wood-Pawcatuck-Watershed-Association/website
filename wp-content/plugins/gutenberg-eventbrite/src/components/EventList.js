import Event from './Event';

export default function EventList({ events, attributes }) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
	} = attributes;

	return events.map((event) => {
		const id = event.id;
		const title = event.name.text;
		const image = event.logo.original.url;
		const startDate = new Date(event.start.utc);
		const cost = event.ticket_classes[0].cost.display;
		const description = event.description.html;
		const status = event.status;

		return (
			<Event
				key={title}
				id={id}
				title={title}
				description={description}
				cost={cost}
				startDate={startDate}
				image={image}
				status={status}
				colors={{
					firstButtonBackgroundColor,
					secondButtonBackgroundColor,
				}}
			/>
		);
	});
}
