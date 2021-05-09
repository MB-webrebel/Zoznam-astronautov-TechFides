<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Astronauts | TechFides</title>
    <meta name="author" content="Ján Mach">
    <meta name="description" content="Astronats of TechFides solutions">
    <meta name="theme-color" content="#8B0000"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/icon/rocket-1976107_640.png">

    <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <style type="text/css">
        * {
            outline: none;
        }

        body {
            background: linear-gradient(to right, #111, #222, #222, #111);
        }

        .as-head {
            position: relative;
            width: 100%;
            height: 60vh;
            background: url("img/header.jpg") center center no-repeat;
            background-size: cover;
            color: white;
            border-bottom: 1px solid darkred;
        }

        .as-head h1 {
            position: absolute;
            margin: 0;
            bottom: 10px;
            left: 0;
            padding-top: 42vh;
            padding-left: 5vw;
            font-family: 'Covered By Your Grace', cursive;
            font-size: 15vh;
            text-shadow: #111 .2vh .2vh 0;
        }

        .as-table {
            margin: 15px;
            padding: 15px 30px;
            text-align: left;
            border-radius: 25px;
            color: #ddd;
            background: rgba(255, 255, 255, .175);
        }

        .as-table:hover {
            background: rgba(255, 255, 255, .25);
        }

        .as-table,
        .as-table .row {
            transition: background .7s ease;
        }

        .as-table .row {
            border: 1px solid black;
            border-top: 0;
        }

        .as-table .row:first-child {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            border: 1px solid black;
        }

        .as-table .row:last-child {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .as-table #headRow {
            cursor: auto;
            background: rgba(85, 0, 0, 0.25);
        }

        .as-table #headRow:hover {
            background: rgba(85, 0, 0, 0.5);
        }

        .as-table .row {
            cursor: pointer;
            background: none;
        }

        .as-table .row:hover {
            background: rgba(85, 40, 0, 0.25);
        }

        .as-table .row > div {
            padding: 3px 8px;
        }

        .as-text {
            padding: 10px 35px;
            color: #ddd;
        }

        .as-text h4 {
            font-size: 3vh;
        }

        .as-table,
        .as-text p {
            font-size: 1.75vh;
        }

        #bttn-newAstro,
        #bttn-dwnldZiped {
            position: relative;
            display: inline-block;
            margin: 15px 15px 5px 0;
            border: 1px solid #aaa;
            border-radius: 5px;
            padding: 4px 18px;
            color: #ddd;
            background: rgba(255, 255, 255, .175);
            font-size: 2vh;
            transition: all .7s ease;
        }

        #bttn-newAstro:hover,
        #bttn-dwnldZiped:hover {
            color: white;
            text-decoration: none;
            border-color: darkred;
            cursor: pointer;
            background: rgba(85, 0, 0, 0.5);
        }

        #bttn-dwnldZiped:hover {
            border-color: darkblue;
            background: rgba(0, 0, 85, 0.5);
        }

        /*
			#bttn-newAstro:after {
				position: absolute;
				z-index: -1;
				content: "";
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
				border-radius: 5px;
				background: url("img/head.png") center 30% no-repeat;
				background-size: 30%;
				opacity: 0;
				transition: all .7s ease;
			}

			#bttn-newAstro:hover:after {
				opacity: .4;
			}
		*/

        #form,
        #formRemove {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            padding: 25px;
            z-index: 999;
            background: rgba(0, 0, 0, .75);
        }

        #form #formMain,
        #formRemove #formRemoveMain {
            background: url("img/head.png") 150% center no-repeat, white;
            background-size: 50%;
            border-radius: 10px;
            padding: 20px;

            position: absolute;
            top: 50%;
            width: 100%;
            transform: translateY(-75%);
        }

        #formMain h1,
        #formRemoveMain h1 {
            margin: 0 0 10px 0;
        }

        #formMain h4 {
            margin: 15px 0 5px 0;
        }

        #formRemoveMain strong {
            display: block;
            margin: 8px 0 10px;
        }

        input[type="text"] {
            display: block;
            margin: 20px 0;
            padding: 0 5px;
        }

        input[type="text"],
        input[type="date"] {
            border: none;
            border-bottom: 1px solid black;
            transition: border-color 1s ease;
        }

        input[type="text"]:hover,
        input[type="date"]:hover,
        input[type="text"]:focus,
        input[type="date"]:focus {
            border-bottom: 1px solid darkred;
        }

        input[type="radio"] {
            margin: 5px 0;
        }

        input[type="submit"] {
            margin: 10px 0 0;
            border: 1px solid black;
            padding: 5px 10px;
            border-radius: 5px;
            background: none;
            transition: all .5s ease;
        }

        input[type="submit"]:hover {
            border-color: red;
            background: darkred;
            color: white;
        }

        #theXbttn {
            position: absolute;
            top: 12px;
            right: 16px;
            cursor: pointer;
        }

        #remAstroYes {
            cursor: pointer;
            border: 1px solid red;
            color: red;
            border-radius: 5px;
            padding: 5px 15px;
            margin-right: 15px;
            transition: all .5s ease;
        }

        #remAstroYes:hover {
            background: darkred;
            color: white;
        }

        footer {
            padding: 10px 0;
            background: #0b0b0b;
            color: #ddd;
            text-align: center;
        }

        @media only screen and (max-width: 767px) {
            .as-text {
                padding: 10px 5px;
            }

            .as-head h1 {
                font-size: 15vw;
            }

            .as-text h4 {
                font-size: 25px;
            }

            .as-table,
            .as-text p {
                font-size: 15px;
            }

            #bttn-newAstro,
            #bttn-dwnldZiped {
                font-size: 18px;
            }

            .as-table {
                border-radius: 0;
                margin: 15px -15px;
                padding: 0 15px;
            }

            .as-table .row {
                border-radius: 0 !important;
            }
        }
    </style>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#form').hide();
            $('#formRemove').hide();
        });

        function fadeFormIn() {
            $('#form').fadeIn().css('top', $(window).scrollTop());
            disableScroll();
        }

        function fadeFormOut(me) {
            $(me).fadeOut();
            enableScroll();
        }

        function removeAstro(me) {
            $('#formRemove').fadeIn().css('top', $(window).scrollTop());
            disableScroll();
            $('#remAstroName').text($($(me).children()[0]).text());
            $('#remAstroSur').text($($(me).children()[1]).text());

            $('#remAstroYes').on('click', function () {
                window.location.href = "edit/?" + $(me).attr('id');
            });
        }

        function downloadZiped() {
            window.location.href = "zip.php";
        }



        var keys = {37: 1, 38: 1, 39: 1, 40: 1};

        function preventDefault(e) {
            e = e || window.event;
            if (e.preventDefault)
                e.preventDefault();
            e.returnValue = false;
        }

        function preventDefaultForScrollKeys(e) {
            if (keys[e.keyCode]) {
                preventDefault(e);
                return false;
            }
        }

        function disableScroll() {
            if (window.addEventListener) // older FF
                window.addEventListener('DOMMouseScroll', preventDefault, false);
            window.onwheel = preventDefault; // modern standard
            window.onmousewheel = document.onmousewheel = preventDefault; // older browsers, IE
            window.ontouchmove = preventDefault; // mobile
            document.onkeydown = preventDefaultForScrollKeys;
        }

        function enableScroll() {
            if (window.removeEventListener)
                window.removeEventListener('DOMMouseScroll', preventDefault, false);
            window.onmousewheel = document.onmousewheel = null;
            window.onwheel = null;
            window.ontouchmove = null;
            document.onkeydown = null;
        }
    </script>
</head>

<body>
<header class="as-head">
    <h1>Astronauts</h1>
</header>

<div style="padding: 0 15px">
    <div class="row">
        <div class="hidden-xs hidden-sm col-md-1 col-lg-3"></div>
        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-6">
            <div class="as-text">
                <h4>Lorem ipsum</h4>
                <p>
                    V širšom zmysle sa termínom kozmonaut alebo astronaut označuje každý človek, ktorý sa dostal do kozmického priestoru, t. j. do vrchných vrstiev atmosféry Zeme alebo nad ňu. V užšom zmysle sa tento termín používa len pre profesionálneho kozmonauta, napríklad pilota kozmickej lode. Rôzne klasifikácie termínu kozmonaut majú aj jednotlivé štáty či organizácie. United States Air Force považuje za astronauta každého, kto sa dostal nad výškovú hranicu 80,5 km (50 míľ), Medzinárodná letecká federácia zas toho, kto prekročil tzv. Kármánovu hranicu (100 km). Rusko klasifikuje ako kozmonauta iba človeka, ktorý uskutočnil orbitálny let, teda dosiahol minimálne prvú kozmickú rýchlosť a zároveň uskutočnil aspoň jeden oblet okolo Zeme. Túto definíciu uznáva aj medzinárodná Komisia pre výskum vesmíru (COSPAR), vo vedeckých kruhoch je preto považovaná za najkorektnejšiu.

Prvým človekom vo vesmíre bol Rus Jurij Alexejevič Gagarin, ktorý 12. apríla 1961 na lodi Vostok 1 jedenkrát obletel Zem. Odvtedy do 10. januára 2019 sa do vesmíru pozrelo pri 313[3] orbitálnych misiách celkovo 557 ľudí z 38 štátov.[4] Z nich 12 chodilo po povrchu Mesiaca v rámci programu Apollo. Prvý Američan, ktorý vykonal orbitálny let okolo Zeme, bol John Herschel Glenn (20. februára 1962). Už pred ním však do vesmíru letel po balistickej dráhe Alan Bartlett Shepard na vesmírnej lodi Freedom 7. Prvou ženou vo vesmíre sa stala Valentina Vladimirovna Tereškovová. Do 10. januára 2019 bolo na orbite celkovo 62 žien.[5] Prvým kozmonautom z iného štátu než ZSSR a USA sa stal 2. marca 1978 Vladimír Remek z bývalého Česko-Slovenska. Tretím štátom po Rusku/ZSSR a USA schopným vyslať človeka do vesmíru vlastnými silami sa stala Čína, ktorá 15. októbra 2003 vypustila na orbitu taikonauta Jang Li-weja.

Súčasným najväčším pilotovaným vesmírnym programom je Medzinárodná vesmírna stanica.

Doteraz v priebehu pilotovaných kozmických letov zahynulo 18 osôb, z toho 13 Američanov, 4 Rusi a 1 Izraelčan. Niekoľko kozmonautov ďalej zahynulo v priebehu výcviku a predštartovných príprav.
                </p>
                <p>
                    Cras semper dapibus ligula, a consectetur tortor pharetra luctus. Aenean purus ante, accumsan vitae
                    placerat eu, ornare ut lectus. Duis et condimentum massa. Proin semper varius nisl, eget tristique
                    tellus interdum at. Duis non fringilla turpis. Ut volutpat metus ac nulla venenatis, quis convallis
                    leo
                    feugiat. Duis euismod bibendum tortor, non interdum felis.
                </p>
                <a id="bttn-newAstro" onclick="fadeFormIn()">Add new astronaut</a>
                <a id="bttn-dwnldZiped" onclick="downloadZiped()">Download in .zip</a>
            </div>
            <div class="as-table">
                <div class="row" id="headRow">
                    <div class="col-xs-6 col-sm-3">Name</div>
                    <div class="col-xs-6 col-sm-3">Surname</div>
                    <div class="col-xs-6 col-sm-3">Born</div>
                    <div class="col-xs-6 col-sm-3">Superpower</div>
                </div>

				<?php
				$data = json_decode( file_get_contents( 'data.json' ), true );

				foreach ( $data as $key => $person ) {
					echo '
	            <div class="row" id="' . $key . '" onclick="removeAstro(this)">
                    <div class="col-xs-6 col-sm-3 tableField">' . $person['name'] . '</div>
                    <div class="col-xs-6 col-sm-3 tableField">' . $person['surname'] . '</div>
                    <div class="col-xs-6 col-sm-3 tableField">' . $person['born'] . '</div>
                    <div class="col-xs-6 col-sm-3 tableField">' . $person['superpower'] . '</div>
                </div>
';
				}

				?>
            </div>
        </div>
    </div>
</div>

<div id="form">
    <div class="row" style="height: 100%;">
        <div class="hidden-xs col-sm-2 col-md-3 col-lg-4"></div>
        <div class="col-xs-11 col-sm-8 col-md-6 col-lg-4" style="height: 100%">
            <div id="formMain">
                <h1>New astronout</h1>
                <span id="theXbttn" onclick="fadeFormOut('#form')">X</span>
                <form method="post" action="add.php">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="text" placeholder="Surname" name="surname" required>
                    <label for="date">Born:</label>
                    <input style="margin-top: 0;" type="date" id="date" name="born" required>
                    <h4>Superpowers:</h4>
                    <input style="margin-top: 0;" id="one" type="radio" name="superpower" value="None" checked>
                    <label for="one">None</label><br>
                    <input id="two" type="radio" name="superpower" value="Cool power">
                    <label for="two">Cool power</label><br>
                    <input id="tre" type="radio" name="superpower" value="Poor power">
                    <label for="tre">Poor power</label><br>
                    <input type="submit" id="sub" title="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<div id="formRemove">
    <div class="row" style="height: 100%;">
        <div class="hidden-xs col-sm-2 col-md-3 col-lg-4"></div>
        <div class="col-xs-11 col-sm-8 col-md-6 col-lg-4" style="height: 100%">
            <div id="formRemoveMain">
                <h1>Remove astronout</h1>
                <span id="theXbttn" onclick="fadeFormOut('#formRemove')">X</span>
                <span>Are you sure, that you want to remove astronaut:</span>
                <strong>
                    <span id="remAstroName"></span>
                    <span id="remAstroSur"></span>
                </strong>
                <span id="remAstroYes">Yes, remove him</span>
                <span style="cursor: pointer" onclick="fadeFormOut('#formRemove')">No, I changed my mind</span>
            </div>
        </div>
    </div>
</div>

<footer>
    2021 &copy; Miroslav Baláž
</footer>
</body>
</html>