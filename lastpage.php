<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="flower.css">
</head>

<body>
    <?php
    if (isset($_POST['response']) && $_POST['response'] === 'yes') {
        // Ajoute "oui" dans le fichier response.txt
        file_put_contents("response.txt", "oui\n", FILE_APPEND);
    }
    ?>
    <div id="thankyou"><b>Pleasure to do the business with u</b></div>
    <div class="flower">
        <div class="f-wrapper">
            <div class="flower__line"></div>
            <div class="f">
                <div class="flower__leaf flower__leaf--1"></div>
                <div class="flower__leaf flower__leaf--2"></div>
                <div class="flower__leaf flower__leaf--3"></div>
                <div class="flower__leaf flower__leaf--4"></div>
                <div class="flower__leaf flower__leaf--5"></div>
                <div class="flower__leaf flower__leaf--6"></div>
                <div class="flower__leaf flower__leaf--7"></div>
                <div class="flower__leaf flower__leaf--8 flower__fall-down--yellow"></div>
            </div>
        </div>

        <div class="f-wrapper f-wrapper--2">
            <div class="flower__line"></div>
            <div class="f">
                <div class="flower__leaf flower__leaf--1"></div>
                <div class="flower__leaf flower__leaf--2"></div>
                <div class="flower__leaf flower__leaf--3"></div>
                <div class="flower__leaf flower__leaf--4"></div>
                <div class="flower__leaf flower__leaf--5"></div>
                <div class="flower__leaf flower__leaf--6"></div>
                <div class="flower__leaf flower__leaf--7"></div>
                <div class="flower__leaf flower__leaf--8 flower__fall-down--pink"></div>
            </div>
        </div>

        <div class="f-wrapper f-wrapper--3">
            <div class="flower__line"></div>
            <div class="f">
                <div class="flower__leaf flower__leaf--1"></div>
                <div class="flower__leaf flower__leaf--2"></div>
                <div class="flower__leaf flower__leaf--3"></div>
                <div class="flower__leaf flower__leaf--4"></div>
                <div class="flower__leaf flower__leaf--5"></div>
                <div class="flower__leaf flower__leaf--6"></div>
                <div class="flower__leaf flower__leaf--7"></div>
                <div class="flower__leaf flower__leaf--8 flower__fall-down--purple"></div>
            </div>
        </div>
        <div class="flower__glass"></div>
    </div>
    <br>
    <audio controls autoplay>
        <source src="congratulations.mp3" type="audio/mpeg">
        Your browser does not support the audio element.
    </audio>
</body>

</html>