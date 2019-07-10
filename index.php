<?php
include ('src/Entity/user.php');
include ('src/Entity/meeting.php');

$user1 = new User("Marc", "André");
$user2 = new User("Pierre", "Aymeric");

$participants = array($user1);
$organizers = array($user2);
$meeting1 = new Meeting('07/07/2019', '07/08/2019', "PHP Golden Tour", "Evénement qui privilégie la qualité et la personnalisation du contact", $participants, $organizers);

var_dump($user1);
echo '<br/>';
var_dump($user2);
echo '<br/>';
var_dump($meeting1);