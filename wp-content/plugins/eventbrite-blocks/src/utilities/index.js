function getLocalizeData( ...props ) {
	return props.map( ( prop ) => {
		// eslint-disable-next-line no-undef
		return eventbriteBlocks[ prop ];
	} );
}
export { getLocalizeData };
