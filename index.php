<?php
/**
 * Copyright (c) 2019. Lorenz Pfeifer
 */

$arrStandard = array(
    'Azteken',
    'Briten',
    'Byzantiner',
    'Chinesen',
    'Franken',
    'Goten',
    'Hunnen',
    'Japaner',
    'Kelten',
    'Koreaner',
    'Maya',
    'Mongolen',
    'Perser',
    'Sarazenen',
    'Spanier',
    'Teutonen',
    'Türken',
    'Wikinger'
);

$arrForgotten = array(
    'Italiener',
    'Inder',
    'Slawen',
    'Ungarn',
    'Inka'
);
$arrAfrican   = array(
    'Berber',
    'Malier',
    'Äthopier',
    'Portugiesen'
);
$arrRajas     = array(
    'Birmanen',
    'Khmer',
    'Malaien',
    'Vietnamesen'
);

$arrDE = array(
    'Azteken',
    'Briten',
    'Byzantiner',
    'Chinesen',
    'Franken',
    'Goten',
    'Hunnen',
    'Japaner',
    'Kelten',
    'Koreaner',
    'Maya',
    'Mongolen',
    'Perser',
    'Sarazenen',
    'Spanier',
    'Teutonen',
    'Türken',
    'Wikinger',
    'Italiener',
    'Inder',
    'Slawen',
    'Ungarn',
    'Inka',
    'Berber',
    'Malier',
    'Äthopier',
    'Portugiesen',
    'Birmanen',
    'Khmer',
    'Malaien',
    'Vietnamesen',
    'Kumanen',
    'Tartaren',
    'Litauer',
    'Bulgaren'
);

?>
<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Age of Empires 2 Randomizer</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <style>
        *{font-family: 'Roboto', sans-serif;}
        div{margin: 15px 0;}
    </style>
</head>
<body>
	<h1>AOE:2 Definitive Editon</h1>
	<form id="de" action="" method="get">
		<input type="hidden" name="def" value="1">
		<div><input type="submit" value="Fraktion losen"/></div>
	</form>
	<?php
    if(isset($_GET['def']))
    {
        echo 'Gelost: <strong>'.$arrDE[rand(0, sizeof($arrDE)-1)].'</strong>';
	}
	?>
	<h1>AOE:2 HD</h1>
	<p>Wähle deine Erweiterungen:</p>
    <form id="hd" action="" method="get">
        <div><label for="forgotten">The Forgotten</label><input type="checkbox" id="forgotten" name="forgotten"<?php echo (isset($_GET['forgotten'])) ?' checked':''; ?>></div>
        <div><label for="africans">The African Kingdoms</label><input type="checkbox" id="africans" name="africans"<?php echo (isset($_GET['africans'])) ?' checked':''; ?>></div>
        <div><label for="rajas">Rise of the Rajas</label><input type="checkbox" id="rajas" name="rajas"<?php echo (isset($_GET['rajas'])) ?' checked':''; ?>></div>
        <input type="hidden" name="submitted" value="1">
        <div><input type="submit" value="Fraktion losen"/></div>
    </form>
    <?php

    if(isset($_GET['submitted']))
    {
        $arrFraktionen = $arrStandard;

        if(isset($_GET['forgotten']))
        {
            $arrFraktionen = array_merge($arrFraktionen, $arrForgotten);
        }
        if(isset($_GET['africans']))
        {
            $arrFraktionen = array_merge($arrFraktionen, $arrAfrican);
        }
        if(isset($_GET['rajas']))
        {
            $arrFraktionen = array_merge($arrFraktionen, $arrRajas);
        }
        //Fraktion losen
        echo 'Gelost: <strong>'.$arrFraktionen[rand(0, sizeof($arrFraktionen)-1)].'</strong>';
    }


    ?>
</body>
</html>
