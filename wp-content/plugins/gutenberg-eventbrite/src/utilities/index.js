function getWindowData(...props) {
	return props.map((prop) => {
		return window.eventbriteCardsBlockExports[prop];
	});
}
export { getWindowData };
