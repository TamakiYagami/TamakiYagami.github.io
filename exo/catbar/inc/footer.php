<footer>
    <div>
        <box-icon type='logo' name='facebook-circle' color='#ffffff'></box-icon>
        <box-icon name='twitch' type='logo' color='#ffffff' ></box-icon>
        <box-icon name='twitter' type='logo' color='#ffffff' ></box-icon>
    </div>
    <ul>
        <li><a target='_blank' href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Supprot</a></li>
        <?php if ($_GET['page'] !== "login") : ?>
            <li><a href="login.php"> <?php echo !empty($_SESSION) ? 'Se Déconnecter' : "S'identifier"?></a></li>
        <?php endif; ?>    </ul>
</footer>