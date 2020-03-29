import { Fragment } from "@wordpress/element";
import { TextControl, PanelBody } from "@wordpress/components";
import { InspectorControls } from "@wordpress/block-editor";

export default function EditBlock({ attributes, setAttributes }) {
	const { apiKey, heading } = attributes;

	return (
		<Fragment>
			<Fragment>
				<InspectorControls>
					<PanelBody title="Eventbrite Settings" initialOpen={true}>
						<TextControl
							label="Api Key"
							value={apiKey}
							help={
								<p>
									Get api key{" "}
									<a
										href="https://www.eventbrite.com/platform/api-keys"
										target="_blank"
										rel="noopener noreferrer"
									>
										here
									</a>
								</p>
							}
							onChange={newApiKey => setAttributes({ apiKey: newApiKey })}
						/>
					</PanelBody>
				</InspectorControls>
			</Fragment>

			<TextControl
				label="heading"
				value={heading}
				onChange={newHeading => setAttributes({ heading: newHeading })}
			/>
		</Fragment>
	);
}
