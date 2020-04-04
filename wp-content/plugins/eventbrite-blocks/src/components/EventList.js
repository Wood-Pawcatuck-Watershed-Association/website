import Event from './Event';
import styles from '../style.module.css';
import classNames from 'classnames/bind';

const cx = classNames.bind( styles );

export default function EventList( { events, attributes } ) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
	} = attributes;

	return (
		<div className={ cx( 'flex', 'flex-wrap', 'justify-center' ) }>
			{ events.map( ( event ) => (
				<Event
					key={ event.id }
					id={ event.id }
					title={ event.name.text }
					description={ event.description.text }
					summary={ event.summary }
					cost={ event.ticket_classes[ 0 ].cost?.display }
					startDate={ new Date( event.start.utc ) }
					image={ event.logo?.original.url }
					status={ event.status }
					venue={ event.venue }
					colors={ {
						firstButtonBackgroundColor,
						secondButtonBackgroundColor,
					} }
				/>
			) ) }
		</div>
	);
}
