<?php
$title = "Contactez-nous";
$css = "<link rel=\"stylesheet\" href=\"../ressources/css/style_contact.css\">";
require 'headfoot/header.php' ?>
<form action="../Contact/mail.php" method="POST">
    <input type="text" name="surname" placeholder="Nom" class="form-control" required>
    <br>
    <input type="text" name="firstname" placeholder="Prénom" class="form-control" required>
    <br>
    <input type="text" name="sujet" placeholder="Sujet" class="form-control" required>
    <br>
    <input type="email" name="email" placeholder="Email" class="form-control" required>
    <br>
    <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" class="form-control" required></textarea>
    <br>
    <button type="submit">Envoyer</button>
</form>
<?php require 'headfoot/footer.php' ?>