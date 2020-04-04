import { useEffect } from '@wordpress/element';
import { format } from '@wordpress/date';
import Tippy from '@tippyjs/react';
import '../vendor/eventbrite';
import styles from '../style.module.css';
import classNames from 'classnames/bind';

const cx = classNames.bind( styles );

const baseButtonStyles = [
	'text-white',
	'font-semibold',
	'tracking-wider',
	'py-1',
	'px-4',
	'rounded',
	'transition',
	'duration-200',
	'ease-in-out',
];

export default function Event( {
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
} ) {
	useEffect( () => {
		if ( ! id ) return;
		// eslint-disable-next-line no-undef
		EBWidgets.createWidget( {
			widgetType: 'checkout',
			eventId: id,
			modal: true,
			modalTriggerElementId: `eventbrite-widget-modal-trigger-${ id }`,
		} );
	}, [ id ] );

	const { firstButtonBackgroundColor, secondButtonBackgroundColor } = colors;
	const { name: venueName, address } = venue;

	return (
		<article
			className={ cx(
				'event__single',
				'max-w-xs',
				'w-full',
				'px-2',
				'mb-4',
				'h-full',
				'font-sans',
				className
			) }
		>
			<div>
				{ image ? (
					<img
						src={ image }
						className={ cx(
							'block',
							'h-32',
							'flex-none',
							'object-cover',
							'object-center',
							'rounded-t',
							'text-center',
							'w-full',
							'overflow-hidden',
							'border-none'
						) }
						alt={ title }
					/>
				) : null }
				<div
					className={ cx(
						'border-r',
						'border-b',
						'border-l',
						'border-grey-light',
						'bg-white',
						'rounded-b',
						'py-4',
						'px-2',
						'flex',
						'flex-col',
						'justify-between',
						'leading-normal',
						'shadow-md'
					) }
				>
					<div className={ cx( 'event__details', 'flex' ) }>
						<div className={ cx( 'event__details--left' ) }>
							<div
								className={ cx(
									'event__details--dateWrapper',
									'text-center'
								) }
							>
								<p
									className={ cx(
										'event__details--dateMonth',
										'text-sm',
										'text-red-600',
										'uppercase',
										'my-0',
										'font-sans',
										'leading-tight'
									) }
								>
									<time>{ format( 'M', startDate ) }</time>
								</p>
								<p
									className={ cx(
										'event__details--dateDay',
										'text-xl',
										'text-grey-800',
										'my-0',
										'font-sans'
									) }
								>
									<time>{ format( 'd', startDate ) }</time>
								</p>
							</div>
						</div>
						<div
							className={ cx(
								'event__details--right',
								'event__details--right',
								'pl-2',
								'truncate',
								'pb-2',
								'pr-2',
								'w-full'
							) }
						>
							<div
								className={ cx(
									'event__details--rightInnerTop'
								) }
							>
								<h3
									className={ cx(
										'my-0',
										'text-black',
										'font-semibold',
										'text-sm',
										'm-0',
										'truncate'
									) }
								>
									{ title }
								</h3>
								<div
									className={ cx(
										'event__details--dateWrapper'
									) }
								>
									<time
										className={ cx(
											'event__details--date',
											'font-sans',
											'text-grey-dark',
											'text-xs',
											'font-medium',
											'm-0'
										) }
									>
										{ format(
											'D, M d Y, g:ia',
											startDate
										) }
									</time>
								</div>
								<div
									className={ cx( 'event__details--venue' ) }
								>
									<p
										className={ cx(
											'font-sans',
											'text-grey-dark',
											'text-xs',
											'm-0',
											'truncate'
										) }
									>
										{ venueName }
									</p>
									<p
										className={ cx(
											'font-sans',
											'text-grey-dark',
											'text-xs',
											'm-0',
											'truncate'
										) }
									>
										{ address.city }, { address.region }
									</p>
								</div>
								<p
									className={ cx(
										'text-sm',
										'text-grey-dark',
										'flex',
										'items-center',
										'font-sans',
										'mb-2',
										'mt-0'
									) }
								>
									<span>{ cost }</span>
								</p>
							</div>
							<div
								className={ cx(
									'event__details--rightInnerBottom'
								) }
							>
								<div
									className={ cx(
										'event__details--buttonWrapper',
										'flex',
										'justify-between'
									) }
								>
									{ summary ? (
										<Tippy
											className={ cx(
												'eventbrite-blocks-css-wrapper'
											) }
											content={
												<p className={ cx( 'p-2' ) }>
													{ summary }
												</p>
											}
											trigger="click"
											theme="light"
											animation="shift-away"
										>
											<button
												className={ cx(
													baseButtonStyles,
													{
														'bg-blue-500': ! firstButtonBackgroundColor,
													},
													{
														'hover:bg-blue-700': ! firstButtonBackgroundColor,
													}
												) }
												style={ {
													background: firstButtonBackgroundColor,
												} }
											>
												Info
											</button>
										</Tippy>
									) : null }
									{ status === 'live' ? (
										<button
											id={ `eventbrite-widget-modal-trigger-${ id }` }
											type="button"
											className={ cx(
												baseButtonStyles,
												'mr-2',
												{
													'bg-orange-500': ! secondButtonBackgroundColor,
												},
												{
													'hover:bg-orange-700': ! secondButtonBackgroundColor,
												}
											) }
											style={ {
												backgroundColor: secondButtonBackgroundColor,
											} }
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
