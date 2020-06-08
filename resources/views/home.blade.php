<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Студия дизайна Artpractica</title>
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="wow-animation/animate.min.css">
</head>
<body>
    <div class="head-block">
        <div class="head-text">
            <div class="head-brand">Artpractica</div>
            <div class="head-utp wow bounceInLeft">Дизайн / графика</div>            
        </div>

        <div class="head-arrow-block">
            <div class="head-arrow">
                <svg style="fill: white" width="38.417px" height="18.592px">
                    <path d="M19.208,18.592c-0.241,0-0.483-0.087-0.673-0.261L0.327,1.74c-0.408-0.372-0.438-1.004-0.066-1.413c0.372-0.409,1.004-0.439,1.413-0.066L19.208,16.24L36.743,0.261c0.411-0.372,1.042-0.342,1.413,0.066c0.372,0.408,0.343,1.041-0.065,1.413L19.881,18.332C19.691,18.505,19.449,18.592,19.208,18.592z"></path>
                </svg>
            </div>
        </div>
    </div>
<!-- --- -->
<div class="separator-70"></div>
<!-- --- -->
<div class="block-tmp">
    <div class="one-group wow fadeIn">
        <div class="img-container">
            <img src="/images/group_1.jpg" alt="">
        </div>
        <div class="title-container">Квартиры до 50кв.м</div>
    </div>
    <div class="one-group wow fadeIn" data-wow-delay="150ms">
        <div class="img-container">
            <img src="/images/group_2.jpg" alt="">
        </div>
        <div class="title-container">Проекты коттеджей</div>
    </div>
    <div class="one-group wow fadeIn" data-wow-delay="300ms">
        <div class="img-container">
            <img src="/images/group_3.jpg" alt="">
        </div>
        <div class="title-container">Коммерческие интерьеры</div>
    </div>
</div>
<!-- --- -->
<div class="separator-150"></div>
<!-- --- -->
<div class="ceo-block">
    <div class="ceo-text">
        <h2>Людмила</h2>
        <h4>Старший дизайнер</h4>
        <hr class="hr">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium fugiat sequi quas dolore? Dignissimos commodi quae quis beatae cupiditate in quo. Exercitationem aut eos, odio autem iste facilis ab suscipit!</p>
    </div>
    <div class="ceo-portrait"><img src="/images/portrait.png" alt=""></div>
</div>
<!-- --- -->
<div class="separator-150"></div>
<!-- --- -->

<script src="wow-animation/wow.min.js"></script>
<script>
    wow = new WOW(
        {
        boxClass:     'wow',      // default
        animateClass: 'animated', // default
        offset:       0,          // default
        mobile:       false,       // default
        live:         true        // default
    }
    )
    new WOW().init();
</script>

</body>
</html>