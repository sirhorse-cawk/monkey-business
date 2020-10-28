<?php

$apen[] = "Baviaan";
$apen[] = "Guereza";
$apen[] = "Langoer";
$apen[] = "Tamarin";
$apen[] = "Neusaap";
$apen[] = "Halfaap";
$apen[] = "Mandril";
$apen[] = "Oeakari";
$apen[] = "Faunaap";
$apen[] = "Hoelman";
$apen[] = "Meerkat";
$apen[] = "Oormaki";
$apen[] = "Gorilla";
$apen[] = "Kuifaap";
$apen[] = "Mensaap";
$apen[] = "Spinaap";

?>

<html>



<head>
    <link rel="stylesheet" href="stylesheet.css">
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Monkey Business</title>
</head>



<body>

<img src="img/monkey-business.jpg" alt="monkey-business">

<h2> Select your monkey! </h2>

<img src="img/monkey_swings.png" alt="monkey_swings">

<?php foreach($apen as $aap) { ?>
    <p <?php echo $aap; ?> </p>
<?php } ?>

</body>



</html>
