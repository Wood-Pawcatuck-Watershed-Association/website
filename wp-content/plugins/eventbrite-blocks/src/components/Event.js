import { useEffect } from '@wordpress/element';
import { format } from '@wordpress/date';
import Tippy from '@tippyjs/react';
import '../vendor/eventbrite';
import 'tippy.js/themes/light.css';
import 'tippy.js/animations/shift-away.css';

export default function Event({
	id,
	title,
	description,
	url,
	summary,
	cost,
	startDate,
	image,
	status,
	colors,
	venue,
	className,
}) {
	useEffect(() => {
		if (!id) return;
		EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: id,
			modal: true,
			modalTriggerElementId: `eventbrite-widget-modal-trigger-${id}`,
		});
	}, [id]);

	const { firstButtonBackgroundColor, secondButtonBackgroundColor } = colors;
	const { name: venueName, address } = venue;

	return (
		<article
			className={`jw-max-w-xs jw-w-full jw-px-2 jw-mb-4 jw-h-full jw-font-sans ${className}`}
		>
			<div className="event__single">
				{image ? (
					<img
						src={image}
						className="jw-block jw-h-32 jw-flex-none jw-object-cover jw-object-center jw-rounded-t jw-text-center jw-w-full jw-overflow-hidden jw-border-none"
						alt={title}
					/>
				) : null}
				<div className="jw-border-r jw-border-b jw-border-l jw-border-grey-light jw-bg-white jw-rounded-b jw-py-4 jw-px-2 jw-flex jw-flex-col jw-justify-between jw-leading-normal jw-shadow-md">
					<div className="event__details jw-flex">
						<div className="event__details--left">
							<div className="event__details--dateWrapper text-center">
								<p className="event__details--dateMonth jw-text-sm jw-text-red-600 jw-uppercase jw-my-0 jw-font-sans jw-leading-tight">
									<time>{format('M', startDate)}</time>
								</p>
								<p className="event__details--dateDay jw-text-xl jw-text-grey-800 jw-my-0 jw-font-sans">
									<time>{format('d', startDate)}</time>
								</p>
							</div>
						</div>
						<div className="event__details--right event__details--right jw-pl-2 jw-truncate jw-pb-2 jw-pr-2 jw-w-full">
							<div className="event__details--rightInnerTop">
								<h3 className="jw-my-0 jw-text-black jw-font-semibold jw-text-sm jw-m-0 jw-truncate">
									{title}
								</h3>
								<div className="event__details--dateWrapper">
									<time className="event__details--date jw-font-sans jw-text-grey-dark jw-text-xs jw-font-medium jw-m-0">
										{format('D, M d Y, g:ia', startDate)}
									</time>
								</div>
								<div className="event__details--venue">
									<p className="jw-font-sans jw-text-grey-dark jw-text-xs jw-m-0 jw-truncate">
										{venueName}
									</p>
									<p className="jw-font-sans jw-text-grey-dark jw-text-xs jw-m-0 jw-truncate">
										{address.city}, {address.region}
									</p>
								</div>
								<p className="jw-text-sm jw-text-grey-dark jw-flex jw-items-center jw-font-sans jw-mb-2 jw-mt-0">
									<span>{cost}</span>
								</p>
							</div>
							<div className="event__details--rightInnerBottom">
								<div className="event__details--buttonWrapper jw-flex jw-justify-between">
									{summary ? (
										<Tippy
											content={
												<p className="jw-p-2">
													{summary}
												</p>
											}
											trigger="click"
											theme="light"
											animation="shift-away"
										>
											<button
												className={`jw-text-white jw-font-semibold jw-tracking-wider jw-py-1 jw-px-4 jw-rounded jw-transition jw-duration-200 jw-ease-in-out ${!firstButtonBackgroundColor &&
													'jw-bg-blue-500 hover:jw-bg-blue-700'}`}
												style={{
													background: firstButtonBackgroundColor,
												}}
											>
												Info
											</button>
										</Tippy>
									) : null}
									{status === 'live' ? (
										<button
											id={`eventbrite-widget-modal-trigger-${id}`}
											type="button"
											className={`jw-text-white jw-font-semibold jw-tracking-wide jw-py-1 jw-px-4 jw-mr-2 jw-rounded jw-transition jw-duration-200 jw-ease-in-out ${!secondButtonBackgroundColor &&
												'jw-bg-orange-500 hover:jw-bg-orange-700'}`}
											style={{
												backgroundColor: secondButtonBackgroundColor,
											}}
										>
											Sign up
										</button>
									) : null}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	);
}
