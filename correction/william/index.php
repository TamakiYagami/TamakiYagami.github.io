<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./stylecss/main.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <title>STARTPAGE</title>
</head>
<body>

    <nav>
        <span>Home</span>
        <ul>
            <li>Link 1</li>
            <li>Link 2</li>
            <li>Link 3</li>
            <li>Link 4</li>
        </ul>
        <div class="box-icon">
        <box-icon id="menu" name="menu" size="25px"></box-icon>
        </div>
    </nav>
    <ul id="slide">
        <li class="slideli"><a href="">Link1</a></li>
        <li class="slideli"><a href="">Link2</a></li>
        <li class="slideli"><a href="">Link3</a></li>
        <li class="slideli"><a href="">Link4</a></li>
    </ul>
    <script>
        let menu = document.getElementById('menu')
        menu.addEventListener('click', function() {
            let list = document.getElementById('slide')
            let li = document.getElementsByClassName('slideli')

            if (list.style.display.length == 0 || list.style.display == 'none') {
                list.style.display = 'flex';
                // list.style.animation = 'slideBottom 1s 1 linear'
                
                

                let interval = setInterval(function() {
                    for (let index = 0; index < li.length; index++) {
                        li[index].style.opacity = 1  
                        li[index].style.display = 'block'                 
                    }
                    clearInterval(interval)
                },950)
                
            } else {
                list.style.animation = '1s ease 1s 1 reverse slideBottom'
                for (let index = 0; index < li.lenght; index++){
                    li[index].style.opacity = 0
                    li[index].style.display = 'none'
                }
                let interval = setInterval(function() {
                    list.style.display = 'none'
                    list.style.animation = 'slideBottom 1s 1 linear'
                    clearInterval(interval)
                },1000)
                
            }
        })

    </script>

    <section>
        <h1>START PAGE</h1>
        <p>Template by w3.css</p>
        <button>Get Started</button>
    </section>

    <article>
        <h1>Lorem Ipsum</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam voluptatem ipsum quaerat, laborum velit perferendis minima consectetur earum illo, accusamus ipsa officiis molestias reprehenderit maiores neque autem, est natus et!</p>
    </article>

</body>
</html>