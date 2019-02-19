// Retrieve IP geotracking data from API
var ipAPI="http://ip-api.com/json/?callback=?";

$(document).ready(function() {
	var ipTracker = Cookies.get('cubo-iptracker');
	if(!ipTracker) {
		$.getJSON(ipAPI,function(json) {
			Cookies.set('cubo-iptracker',json,{ expires: 7, path: '/' });
			alert('Called API!!!');
		});
	}
});