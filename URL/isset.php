<?php
if (!isset($_GET['email']) && !isset($_GET['message']))
{
	echo('Il fau un email et un message pour soumettre le formulaire.');
	
	// Arrête l'exécution de PHP
    return;
}
?>