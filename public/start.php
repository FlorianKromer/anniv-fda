<?php
include "header.php";
?>
<div class="bgimg-2">
    <?php
    include "message.php";

    ?>
    <div class="caption ">
        <div class="caption-bg">

            <h3>Etape 1</h3><br />
            <h4>Jeu de dame en chine</h4>
            <form action="/etape.php" method="post">
                <label for="etape">
                    <select name="etape" id="etape">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </label>
                <label for="mdp">
                    <input type="text" name="mdp" id="mdp">
                </label>
                <input type="submit" value="Valider">
            </form>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>