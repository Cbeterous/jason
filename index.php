<?php

require_once 'model.php';

$msg = '';
$codemsg ='';

$manager = new Connexion();

if (isset($_POST['envoyer']) && !empty($_POST['name'])) {
	$name = htmlspecialchars($_POST['name']);
	$result = $manager->insert($name);
	if ($result == 1) {
		$msg = 'L\'argonaute a bien été inséré';
		$codemsg = 'ok';
	} elseif ($result == 0) {
		$msg = 'L\'argonaute est déjà dans l\'équipe';
		$codemsg = 'alert';
	}
}

$liste = $manager->getList();

require_once 'vue.php';