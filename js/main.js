(function($, window) {


	var navigation = responsiveNav(".nav-collapse"),
        url = window.location.href;

    $('.nav-collapse a').filter(function(){
       return this.href == url;
    }).addClass('active');

	$("#slides").slidesjs({
		width: 700,
		height: 393
	});

    $(".map-container").gmap3({
        map: {
            options: {
                center: [19.704546, -101.197023],
                zoom: 17
            }
        },
        marker: {
            values: [
                {
                    latLng: [19.704546, -101.197023],
                    data: "Costalar",
                    options: {
                        icon: ""
                    }
                }

            ],
            options: {
                draggable: false
            }
        }
    });

    $('#get-in-touch').validate({
        rules: {
            name: 'required',
            email: {
                required: true,
                email: true
            },
            comments: 'required'
        }
    });

}(jQuery, window));