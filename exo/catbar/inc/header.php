<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

<nav>
    <span><a href="./index.php"><box-icon type='solid' name='cat' animation='tada-hover' color="#fff" size="45px"></box-icon></a> Chat Peau De paille</span>
    <ul>
        <li><a href="support.php">Support</a></li>
        <?php if ($_GET['page'] !== "login") : ?>
            <li><a href="login.php"> <?php echo !empty($_SESSION) ? 'Se Déconnecter' : "S'identifier"?></a></li>
        <?php endif; ?>
        <?php if (!empty($_SESSION)) : ?>
            <?php if ($_SESSION['role'] >= 3) : ?>
                <li><a href="paneladmin.php">Panneau Admin</a></li>
            <?php else :?>
                <li><a href="profil.php">Profile</a></li>
            <?php endif; ?>
        <?php endif; ?>
    </ul>
</nav>

<!-- 
    
if (pas vide) {
    if (toi plus grand que ou égal à 3) {
        admin
    } else {
        profile
    }
} 

-->