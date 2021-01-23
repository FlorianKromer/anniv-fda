<?php

if (isset($_SESSION["success_message"])) {

    echo "<div class='alert success-alert'>
  <h3>" . $_SESSION["success_message"] . "</h3>
</div>";
}
if (isset($_SESSION["danger_message"])) {

    echo "<div class='alert danger-alert'>
  <h3>" . $_SESSION["danger_message"] . "</h3>
</div>";
}
