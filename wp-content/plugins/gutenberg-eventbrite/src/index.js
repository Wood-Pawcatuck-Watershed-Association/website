/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */
import { registerBlockType } from '@wordpress/blocks';
import { Fragment } from '@wordpress/element';
import { TextControl, PanelBody } from '@wordpress/components';
import { InspectorControls } from '@wordpress/editor';

/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */
registerBlockType( 'create-block/gutenberg-eventbrite', {
	/**
	 * This is the display title for your block, which can be translated with `i18n` functions.
	 * The block inserter will show this name.
	 */
	title: __( 'Gutenberg Eventbrite', 'create-block' ),

	/**
	 * This is a short description for your block, can be translated with `i18n` functions.
	 * It will be shown in the Block Tab in the Settings Sidebar.
	 */
	description: __(
		'A gutenberg block that fetches eventbrite events',
		'create-block'
	),

	/**
	 * Blocks are grouped into categories to help users browse and discover them.
	 * The categories provided by core are `common`, `embed`, `formatting`, `layout` and `widgets`.
	 */
	category: 'widgets',

	/**
	 * An icon property should be specified to make it easier to identify a block.
	 * These can be any of WordPress’ Dashicons, or a custom svg element.
	 */
	icon: 'smiley',

	/**
	 * Optional block extended support features.
	 */
	supports: {
		// Removes support for an HTML mode.
		html: false,
	},

	attributes: {
		apiKey: {
			type: 'string',
		},
	},

	/**
	 * The edit function describes the structure of your block in the context of the editor.
	 * This represents what the editor will render when the block is used.
	 *
	 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
	 *
	 * @param {Object} [props] Properties passed from the editor.
	 *
	 * @return {WPElement} Element to render.
	 */
	edit( { className, attributes, setAttributes } ) {
		const { apiKey } = attributes;

		return (
			<Fragment>
				<Fragment>
					<InspectorControls>
						<PanelBody
							title="Eventbrite Settings"
							initialOpen={ true }
						>
							<TextControl
								label="Api Key"
								value={ apiKey }
								help={
									<p>
										Get api key{ ' ' }
										<a
											href="https://www.eventbrite.com/platform/api-keys"
											target="_blank"
											rel="noopener noreferrer"
										>
											here
										</a>
									</p>
								}
								onChange={ ( newApiKey ) =>
									setAttributes( { apiKey: newApiKey } )
								}
							/>
						</PanelBody>
					</InspectorControls>
				</Fragment>

				<p className={ className }>Api Key: { apiKey }</p>
			</Fragment>
		);
	},

	/**
	 * The save function defines the way in which the different attributes should be combined
	 * into the final markup, which is then serialized by the block editor into `post_content`.
	 *
	 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
	 *
	 * @return {WPElement} Element to render.
	 */
	save( attributes ) {
		const { apiKey } = attributes;

		return <p>Api Key: { apiKey }</p>;
	},
} );
