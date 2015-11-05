



	/**
	*
	*	HOME|JS
	*	--------------------
	*	DESC | Home scripts definition
	*	LOCATION | > scripts > home.js
	*
	*/


	
	

	




	/**
	*
	*	PAGE|JS
	*	--------------------
	*	DESC | Page global class definition
	*	LOCATION | > scripts > pages > page.js
	*
	*/

	




	




	/**
	*
	*	DROPDOWN|JS
	*	------------------
	*	DESC | Dropdown interactions script definition
	*	LOCATION | > scripts > modules > controls > dropdown.js
	*
	*/








	/*----------  INTERACTIONS  ----------*/



	// Click
	
	$('.dropdown').on('click', function (e)
	{

		// Default behavior
		// e.preventDefault();

		// State
		var elem = $(this);
		if(elem.hasClass('open')){ elem.addClass('close').removeClass('open'); }
		else{ elem.addClass('open').removeClass('close'); }

	});
	






	/**
	*
	*	SWITCH|JS
	*	------------------
	*	DESC | Switchs interactions scripts
	*	LOCATION | > scripts > modules > controls > switch.js
	*
	*/






	/*----------  INTERACTIONS  ----------*/



	// Click
	
	$('.switch').on('click', function (e)
	{

		// Elem
		var elem = $(this);

		// if (Cookies.get('gender') == e.) {};

		// Value
		var value = null;
		if(elem.hasClass('active-left')){ value = elem.find('.switch-label-left').attr('data-value'); }
		else{ value = elem.find('.switch-label-right').attr('data-value'); }

		if ($(e.target).is("span")) {
			return false;
		};

		console.log($(e.target))

		if ($(e.target).attr('data-value') == Cookies.get('gender')) {
			e.preventDefault();
			return false;
		};

		elem.find('.switch-value').val(value);

		// Toggle
		elem.toggleClass('active-left').toggleClass('active-right');

	});
	
	
console.log($('.dropdown-items'));

$('.dropdown-items li').hover( function (e) {
	console.log($(this).find('i'));
	// console.log($(this).find('i'));
	// $(this).find('i').alpha(1);
});


	/**
	*
	*	FOOTER|JS
	*	--------------------
	*	DESC | Footer shared scripts definition
	*	LOCATION | > scripts > shared > partials > footer.js
	*
	*/




	




	/**
	*
	*	HEADER|JS
	*	--------------------
	*	DESC | Header shared scripts definition
	*	LOCATION | > scripts > shared > partials > header.js
	*
	*/




	




	/**
	*
	*	MAIN|JS
	*	--------------------
	*	DESC | Main shared scripts definition
	*	LOCATION | > scripts > shared > partials > main.js
	*
	*/


	/**
	*
	*	TWITTER|JS
	*	--------------------
	*	DESC |TWITTER
	*
	*/

    $URL = $('body').data('url');
    
    // Facebook Shares Count
    $.getJSON( 'http://graph.facebook.com/?id=' + $URL, function( fbdata ) {
        $('.color-facebook span').text(ReplaceNumberWithCommas(fbdata.shares));
    });
    
    // Twitter Shares Count
    $.getJSON( 'http://cdn.api.twitter.com/1/urls/count.json?url=' + $URL + '&callback=?', function( twitdata ) {
        $('.color-twitter span').text(ReplaceNumberWithCommas(twitdata.count));
    });



// Format Number functions
function ReplaceNumberWithCommas(yourNumber) {
    //Seperates the components of the number
    var components = yourNumber.toString().split(".");
    //Comma-fies the first part
    components [0] = components [0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    //Combines the two sections
    return components.join(".");
}

function twitterShare (e) {

  var that = this;

  var twitterWindow = window.open('https://twitter.com/intent/tweet?url=' + window.location.href + '&text=Je viens de trouver des habits sur Urban & Stylish ', 'twitter-popup', 'height=350,width=600');

  if(twitterWindow.focus) { twitterWindow.focus(); }
    return false;
};

function fbShare(url, title, descr, image, winWidth, winHeight) {
	var winTop = (screen.height / 2) - (winHeight / 2);
	var winLeft = (screen.width / 2) - (winWidth / 2);
	window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
}