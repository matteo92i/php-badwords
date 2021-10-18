<?php $articoloEsports = "Fnatic,organizzazione eSport britannica, ha annunciato l’acquisto del pro-player Owen smooya Butterfield. Il roster di Counter-Strike: Global Offensive (CS:GO) del team inglese, ha ingaggiato per un periodo di prova dalla durata di 3 mesi il gamer inglese classe ’99.
Smooya era sotto contratto con il team spagnolo, Movistar Riders, fino a questa mattina, infatti i Fnatic sono riusciti a reclutarlo senza pagare il buyout. Il team Black Orange di CS: GO sempre più inglese. Il player, Owen smooya Butterfield attrverso un long tweet, ha dichiarato: “Per prima cosa devo ringraziare RachelXGin, Resettlol e Movistar_Riders perché senza di loro questo non sarebbe mai possibile. Hanno reso l'intero processo semplice e facile. Ho aspettato un'occasione come questa per anni e penso che ora sia il momento perfetto perché ciò accada. Un enorme grazie a tutti coloro che hanno supportato / spinto per farmi firmare di nuovo da una squadra, senza di te sarei ancora maltrattato in alcuni carlini FPLCircuit in streaming ahah.";

$parolaCensurata= $_GET["parolaCensurata"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FNATIC</h1>
    <p>
        <?php echo $articoloEsports; ?>
    </p>
    <p>quante parole?: <?php echo strlen($articoloEsports); ?></p>
    
    <h1>FNATIC CENSURA: <?php echo $parolaCensurata;?></h1>
    <p>
        <?php echo str_replace($parolaCensurata, "*****", $articoloEsports);?>
    </p>
    <p>quante parole?: <?php echo strlen($articoloEsports); ?></p>
</body>
</html>