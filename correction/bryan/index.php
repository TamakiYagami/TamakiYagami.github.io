<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="navbar">
        <a href="#" class="home-link">Home</a>
        <div class="menu-toggle" onclick="toggleMenu()">☰</div>
        <div class="menu-content" id="menuContent">
            <a href="#">Link 1</a>
            <a href="#">Link 2</a>
            <a href="#">Link 3</a>
            <a href="#">Link 4</a>
        </div>
    </div>
    <h1 class="title">START PAGE</h1>
    <p class="subtitle">Un petit texte en dessous du titre</p>
    <button class="button">Bouton</button>
    <div class="footer">
        <h2 class="footer-title">Lorem</h2>
        <p class="footer-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, iusto deserunt nobis deleniti qui nulla, soluta voluptates tempore, dignissimos quidem rem quisquam. Ducimus expedita, pariatur aliquam placeat dolor officia reprehenderit?</p>
        <img src="votre-image.jpg" alt="Image" class="footer-image">
    </div>

    <script>
        function toggleMenu() {
            var menu = document.getElementById("menuContent");
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        }
    </script>
</body>
</html>
