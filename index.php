<?php

session_start();

if (!isset($_SESSION["USER_ID"])) {
    echo '<meta http-equiv="Refresh" content="0; url=../login.php">';
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Piqu3 Tejineando</title>

    <style>
        @font-face {
            font-family: 'WonderBoys';
            src: url('assets/fonts/WonderBoys.ttf') format('truetype');
        }

        @font-face {
            font-family: 'LemonYellow';
            src: url('assets/fonts/DKLemonYellowSun.ttf') format('truetype');
        }
    </style>

    <style>
        html, body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .f1 {
            font-family: WonderBoys;
            font-size: 1px;
        }

        .f2 {
            font-family: LemonYellow;
            font-size: 1px;
        }
    </style>
    <script>
        window.onload = function() {
            var els = document.querySelectorAll(".expire");
            if(els){
                els.forEach(function(el){
                    document.body.removeChild(el);
                });
            }
        };
    </script>
    <script>
        var TEJINA_USER_TOKEN = "<?php echo($_SESSION["API_TOKEN"]) ?>";
    </script>
</head>
<body>
    <div class="f1 expire">.</div>
    <div class="f2 expire">.</div>
<script type="text/javascript" src="app.js?95939b829c9d97057036"></script></body>
</html>