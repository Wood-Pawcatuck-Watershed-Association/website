import { Fragment } from '@wordpress/element';
import {
	SelectControl,
	TextControl,
	Panel,
	PanelBody,
	PanelRow,
	ColorPalette,
} from '@wordpress/components';
import { InspectorControls } from '@wordpress/block-editor';
import Event from '../components/Event';

export default function EditBlock({ attributes, setAttributes }) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
		apiKey,
		heading,
		status,
	} = attributes;

	return (
		<Fragment>
			<Fragment>
				<InspectorControls>
					<PanelBody title="Eventbrite Settings" initialOpen={true}>
						<PanelRow>
							<TextControl
								label="Api Key"
								value={apiKey}
								help={
									<p>
										Get api key{' '}
										<a
											href="https://www.eventbrite.com/platform/api-keys"
											target="_blank"
											rel="noopener noreferrer"
										>
											here
										</a>
									</p>
								}
								onChange={(newApiKey) => {
									setAttributes({
										apiKey: newApiKey,
									});
									setAttributes({
										id: Date.now(),
									});
								}}
							/>
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

			{/* <TextControl
				label="Heading"
				value={heading}
				onChange={(newHeading) =>
					setAttributes({ heading: newHeading })
				}
			/> */}
			{!apiKey ? (
				<p>
					An Api Key is required. Please enter your Eventbrite Api Key
					in the panel settings.{' '}
				</p>
			) : (
				<Fragment>
					<p className="jw-font-sans">
						This is a static preview of an Eventbrite event card.
					</p>
					<Event
						id={52766401728}
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
							address: { city: 'Providence', region: 'RI' },
						}}
					/>
				</Fragment>
			)}
		</Fragment>
	);
}
