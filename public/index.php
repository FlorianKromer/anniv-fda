<?php
include "header.php";

$_SESSION['success_message'] = null;
$_SESSION['danger_message'] = null;
?>

<body>
  <div class="bgimg-1">
    <div class="caption">
      <span class="border">Bienvenue</span><br />
      <span class="border">A la recherche de qui à casser INTER ?</span><br />
      <a class="border" href="/start.php">Commencer</a>
    </div>
  </div>

  <?php
  include "footer.php";
  ?>