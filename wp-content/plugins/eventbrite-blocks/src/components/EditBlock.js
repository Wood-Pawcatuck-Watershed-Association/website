import { Fragment, useState } from '@wordpress/element';
import {
	SelectControl,
	TextControl,
	PanelBody,
	PanelRow,
	ColorPalette,
	Button,
	Spinner,
} from '@wordpress/components';
import { InspectorControls } from '@wordpress/block-editor';
import axios from 'axios';
import Event from '../components/Event';

export default function EditBlock({ attributes, setAttributes }) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
		apiKey,
		status,
	} = attributes;

	const [apiKeyState, setApiKeyState] = useState(apiKey);
	const [apiKeyLoading, setApiKeyLoading] = useState(false);
	const [apiKeyError, setApiKeyError] = useState(false);

	const testApiKey = (apiKeyState) => {
		setApiKeyLoading(true);
		axios
			.get(
				`https://www.eventbriteapi.com/v3/users/me/?token=${apiKeyState}`
			)
			.then((response) => {
				setApiKeyLoading(false);
				setAttributes({ apiKey: apiKeyState });
				setApiKeyError(false);
				setAttributes({
					id: Date.now(),
				});
			})
			.catch((error) => {
				setApiKeyLoading(false);
				setApiKeyError(error.response.data.error_description);
				setAttributes({ apiKey: null });
			});
	};

	return (
		<Fragment>
			<Fragment>
				<InspectorControls>
					<PanelBody title="Eventbrite Settings" initialOpen={true}>
						<PanelRow>
							<TextControl
								label="Api Key"
								value={apiKeyState}
								help={
									<p>
										Get api key{' '}
										<a
											href="https://www.eventbrite.com/platform/api-keys"
											target="_blank"
											rel="noopener noreferrer"
											className="jw-text-blue-500"
										>
											here
										</a>
									</p>
								}
								onChange={(newApiKey) => {
									setApiKeyState(newApiKey);
								}}
							/>
						</PanelRow>
						{apiKeyError && (
							<PanelRow>
								<p className="jw-text-red-700">{apiKeyError}</p>
							</PanelRow>
						)}
						{apiKeyLoading && (
							<PanelRow>
								<Spinner />
							</PanelRow>
						)}
						<PanelRow>
							<Button
								isDefault
								isBusy={apiKeyLoading}
								onClick={() => testApiKey(apiKeyState)}
							>
								Save Api Key
							</Button>
						</PanelRow>
						<PanelRow>
							<SelectControl
								label="Status"
								value={status}
								options={[
									{ label: 'Live', value: 'live' },
									{ label: 'Draft', value: 'draft' },
									{ label: 'All', value: 'all' },
								]}
								onChange={(newStatus) => {
									setAttributes({ status: newStatus });
								}}
							/>
						</PanelRow>
					</PanelBody>
					<PanelBody title="Design Settings">
						<PanelRow>
							<label htmlFor="firstButtonBackgroundColor">
								First button background color
							</label>
						</PanelRow>
						<PanelRow>
							<ColorPalette
								id="firstButtonBackgroundColor"
								value={firstButtonBackgroundColor}
								onChange={(newColor) =>
									setAttributes({
										firstButtonBackgroundColor: newColor,
									})
								}
								colors={[
									{ name: 'blue', color: '#495EB1' },
									{ name: 'orange', color: '#FF9F00' },
								]}
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
								value={secondButtonBackgroundColor}
								onChange={(newColor) =>
									setAttributes({
										secondButtonBackgroundColor: newColor,
									})
								}
								colors={[
									{ name: 'blue', color: '#495EB1' },
									{ name: 'orange', color: '#FF9F00' },
								]}
							/>
						</PanelRow>
					</PanelBody>
				</InspectorControls>
			</Fragment>

			<Fragment>
				{!apiKey ? (
					<p className="jw-font-sans">
						An Api Key is required. Please enter your Eventbrite Api
						Key in the block settings.
					</p>
				) : (
					<div>
						<p className="jw-font-sans jw-text-center">
							This is a static preview of an Eventbrite event
							card.
						</p>
						<Event
							id={52766401728}
							className="jw-mx-auto"
							title={'Event Title'}
							description={'Event description'}
							cost={'$25'}
							startDate={new Date()}
							image={'https://placekitten.com/500/500'}
							status={'live'}
							colors={{
								firstButtonBackgroundColor,
								secondButtonBackgroundColor,
							}}
							venue={{
								name: 'Venue name',
								address: {
									city: 'Providence',
									region: 'RI',
								},
							}}
						/>
					</div>
				)}
			</Fragment>
		</Fragment>
	);
}
