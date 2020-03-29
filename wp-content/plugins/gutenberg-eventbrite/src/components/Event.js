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
	cost,
	startDate,
	image,
	status,
	colors,
}) {
	useEffect(() => {
		EBWidgets.createWidget({
			widgetType: 'checkout',
			eventId: id,
			modal: true,
			modalTriggerElementId: `eventbrite-widget-modal-trigger-${id}`,
		});
	}, [id]);

	const { firstButtonBackgroundColor, secondButtonBackgroundColor } = colors;

	return (
		<article className="jw-max-w-xs jw-w-full jw-px-2 jw-mb-4 jw-h-full">
			<div className="event__single">
				{image ? (
					<img
						src={image}
						className="jw-block jw-h-32 jw-flex-none jw-object-cover jw-object-center jw-rounded-t jw-text-center jw-w-full jw-overflow-hidden"
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
						<div className="event__details--right jw-ml-2">
							<div className="event__details--rightInnerTop">
								<h3 className="jw-my-0 jw-text-black jw-font-semibold jw-text-sm">
									{title}
								</h3>
								<div className="event__details--dateWrapper">
									<time className="event__details--date jw-font-sans jw-text-grey-dark jw-text-xs">
										{format('D, M d Y, ha', startDate)}
									</time>
								</div>
								<p className="jw-text-sm jw-text-grey-dark jw-flex jw-items-center jw-font-sans jw-mb-2">
									<span>{cost}</span>
								</p>
							</div>
							<div className="event__details--rightInnerBottom">
								<div className="event__details--buttonWrapper jw-flex jw-justify-between">
									{description ? (
										<Tippy
											content={
												<p className="jw-p-2">
													{description}
												</p>
											}
											trigger="click"
											theme="light"
											animation="shift-away"
										>
											<button
												className="jw-bg-blue-500 hover:jw-bg-blue-700 jw-text-white jw-font-bold jw-py-2 jw-px-4 jw-mr-2 jw-rounded jw-transition jw-duration-200 jw-ease-in-out"
												style={{
													backgroundColor: firstButtonBackgroundColor,
												}}
											>
												info
											</button>
										</Tippy>
									) : null}
									{status === 'live' ? (
										<button
											id={`eventbrite-widget-modal-trigger-${id}`}
											type="button"
											className="jw-bg-orange-500 hover:jw-bg-orange-700 jw-text-white jw-font-bold jw-py-2 jw-px-4 jw-rounded jw-transition jw-duration-200 jw-ease-in-out"
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
