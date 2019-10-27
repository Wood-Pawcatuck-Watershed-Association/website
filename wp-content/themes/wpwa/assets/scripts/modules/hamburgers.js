class Hamburgers{

	click(element)
	{
		this.element = element
		// Look for .hamburger
	  	let hamburger = document.querySelector(element);
		// On click
	  	hamburger.addEventListener("click", function() {
	    	// Toggle class "is-active"
	    	hamburger.classList.toggle("is-active");
	    	// Do something else, like open/close menu
	  	});
	}
}
export default Hamburgers;