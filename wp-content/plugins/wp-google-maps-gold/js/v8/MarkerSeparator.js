jQuery(function($) {
	
	function log(str, tabs)
	{
		return;
		
		if(tabs)
			for(var i = 0; i < tabs; i++)
				str = "\t" + str;
		
		console.log(str);
	}
	
	WPGMZA.MarkerSeparator = function(map_id)
	{
		this.map = WPGMZA.getMapByID(map_id);
		this.map_id = map_id;
		this.groups = [];
		
		// Default threshold of 50 meters ()
		this.threshold		= 50 / 1000;
		
		// Load settings
		if(window.wpgmza_nvc_affected_radius)
			this.threshold = (window.wpgmza_nvc_affected_radius * 100000) / 1000;
		
		log("Threshold is " + this.threshold);
		
		// Group markers
		this.groupMarkers();
	}
	
	WPGMZA.MarkerSeparator.prototype.destroy = function()
	{
		var markers = this.getMarkers();
		
		markers.forEach(function(marker) {
			delete marker.separatorGroup;
		});
	}
	
	WPGMZA.MarkerSeparator.getNativeLatLng = function(latLng)
	{
		if(WPGMZA.isProVersionBelow7_10_00)
			return WPGMZA.LatLng.fromGoogleLatLng(latLng);
		
		return new WPGMZA.LatLng(latLng);
	}
	
	WPGMZA.MarkerSeparator.prototype.getMarkers = function()
	{
		var markers = [];
		
		for(var marker_id in marker_array[this.map_id])
			markers.push(marker_array[this.map_id][marker_id]);
		
		return markers;
	}
	
	WPGMZA.MarkerSeparator.prototype.areMarkersWithinThreshold = function(a, b)
	{
		var positionA = WPGMZA.MarkerSeparator.getNativeLatLng(a.getPosition());
		var positionB = WPGMZA.MarkerSeparator.getNativeLatLng(b.getPosition());
		var distance = WPGMZA.Distance.between(positionA, positionB);
		
		log("Distance between " + a.id + " and " + b.id + " is " + distance);
		
		return distance <= this.threshold;
	}
	
	WPGMZA.MarkerSeparator.prototype.groupNearbyMarkers = function(marker, unassigned, depth)
	{
		var self = this;
		//var currentGroup = marker.separatorGroup;
		var currentGroup = null;
		
		log("Grouping nearby markers to " + marker.id + " out of " + unassigned.length + " unassigned", depth);
		
		if(currentGroup)
			log("This marker is currently in a group of " + currentGroup.markers.length, depth);
		else
			log("This marker is not in a group", depth);
		
		if(!unassigned.length)
			return;
		
		// Pick one point and look at all the others in the unassigned group and see whether the meet the radii criterion you describe.
		for(var i = 0; i < unassigned.length; i++)
		{
			var other = unassigned[i];
			
			if(!this.areMarkersWithinThreshold(marker, other))
				continue;
			
			if(!currentGroup)
			{
				if(marker.separatorGroup)
				{
					log("Setting current group to group with marker " + marker.id, depth);
					
					currentGroup = marker.separatorGroup;
				}
				else
				{
					log("Creating new group with " + marker.id, depth);
					
					currentGroup = new WPGMZA.MarkerSeparatorGroup();
					currentGroup.addMarker(marker);
					
					if(WPGMZA.isProVersionBelow7_10_00)
						currentGroup.placeholder.googleMarker.setMap(this.map);
					else
						this.map.addMarker(currentGroup.placeholder);
					
					this.groups.push(currentGroup);
				}
			}
			
			log("Adding marker " + other.id + " to group with marker " + marker.id, depth);
			
			// If yes, start a group, and continue on with all the other points to see if they fit in this group (based on your current point), and if they fit in, move them from the unassigned group into this new one.
			currentGroup.addMarker(other);
			
			unassigned.splice(i, 1);
			i--;
			
			log("There are now " + unassigned.length + " markers left on the unassigned list", depth);
		}
		
		if(currentGroup)
		{
			log("Iterating over current group markers", depth);
			
			// When done with the current point, go to each point added to the group and check all the points in the unassigned group.
			for(var i = 1; i < currentGroup.markers.length; i++)
				this.groupNearbyMarkers(currentGroup.markers[i], unassigned, depth + 1);
		}
		// Else, the marker will be discarded by groupMarkers
	}
	
	WPGMZA.MarkerSeparator.prototype.groupMarkers = function()
	{
		// Start with all of the points in the unassigned group.
		var unassigned = this.getMarkers();
		var marker;
		
		log("Grouping " + unassigned.length + " markers");
		
		while(marker = unassigned.shift())
		{
			log("Popped marker " + marker.id + " off unassigned stack");
			
			this.groupNearbyMarkers(marker, unassigned, 0);
		}
		
		log(this.groups);
	}
	
	$(document.body).on("markersplaced.wpgmza", function(event) {
		
		var map_id = event.target.id.match(/\d+$/);
		var map = WPGMZA.getMapByID(map_id);
		
		if(map.markerSeparator)
			map.markerSeparator.destroy();
		
		map.markerSeparator = new WPGMZA.MarkerSeparator(map_id);
		
	});
	
});