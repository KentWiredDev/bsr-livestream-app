<?php
	
	
	

	//im storing the names/hosts of all of the shows in here for now.
	//just because im too lazy to set up a mysql database. 
	$mondayShows = array("The Wake Up with Garmai Matthew, Felicia Ssempala, Rashade Bevel", 
						 "Mainstream Apocalypse with Kimberleigh Anderson, Maggie Morgans",
						 "The Constant Detour with Caitlin \"C-Dizzy\" David ",
						 "The New Noise with Justin Graci, Harrison Mills",
						 "All I Ever Wanted Was A Radio Show And I Got One with Andy Jardy ",
						 "Sleazy Beatz with Alyssa Haberman, Kelliann Dennison ",
						 "The Real Is Back with DJ Authentic, OG, JR",
						 "Flip The Tape with Sage Bruckner");
						 
	$tuesdayShows = array("Tuesday Tailgate with Christian Petrila, Jim Lessick ",
						  "Soup for Sides with Gina LaRocca, Brenda Riepenhoff ",
						  "Hipster Garbage with Jody Michael ",
						  "Back to the Past with Mike Fox",
						  "Kitty Kat Chat with David Sorboro, Matt Reymann, Ben Fekete ",
						  "Euphoria with Amnea Abu-Saleh, Lindsey Speyer ",
						  "League Radio with Bryan Haag, Josh Moyer, Evan Schorr, Phillip Wade ",
						  "The Tex and Danny Show: Pt II with Dylan Lusk, Griffin Jacob, John Paul Kleem 
");	
						  

	$wednesdayShows = array("TBA with TBA",
							"TBA with Alejandro DeJesus, Cris Ross",
							"Animalistic Affirmation with DJ Dubs ",
							"The Hit List with Raven Brinson, Lexxi Gillies ",
							"Pretty Hair and Thunder (P.H.A.T.) with Nathan Lehota, Anthony Savattt",
							"Sedatephobia with Megs, Jen, Brie",
							"Moontime Radio with Dan Herwerden, Eric Soros",
							"Women Who Rock with Julianna, Drew");
	
	$thursdayShows = array("Straight Talk Radio with Zach Mandel, Noah Ickowicz, Megan Hurley ",
						   "TBA with Jay Washington",
						   "Mastering Ceremonies with LA-Dub-Z and Y-Will",
						   "Black Noise with Mary Rodgers",
						   "Three Guys and a Girl with Kumar Mehta, Tyler Pina, Nick Schmucker, Natalie Moses",
						   "Word Play with Jensen DeArment, Erin Carlson",
					       "The Power of Words (P.O.W.) with Marvin Logan, Davion Morris",
						   "Double J's Mixtape with Jennifer Belissimo, Justin Rockhold");
						   
						   
	$fridayShows = array("As The Crow Flies with Emily Thomas",
						 "Elephant in the Room with Rob Young",
						 "Sports with Shook with Nick Shook",
						 "Finders Keepers with Rachel Campbell",							 					
						 "TBD with Trachel, Brittany, Dani",
						 "The Future with Lexie Martin, Brooklyn Hansley",
						 "TBA with Baxter Quatz",									
						 "TBA with Brittany Williams, Sarah Thorn");
	

	$saturdayShows = array("Outer Rim Radio with Matthew Cowles, Jeremy Herber",
						   "The Battle of the Ages with Big Stove, Kourtney",	
						   "Rubber City Rockhouse with DJ Kyber",
						   "Get Stoked On It! with Alex Taylor, Phillip Wade, Raeann Johnson, Hannah Summerville, Nick Onuska",											   "Face Value with AJ, Kara, Taylor",
						   "Radio Gravy with Scott Marchese, Aaron Buell, and Jarrod Will",
						   "TBA with Alex Fagan, Garrett Licata",													
						   "TBA with James Loss, Steve Waltl");

	$sundayShows = array("Electric Electrocution with Nicole Puzzuoli, Greg McQueen",
						 "TBA with David Rowe, Kyle Hunter, Ben Roman",
						 "Hour of Glower with Larry Honaker",
						 "A Double Shot of Sean with Sean Barie, Sean Eiler ",
						 "Keeping It Classy with Zac Younkins, Lorenzo Thomas",
						 "Rik an Rob Radio Rockstars with Rik and Rob",																
						 "TBA with Bryan Pilny, Antohny Garcia ",		
						 "Weekend Wind Down with Ben Infante");
	
	
	
	//get the day of the week that was posted over
	//if none, then we are just going to use the day acording to the server
	$day = $_GET['day'];
	if(!isset($day))
	{
		date_default_timezone_set('US/Eastern');
		$dayOfTheWeek = date('N');
		if($dayOfTheWeek == 1)
		{
			$day = "monday";
		}
		if($dayOfTheWeek == 2)
		{
			$day = "tuesday";
		}
		if($dayOfTheWeek == 3)
		{
			$day = "wednesday";
		}
		if($dayOfTheWeek == 4)
		{
			$day = "thursday";
		}
		if($dayOfTheWeek == 5)
		{
			$day = "friday";
		}
		if($dayOfTheWeek == 6)
		{
			$day = "saturday";
		}
		if($dayOfTheWeek == 7)
		{
			$day = "sunday";
		}
	}
	
	$dayArray = $mondayShows;
	if (strcmp($day, "monday") == 0)
	{
		$dayArray = $mondayShows;
	}
	if (strcmp($day, "tuesday") == 0)
	{
		$dayArray = $tuesdayShows;
	}
	if (strcmp($day, "wednesday") == 0)
	{
		$dayArray = $wednesdayShows;
	}
	if(strcmp($day, "thursday") == 0)
	{
		$dayArray = $thursdayShows;
	}
	if (strcmp($day, "friday") == 0)
	{
		$dayArray = $fridayShows;
	}
	if(strcmp($day, "saturday") == 0)
	{
		$dayArray = $saturdayShows;
	}
	if(strcmp($day, "sunday") == 0)
	{
		$dayArray = $sundayShows;
	}
	
	echo json_encode($dayArray);

?>