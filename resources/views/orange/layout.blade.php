<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link rel="stylesheet" href="{{ mix('/css/orange/orange.css') }}">

</head>
<body>
<div class="container">
    <header class="header">
        <div class="header-box">
            <div class="header-image">
                <img src="https://livedemo00.template-help.com/wordpress_48834/wp-content/uploads/2014/03/slides1.jpg">
            </div>
            <div class="header-text">
                <h1>Lorem ipsum dolor sit amet.</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. A amet dolor error magnam minus
                    molestias
                    odit rem tempore unde vel. Culpa dolores magnam magni odit quia quisquam quos soluta
                    voluptatibus.
                </p>
            </div>
        </div>
    </header>
    <div class="content">


        <div class="trio">
            <div class="trio-box">
                <div class="trio-image">
                    <img
                        src="https://livedemo00.template-help.com/wordpress_48834/wp-content/uploads/2014/03/img-14-370x235.jpg">
                </div>
                <div class="trio-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eos id iste
                        laudantium nostrum quae quaerat reiciendis sequi tempora tempore! Asperiores assumenda illum
                        minima
                        obcaecati praesentium quasi quo recusandae rerum.
                    </p>
                </div>
            </div>
            <div class="trio-box">
                <div class="trio-image">
                    <img
                        src="https://livedemo00.template-help.com/wordpress_48834/wp-content/uploads/2014/03/img-2-370x235.jpg">
                </div>
                <div class="trio-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eos id iste
                        laudantium nostrum quae quaerat reiciendis sequi tempora tempore! Asperiores assumenda illum
                        minima
                        obcaecati praesentium quasi quo recusandae rerum.
                    </p>
                </div>
            </div>
            <div class="trio-box">
                <div class="trio-image">
                    <img
                        src="https://livedemo00.template-help.com/wordpress_48834/wp-content/uploads/2014/03/img-3-370x235.jpg">
                </div>
                <div class="trio-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta eos id iste
                        laudantium nostrum quae quaerat reiciendis sequi tempora tempore! Asperiores assumenda illum
                        minima
                        obcaecati praesentium quasi quo recusandae rerum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="copy">
            &copy VisionWorx {{ Carbon\Carbon::today()->format('Y') }}
        </div>
    </footer>
</div>
</body>
</html>
