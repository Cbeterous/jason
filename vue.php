<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Les Argonautes</title>
  <link rel="stylesheet" type="text/css" href="custom.css">
</head>

<body>

<!-- Header section -->
<header>
  <h1>
    <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
    Les Argonautes
  </h1>
</header>

<!-- Main section -->
<main>
  
  <!-- New member form -->
  <h2>Ajouter un(e) Argonaute</h2>
  <form class="new-member-form" method="post" action="index.php">
    <label for="name">Nom de l&apos;Argonaute</label>
    <input id="name" name="name" type="text" placeholder="Charalampos" required />
    <button type="submit" name='envoyer'>Envoyer</button>
  </form>
  <div class="message <?php echo $codemsg; ?>"><?php echo $msg; ?></div>
  
  <!-- Member list -->
  <h2>Membres de l'équipage</h2>
  <section class="member-list">
    <?php 
    foreach($liste as $name){
      echo '<div class="member-item">'.$name.'</div>';
    }
    ?>
  </section>
</main>

<footer>
  <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
</footer>

</body>
</html>