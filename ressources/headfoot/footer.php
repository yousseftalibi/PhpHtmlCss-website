</div>
</div>

</main>
<footer>
    <div class="footerMenu">
        <var>
            <ul>
                <li><a href="../Politiques Confid/Politique_de_confidentialité.php">Politique de confidentialité</a></li>
                <li><a href="../Mentions Légales/MentionLegale.php">Mentions légales</a></li>
                <li><a href="../Contact/contact.php">Nous contacter</a></li>
                <li><a href="#">Options</a></li>
                <?php if( isset($_SESSION['name']) ){  echo '<li><a href="../ressources/database/logout.php">Déconnexion</a></li>'; } ?> 
            </ul>
        </var>
    </div>
    <div class="copyright">
        <p>© Copyright – Krobi</p>
    </div>

</footer>
</body>

</html>