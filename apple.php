<?php

// Looking for red juicy apple

$objectColor = "red"; // Red, Blue, Yellow, Orange
$objectHasJuice = true; // True, False
$objectName = ""; // Apple, Hammer, Car, Banana

function isValidInput(){
	if(isset($_GET["name"])){

		$userItem = $_GET["name"];

		if(isValidTerm($userItem)){
			return true;
		} else {
			return false;
		}

	} else {
		return false;
	}
}

function isValidTerm ($userItem){
	$validObject = ["apple", "hammer", "car", "banana"];
	foreach($validObject as $x) {

		if ($x == $userItem) {
			return true;
		} else {
			// continue
		}
	}
	return false;
}

function isApple($objectName){
	if ($objectName == "apple") {
		return true;
	} else {
		return false;
	}
}

function isJuicy($objectHasJuice){
	if ($objectHasJuice == true) {
		return true;
	} else {
		return false;
	}
}

function isRed($objectColor){
	if ($objectColor == "red") {
		return true;
	} else {
		return false;
	}
}

if (isValidInput()) {

	$objectName = $_GET["name"];
	if (isApple($objectName)) {

		if (isJuicy($objectHasJuice)) {

			if (isRed($objectColor)) {
				echo "Mmmmm... This is a red juicy apple!";
			} else {
				echo "Gross... This isn't a red juicy apple!";
			} 

		} else {
		echo "Gross... This isn't a red juicy apple!";
		}

	} else {
		echo "Gross... This isn't a red juicy apple!";
	}
} else {
	echo "Invalid input!";
}



?>