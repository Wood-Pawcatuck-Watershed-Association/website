import { Fragment } from '@wordpress/element';
import {
	ColorIndicator,
	TextControl,
	Panel,
	PanelBody,
	PanelRow,
	ColorPalette,
} from '@wordpress/components';
import { InspectorControls } from '@wordpress/block-editor';

export default function EditBlock({ attributes, setAttributes }) {
	const {
		firstButtonBackgroundColor,
		secondButtonBackgroundColor,
		apiKey,
		heading,
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
					</PanelBody>
					<PanelBody title="Design settings">
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

			<TextControl
				label="Heading"
				value={heading}
				onChange={(newHeading) =>
					setAttributes({ heading: newHeading })
				}
			/>
		</Fragment>
	);
}
