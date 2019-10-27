jQuery(function($) {
	
	function onNearVicinityModuleChanged(event)
	{
		var useLegacy = $("input[name='marker_separator_use_legacy_module']").prop("checked");
		
		if(useLegacy)
		{
			$(".wpgmza-marker-separator-legacy-setting").show();
			$(".wpgmza-marker-separator-modern-setting").hide();
		}
		else
		{
			$(".wpgmza-marker-separator-legacy-setting").hide();
			$(".wpgmza-marker-separator-modern-setting").show();
		}
	}
	
	onNearVicinityModuleChanged();
	
	$("input[name='marker_separator_use_legacy_module']").on("change", onNearVicinityModuleChanged);
	
});