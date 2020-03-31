function getWindowData( ...props ) {
	return props.map( ( prop ) => {
		return window.eventbriteBlocksExports[ prop ];
	} );
}
export { getWindowData };
