<?php

/***
* File: ajax/index_ajax.php
* Author: Georgiadis Polychronis
* Created: 3.1.2020
* Description: respond to ajax calls
***/

//include the required files
require_once('../oop/class.game.php');
require_once('../oop/class.tic-tac-toe.php');

//this will keep the game data as they make a new ajax request
session_start();

//respond to AJAX requests
echo doAction();

function doAction()
{
    $spot = isset($_GET['spot']) ? $_GET['spot'] : null;
    $value = isset($_GET['value']) ? $_GET['value'] : null;
    
    if (isset($_GET['type'])) {
        switch ($_GET['type'])
        {
            case "playGame":
                    return playGame($spot, $value);
            default:
                return "Invalid option selected.";
        }
    }
}

/***
* Purpose: Display and play the game
* Preconditions: a game exists
* Postconditions: the current game is displayed to the screen
***/
function playGame($spot, $value)
{	
	//if they haven't started a game yet let's load one
	if (!isset($_SESSION['game']['tictactoe'])) {
		$_SESSION['game']['tictactoe'] = new tictactoe();
    }
	
	echo "<h2>Let's Play Tic Tac Toe!</h2>";
	$_SESSION['game']['tictactoe']->playGame($spot, $value);
}