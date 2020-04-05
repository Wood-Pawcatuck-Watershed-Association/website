import { Fragment, useState } from '@wordpress/element';
import {
	SelectControl,
	TextControl,
	PanelBody,
	PanelRow,
	ColorPalette,
	Button,
	Spinner,
	Dashicon,
} from '@wordpress/components';
import { InspectorControls } from '@wordpress/block-editor';
import { dispatch, select } from '@wordpress/data';
import axios from 'axios';
import Event from '../components/Event';
import styles from '../style.module.css';
import classNames from 'classnames/bind';

const cx = classNames.bind( styles );

export default function EditBlock( { attributes, setAttributes } ) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
		apiKey,
		status,
	} = attributes;

	const [ apiKeyState, setApiKeyState ] = useState( apiKey );
	const [ apiKeyLoading, setApiKeyLoading ] = useState( false );
	const [ apiKeyError, setApiKeyError ] = useState( false );

	const defaultColors = [
		{ name: 'blue', color: '#495EB1' },
		{ name: 'orange', color: '#FF9F00' },
	];

	const testApiKey = () => {
		setApiKeyLoading( true );
		axios
			.get(
				`https://www.eventbriteapi.com/v3/users/me/?token=${ apiKeyState }`
			)
			.then( ( response ) => {
				setApiKeyLoading( false );
				setAttributes( { apiKey: apiKeyState } );
				setApiKeyError( false );
				setAttributes( {
					id: select( 'core/editor' ).getCurrentPostId(),
				} );
				dispatch( 'core/editor' ).savePost();
			} )
			.catch( ( error ) => {
				setApiKeyLoading( false );
				setApiKeyError( error.response.data.error_description );
				setAttributes( { apiKey: null } );
			} );
	};

	return (
		<Fragment>
			<InspectorControls>
				<PanelBody title="Eventbrite Api Settings" initialOpen={ true }>
					<PanelRow>
						<TextControl
							label="Api Token Key"
							value={ apiKeyState }
							help={
								<p>
									Get api token{ ' ' }
									<a
										href="https://www.eventbrite.com/platform/api-keys"
										target="_blank"
										rel="noopener noreferrer"
										className={ cx( 'text-blue-500' ) }
									>
										here
									</a>
								</p>
							}
							onChange={ ( newApiKey ) => {
								setApiKeyState( newApiKey );
							} }
						/>
					</PanelRow>
					{ apiKeyError && (
						<PanelRow>
							<p className={ cx( 'text-red-700' ) }>
								{ apiKeyError }
							</p>
						</PanelRow>
					) }
					<PanelRow>
						<Button
							isSecondary
							isBusy={ apiKeyLoading }
							onClick={ () => testApiKey( apiKeyState ) }
						>
							Save Api Key
						</Button>
						<div className="jw-text-center">
							{ apiKeyLoading && <Spinner /> }
						</div>
					</PanelRow>
				</PanelBody>
				<PanelBody title="Eventbrite Event Setttings">
					<PanelRow>
						<SelectControl
							label="Status"
							value={ status }
							options={ [
								{ label: 'Live', value: 'live' },
								{ label: 'Draft', value: 'draft' },
								{ label: 'All', value: 'all' },
							] }
							onChange={ ( newStatus ) => {
								setAttributes( { status: newStatus } );
							} }
						/>
					</PanelRow>
				</PanelBody>
				<PanelBody title="Eventbrite Design Settings">
					<PanelRow>
						<label htmlFor="firstButtonBackgroundColor">
							First button background color
						</label>
					</PanelRow>
					<PanelRow>
						<ColorPalette
							id="firstButtonBackgroundColor"
							value={ firstButtonBackgroundColor }
							onChange={ ( newColor ) =>
								setAttributes( {
									firstButtonBackgroundColor: newColor,
								} )
							}
							colors={ defaultColors }
						/>
					</PanelRow>
					<PanelRow>
						<label htmlFor="secondButtonBackgroundColor">
							Second button background color
						</label>
					</PanelRow>
					<PanelRow>
						<ColorPalette
							id="secondButtonBackgroundColor"
							value={ secondButtonBackgroundColor }
							onChange={ ( newColor ) =>
								setAttributes( {
									secondButtonBackgroundColor: newColor,
								} )
							}
							colors={ defaultColors }
						/>
					</PanelRow>
				</PanelBody>
			</InspectorControls>

			<Fragment>
				{ ! apiKey ? (
					<div
						className={ cx(
							'bg-red-900',
							'text-center',
							'py-4',
							'lg:px-4',
							'font-sans',
							'rounded'
						) }
					>
						<div
							className={ cx(
								'p-2',
								'items-center',
								'text-indigo-100',
								'bg-red-800',
								'lg:rounded-full',
								'flex',
								'lg:inline-flex'
							) }
							role="alert"
						>
							<div className={ cx( 'mr-8' ) }>
								<Dashicon icon="info" size={ 32 } />
							</div>
							<span
								className={ cx(
									'font-medium',
									'mr-2',
									'text-left',
									'flex-auto'
								) }
							>
								An Api Token Key is required. Please enter your
								Eventbrite Api Token Key in the block settings.
							</span>
						</div>
					</div>
				) : (
					<div className="eventbrite-blocks-css-wrapper">
						<p className={ cx( 'font-sans', 'text-center' ) }>
							This is a static preview of an Eventbrite event.
						</p>
						<Event
							className="jw-mx-auto"
							title={ 'Event Title' }
							description={ 'Event description' }
							summary={ 'Event description summary' }
							cost={ '$25' }
							startDate={ new Date() }
							image={ 'https://placekitten.com/500/500' }
							status={ 'live' }
							colors={ {
								firstButtonBackgroundColor,
								secondButtonBackgroundColor,
							} }
							venue={ {
								name: 'Venue name',
								address: {
									city: 'Providence',
									region: 'RI',
								},
							} }
						/>
					</div>
				) }
			</Fragment>
		</Fragment>
	);
}
