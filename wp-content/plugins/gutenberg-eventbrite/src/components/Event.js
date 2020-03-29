import { format } from '@wordpress/date';

export default function Event( {
	title,
	description,
	cost,
	startDate,
	image,
	status,
} ) {
	return (
		<article className="max-w-xs w-full px-2 mb-4 h-full">
			<div className="event__single">
				{ image ? (
					<div
						className="h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden"
						style={ { backgroundImage: `url(${ image })` } }
					></div>
				) : null }
				<div className="border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md">
					<div className="event__details flex">
						<div className="event__details--left">
							<div className="event__details--dateWrapper text-center">
								<p className="event__details--dateMonth text-sm text-red uppercase my-0 font-sans">
									<time>{ format( 'M', startDate ) }</time>
								</p>
								<p className="event__details--dateDay text-xl text-grey-dark my-0 font-sans">
									<time>{ format( 'd', startDate ) }</time>
								</p>
							</div>
						</div>
						<div className="event__details--right ml-2">
							<div className="event__details--rightInnerTop">
								<h3 className="my-0 text-black font-semibold text-sm">
									{ title }
								</h3>
								<div className="event__details--dateWrapper">
									<time className="event__details--date font-sans text-grey-dark text-xs">
										{ format( 'D, M d Y, ha', startDate ) }
									</time>
								</div>
								<p className="text-sm text-grey-dark flex items-center font-sans mb-2">
									<span>{ cost }</span>
								</p>
							</div>
							<div className="event__details--rightInnerBottom">
								<div className="event__details--buttonWrapper flex justify-between">
									{ description ? (
										<button
											data-tippy-content="<?= $description; ?>"
											className="bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mr-2 rounded"
										>
											info
										</button>
									) : null }
									{ status === 'live' ? (
										<button
											id="eventBriteModalId(event.id)"
											type="button"
											className="bg-orange hover:bg-blue-dark text-white font-bold py-2 px-4 rounded"
										>
											Sign up
										</button>
									) : null }
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	);
}
