//set the correct URL on the listen <a> depending if they are on andriod or iPhone
function setListenURL()
{
	
	var ua = navigator.userAgent.toLowerCase();
	var isiPhone= ua.indexOf("iphone" || "ipod") > -1; //&& ua.indexOf("mobile");
	if(isiPhone)
	{
		//document.getElementById("listenURL").href = "http://131.123.202.81:8000/listen.pls?sid=1";
		document.getElementById("listenURL").href = "playIphone.html";
	}
	else
	{
		document.getElementById("listenURL").href = "playRadio.html";
	}
}

//set the show text on the listviews
function setShowText(arr)
{
	//the time slots for all the shows
	var times = Array("10:00AM - 12:00PM", 
					  "12:00PM - 02:00PM",
					  "02:00PM - 04:00PM",
					  "04:00PM - 06:00PM",
					  "06:00PM - 08:00PM",
					  "08:00PM - 10:00PM",
					  "10:00PM - 12:00AM",
					  "12:00AM - 02:00AM" );
	
	$("#day").empty();
		
	for(var i = 0; i < arr.length; ++i)
	{
		var parts = arr[i].split("with");
		$("#day").append('<li><h1>'+ parts[0] +'</h1> <p class="ui-li-aside">'+  times[i] +'</p><p>with '+ parts[1] +'</p></li>');
	
	}
	
	$("ul").listview('refresh');
}

//this gets called when the user changes the selection in the select tag
function onSelectionChanged()
{
	var chosenDay = $("#dayPicker").val();
	$.ajax({ url: 'getShowsDay.php',
			 dataType: "json",
			 data: {"day" : chosenDay},
			 success: function(output){
				setShowText(output);
			}
	});
}

//change the day of the week on the selector, 
//0 = sunday
//1 = monday
//.…etc
function changeDayOfTheWeek(num)
{
	var dayString = "";
	switch(num)
	{
		case 0:
			dayString = "sunday";
			break;
		case 1:
			dayString = "monday";
			break;
		case 2:
			dayString = "tuesday";
			break;
		case 3:
			dayString = "wednesday";
			break;
		case 4:
			dayString = "thursday";
			break;
		case 5:
			dayString = "friday";
			break;
		case 6:
			dayString = "saturday";
			break;
	}
	
	$("#dayPicker").val(dayString);
	$('select').selectmenu('refresh', true);
}

//this gets called before the programGuide page is show
//we change the select box to display the correct date, and then
//make an ajax call to get all the shows on that day
$("#programGuide").live('pagebeforeshow', function(){
	
	var dayOfTheWeek = new Date().getDay();
	changeDayOfTheWeek(dayOfTheWeek);
	//this will get called when the page loads (will change to make it an event)
	var chosenDay = $("#dayPicker").val();
	$.ajax({ url: 'getShowsDay.php',
         dataType: "json",
         success: function(output) {
               setShowText(output);
        
        }
	});

});

//this gets called before the home page is shown.
//make an ajax call to get the current show and set the text
$("#home").live('pagebeforeshow', function(){	
	$.ajax({
		   url: 'currentShow.php',
		   success: function(output){
		   		$("#nowPlaying").text("Now Playing: " + output);
		   }
	});
});
