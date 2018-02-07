<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>madlibs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <banner>
        <h1>MAD LIBS</h1>
    </banner>
    <header>
        <li>Er heerst paniek...</li><li>Orkunde</li>
    </header>
    <main>

        <h2>Er heerst paniek...</h2>
        <p>Er heerst paniek in het koninkrijk <?php echo $_POST['vraag3'];?>. Koning <?php echo $_POST['vraag6'];?> is ten einde raad en als koning <?php echo $_POST['vraag6'];?> ten einde raad is, dan roept hij zijn ten-einderaadsheer <?php echo $_POST['vraag2'];?>.</p>
        <p>"<?php echo $_POST['vraag2'];?>! Het is een ramp! Het is een schande!"</p>
        <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
        <p>"Mijn <?php echo $_POST['vraag1'];?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST['vraag5'];?> voor hem gekocht!"</p>
        <p>"Majesteit, uw <?php echo $_POST['vraag1'];?> komt vast vanzelf weer terug?"</p>
        <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_POST['vraag8'];?> leren?"</p>
        <p>"Maar Sire, daar kunt u toch uw <?php echo $_POST['vraag7'];?> voor gebruiken."</p>
        <p>"<?php echo $_POST['vraag2'];?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
        <p>"<?php echo $_POST['vraag4'];?>, Sire."<?php echo $_POST['fname'];?> </p>
    </main>

    <footer>De website is gemaakt door <?php echo $_POST['vraag2'];?>.</footer>


</body>
</html>