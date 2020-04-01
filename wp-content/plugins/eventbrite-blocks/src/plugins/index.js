import { registerPlugin } from '@wordpress/plugins';
import { PluginSidebar, PluginSidebarMoreMenuItem } from '@wordpress/edit-post';
import { PanelBody } from '@wordpress/components';

registerPlugin( 'plugin-eventbrite-blocks', {
	render: () => (
		<>
			<PluginSidebarMoreMenuItem target="plugin-eventbrite-block">
				Eventbrite Blocks
			</PluginSidebarMoreMenuItem>
			<PluginSidebar
				name="plugin-eventbrite-block"
				title="Eventbrite Blocks"
			>
				<PanelBody>{ 'My sidebar content' }</PanelBody>
			</PluginSidebar>
		</>
	),
} );
