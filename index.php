    <?php
        $testo = "Sogno la pace nel mondo" . "</br>".
        "ma a casa sono brava a far la guerra" . "</br>". 
        "la storia è sempre quella". "</br>".
        "noi siamo tutti uguali ma il colore della pelle conta". "</br>".
        "Se parte la rivolta". "</br>".
        "combatto con lo scudo dello schermo". "</br>".
        "le armi da tastiera". "</br>".
       "di giorno sto in trincea, lancio opinioni fino a sera" . "</br>".
        "Non me ne frega niente se mentre". "</br>".
        "rimango indifferente il mondo crolla e non mi prende". "</br>".
        "Non me ne frega niente se mentre". "</br>".
        "la gente grida aiuto io prego non capiti a me.". "</br>".
        "Non me ne frega niente di niente.". "</br>".
        "Scorrono immagini porno". "</br>".
        "mi scandalizzo e inizia la bufera". "</br>".
        "codardo chi non c’era a scrivere sul diario da che parte sta la verità". "</br>".
        "JE SUIS PARIS MADAME". "</br>".
        "ma in piazza scendo solo per il cane". "</br>".
        "non mi vogliate male". "</br>".
        "ho sempre poco tempo per lottare senza il modem". "</br>".
        "Non me ne frega niente se mentre". "</br>".
        "rimango indifferente il mondo crolla e non mi prende". "</br>".
        "Non me ne frega niente se mentre". "</br>".
        "la gente grida aiuto io prego non capiti a me.". "</br>".
        "Non me ne frega niente di niente.". "</br>".
        "Se il  mondo crolla non mi prende". "</br>".
        "Non me ne frega niente se mentre". "</br>".
        "rimango indifferente il mondo crolla e non mi prende". "</br>".
        "Non me ne frega niente se mentre". "</br>".
        "la gente grida aiuto io prego non capiti a me.". "</br>".
        "Non me ne frega niente di niente.";
        $lunghezza = strlen($testo);
    ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jomhuria&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>BadWords</title>
</head>
<style>
*{
    box-sizing:border-box;
    padding:0;
    margin:0;
}
.container{
    display:flex;
}
h2{
    font-family: 'Jomhuria', cursive;
    letter-spacing:2px;
    font-size:35px;
}
h3{
    padding-top:10px;
    font-size:14px;
}
.song{
    font-family: 'Roboto Condensed', sans-serif;
    padding:10px 30px;
}
span{
    font-style:italic;
}
}

</style>
<body>
    <div class="container">
        <div class="song">
            <h2>Testo Originale</h2>
            <p> 
                <?php echo $testo?>
                <h3>Lunghezza del testo: <span><?php echo $lunghezza?></span></h3>
            </p>    
        </div>
        <div class="song">
            <h2>Testo Censurato</h2>
            <p>
                <?php echo $testo_modificato = str_replace( $_GET["censured"], "***", $testo) ;
                ?>
                <h3>Lunghezza del testo dopo la censura: <span><?php echo $lunghezza_modificata = strlen($testo_modificato); ?></span></h3>
            </p>
        </div>
    </div>    
</body>
</html>