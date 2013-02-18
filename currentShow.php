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

	
	
	//get the current time in EST and use it to find out which show is playing					 
   date_default_timezone_set('US/Eastern');
   $currenttime = date('N:H:i:s');
   list($day,$hrs,$mins,$secs) = split(':',$currenttime);
        
	//the shows run until 2 in the morning, which is the next day, but they still count as the day before.
	//for example, at 1AM on tuesday, the last show for monday is airing. 
	$dayArray = $mondayShows;
	if($hrs == 0 || $hrs == 1 || $hrs == 2)
	{
		$day = $day -1;
		if($day == 0)
		{
			//the days run 1 - 7 because PHP's date function makes no sense
			$day = 1;
		}
	}
	
	switch($day)
	{
		case 1:
			$dayArray = $mondayShows;
			break;
		case 2:
			$dayArray = $tuesdayShows;
			break;
		case 3:
			$dayArray = $wednesdayShows;
			break;
		case 4:
			$dayArray = $thursdayShows;
			break;
		case 5:
			$dayArray = $fridayShows;
			break;
		case 6:
			$dayArray = $saturdayShows;
			break;
		
	}
	
	  	
        
   if($hrs >= 10 && $hrs < 12)
   {
   		echo $dayArray[0];
   }
   
   if($hrs >= 12 && $hrs < 14)
   {
   		echo $dayArray[1];
   }
   
   if($hrs >= 14 && $hrs < 16)
   {
   		echo $dayArray[2];
   }
   
   if($hrs >= 16 && $hrs < 18)
   {
   		echo $dayArray[3];
   }
   
   if($hrs >= 18 && $hrs < 20)
   {
   		echo $dayArray[4];
   }
   
   if($hrs >= 20 && $hrs < 22)
   {
   		echo $dayArray[5];
   }
   
   if($hrs >= 22 && $hrs < 24)
   {
		echo $dayArray[6];
   }
   
   if($hrs >= 0 && $hrs < 2)
   {
   		echo $dayArray[7];
   }
   
   if($hrs >= 2 && $hrs < 10)
   {
   		echo "Off The Air";
   }

?>