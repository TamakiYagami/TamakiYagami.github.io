<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./style.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Accueil</title>

    <script>
    $(document).ready(function() {
        // Gestion du menu hamburger
        $("#toggle-menu").click(function() {
            $("#menuContent").slideToggle("fast");
        });
    });
</script>
</head>
<body>
<header>
    <nav id="menuContent">
        <div id="menuButton">
            <box-icon name="menu" color="#fff" size="30px"></box-icon>
        </div>
        <ul>
            <li><a href="#.php"><b>Home</b></a></li>
            <li><a href="#.php"><b>Link 1</b></a></li>
            <li><a href="#.php"><b>Link 2</b></a></li>
            <li><a href="#.php"><b>Link 3</b></a></li>
            <li><a href="#.php"><b>Link 4</a></li>
        </ul>
        <div>
            <box-icon name="x" type="icon" color="#fff" size='30px'></box-icon>
        </div>
    </nav>
</header>

    <!-- Contenu de la page -->
    <div class="content">
        <h1><b>START PAGE</b></h1>
        <p>Template by w3.css.</p>
        <a href="#" class="rectangular-button">Get Started</a>
    </div>
    <div class="text1">
        <p><b>Lorem Ipsum</b></p>
    </div>
    <div class="text2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, iusto deserunt nobis deleniti qui nulla, 
            soluta voluptates tempore, dignissimos quidem rem quisquam. Ducimus expedita, pariatur aliquam 
            placeat dolor officia reprehenderit?</p>
        <img class="photoancre" src="./ancre.png">
    </div>

    <script>
    $(document).ready(function() {
        function toggleMenu() {
            var isHidden = $('nav ul').is(':hidden');
            var menuButton = $('#menuButton box-icon[name="menu"]');
            var closeButton = $('#menuButton box-icon[name="x"]');

        if (isHidden) {
            $('nav').animate({
                bottom: 0,
                backgroundColor: '#000D1A'
            }, 1000, function() {
                $('nav ul').css('display', 'flex');
            });
            $('nav').addClass('MenuNav');
            menuButton.css('display', 'none');
            closeButton.css('display', 'block');
        } else {
            $('nav').animate({
                bottom: '93.5%',
                backgroundColor: '#000'
            }, 1000, function() {
                $('nav').removeClass('MenuNav');
                menuButton.css('display', 'block');
                closeButton.css('display', 'none');
            });
            $('nav ul').hide();
        }
    }

    function checkWindowSize() {
        if (window.innerWidth > 950) {
            $('nav ul').css('display', 'flex');
            $('#menuButton box-icon[name="menu"]').css('display', 'none');
            $('#menuButton box-icon[name="x"]').css('display', 'none');
        } else {
            $('nav ul').css('display', 'none');
            $('#menuButton box-icon[name="menu"]').css('display', 'block');
            $('#menuButton box-icon[name="x"]').css('display', 'none');
        }
    }

    checkWindowSize(); // Vérifiez la largeur de la fenêtre lors du chargement de la page
        $('#menuButton').click(toggleMenu);
        $('box-icon[name="x"]').click(toggleMenu);

        $(window).on('resize', checkWindowSize);
    });
</script>
</body>
</html>


