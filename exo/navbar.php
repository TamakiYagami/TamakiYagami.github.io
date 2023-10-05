<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>NavBar</title>
    <link rel="stylesheet" href="../style/navbar.css">
</head>
<body>
    <nav class="soft">
        <span>Soft UI PRO</span>
        <ul>
            <li><a href="">Pages<box-icon name="chevron-down"></box-icon></a></li>
            <li><a href="">Account<box-icon name="chevron-down"></box-icon></a></li>
            <li><a href="">Blocks<box-icon name="chevron-down"></box-icon></a></li>
            <li><a href="">Docs<box-icon name="chevron-down"></box-icon></a></li>
        </ul>
        
        <button class="kinder">BUY NOW</button>
        <box-icon id="menu" name="menu" size="25px"></box-icon>
    </nav>
    <ul id="slide">
        <li class="slideli"><a href="">Pages</a></li>
        <li class="slideli"><a href="">Account</a></li>
        <li class="slideli"><a href="">Blocks</a></li>
        <li class="slideli"><a href="">Docs</a></li>
    </ul>
    <script>
        let menu = document.getElementById('menu')
        let interval
        menu.addEventListener('click', function() {
            let list = document.getElementById('slide')
            let li = document.getElementsByClassName('slideli')

            if (list.style.display.length == 0 || list.style.display == 'none') {
                list.style.display = 'flex';

                /*
                = Je défini quelque chose
                == Je vérifie si quelque chose et égale à quelque chose
                === Je vérifie si quelque chose et égale à quelque chose et que 
                le type (string, integer, float, booléan, NULL) est le même 
                */

                interval = setInterval(function() {

                    for (let index = 0; index < li.length; index++) {
                        li[index].style.opacity = 1  
                        li[index].style.display = 'block'                 
                    }
                    list.style.animationPlayState = 'paused'
                    clearInterval(interval)

                },950)
                
            } else {
                list.style.animation = '2s ease 1 reverse slideBottom'
                list.style.animationPlayState = 'running'            

                for (let index = 0; index < li.length; index++) {
                    li[index].style.opacity = 0
                    li[index].style.display = 'none'                 
                }

                interval = setInterval(function() {

                    list.style.display = 'none'
                    list.style.animation = 'slideBottom 1s 1 linear'
                    
                    clearInterval(interval)

                },1000)
                
            }
        })

    </script>
</body>
</html>