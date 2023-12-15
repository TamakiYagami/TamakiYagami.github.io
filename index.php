<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <!-- <link rel="stylesheet" href="./cours/backup_style_nav/style/main.css">  /////  pour les modifs css -->
        <title>Menu de navigation</title>
    </head>

    <!-- minifier -->
    <style>
        *{padding:0;margin:0}body{transition:background-color .5s}.dark-mode{background-color:#333}header{background:#020024;background:linear-gradient(90deg,#020024 0,#090979 80%,#00d4ff 100%);border-bottom:2px solid silver}header .header_top{display:flex;justify-content:center;width:100%}header .header_top h1{font-size:4em;color:#fff}header .header_top .header_switch{display:flex;justify-content:flex-end}header .header_top .header_switch div{display:flex;justify-content:space-between;align-items:center;border:2px solid #000;width:12%;height:30px;border-radius:25px;margin-right:50px;background-color:gray}header .header_top .header_switch div button:hover,header .header_top .header_switch div:hover{cursor:pointer}header .header_top .header_switch div button{border:none;background-color:gray;border-radius:50%;height:30px;width:30px}header .header_top .dark-mode-switch{position:fixed;top:20px;right:20px;display:flex;align-items:center;color:#fff}header .header_top .dark-mode-switch .switch{position:relative;display:inline-block;width:60px;height:34px}header .header_top .dark-mode-switch .switch input{opacity:0;width:0;height:0}header .header_top .dark-mode-switch .slider{position:absolute;cursor:pointer;top:0;left:0;right:0;bottom:0;background-color:#ccc;transition:.4s}header .header_top .dark-mode-switch .slider:before{position:absolute;content:"";height:26px;width:26px;left:4px;bottom:4px;background-color:#fff;transition:.4s}header .header_top .dark-mode-switch input:checked+.slider{background-color:#2196f3}header .header_top .dark-mode-switch input:focus+.slider{box-shadow:0 0 1px #2196f3}header .header_top .dark-mode-switch input:checked+.slider:before{transform:translateX(26px)}header .header_top .dark-mode-switch .slider.round{border-radius:34px}header .header_top .dark-mode-switch .slider.round:before{border-radius:50%}header .header_top .dark-mode-switch p{font-size:2em}header .header_bottom{display:flex;justify-content:space-around;margin:20px auto;width:40%}header .header_bottom button{border:none;background-color:transparent;font-size:1.5em;color:silver}header .header_bottom button:hover{cursor:pointer;color:grey}.wrapper ul h3 a,.wrapper ul li a,.wrapper ul:first-child a{color:#000;text-decoration:none}.wrapper{width:85%;margin:30px auto 0;display:flex;justify-content:space-around;flex-wrap:wrap}.wrapper ul{position:relative;display:flex;flex-direction:column;align-items:flex-start;width:28%;padding:20px 0;margin:40px auto;border-radius:15px;list-style:none;background-color:#cecece;box-shadow:3px 3px 10px 0 gray}.wrapper ul:first-child{margin:10px 100%;background-color:transparent;box-shadow:none}.wrapper ul:first-child a{font-size:5em}.wrapper ul h3{margin:0 auto 10px;font-size:2em;text-transform:capitalize;display:flex;justify-content:space-between}.wrapper ul h3 a:hover,.wrapper ul li a:hover{color:grey}.wrapper ul li{margin-left:10px;width:100%;display:flex;justify-content:space-between;align-items:center}.wrapper ul li a{font-size:1.8em}.wrapper ul li p{font-size:1.6em;margin-right:20px}
    </style>

    <body>
        <header>
                <div class="header_top">
                    <h1>Menu de navigation</h1>
                    <div class="dark-mode-switch">
                        <label class="switch">
                            <input type="checkbox" id="darkModeToggle">
                            <span class="slider round"></span>
                        </label>
                        <p>🌘</p>
                    </div>
                </div>

            <nav class="header_bottom">
                <button>Correction</button>
                <button>Cours</button>
                <button>Exercices</button>
            </nav>
        </header>

        <main class="wrapper">
            <?php
                $dir = './';
                $dossiers = scandir($dir);
                
                foreach ($dossiers as $lien) {
                    if ($lien!= '.' && $lien!= '..' && $lien!= 'index.php' && $lien!= '.git' && is_dir($lien)) {
                        echo "<ul>";                       
                        echo "<h3>" . $lien ."</h3>";

                        $sousDossiers = scandir($lien);
                        foreach ($sousDossiers as $cat) {
                            if ($cat != '.' && $cat != '..') {
                                echo "<li>";
                                echo "<a href='" . $lien . '/' . $cat . "'>" . $cat . "</a>";
                                echo "<p>➡️</p>";
                                echo "</li>";
                            }
                        }

                        echo "</ul>";
                    } elseif ($lien == '..') {
                        echo "<ul><a href=" . $lien . ">⛔</a></ul>";
                    }
                }
            ?>
        </main>

        

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const darkModeToggle = document.getElementById('darkModeToggle');

                darkModeToggle.addEventListener('change', function () {
                    document.body.classList.toggle('dark-mode', darkModeToggle.checked);
                });
            });
        </script>
    </body>
</html>