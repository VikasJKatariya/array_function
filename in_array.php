<?php

//*******************************************************

//Author : Vikas Katariya

//*******************************************************

//The in_array() function searches an array for a specific value.

//Note: If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.

############################################################################################

$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }

//output: Match found

 ############################################################################################

$peoples = array("Peter", "Joe", "Glenn", "Cleveland", 23);

if (in_array("23", $peoples, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }
if (in_array("Glenn",$peoples, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }

if (in_array(23,$peoples, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }

//output:
  
/*Match not found
Match found
Match found*/

############################################################################################
?>