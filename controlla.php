<?php
	session_start();
	$sessione = $_SESSION['sessione'];
	$indovina = $_GET['indovino'];


	

	if($sessione == $indovina){
		echo "
			<img src= http://localhost/cryptoFantasy/good.gif   alt= 'Stregatto Felice' higth = 150 width= 150>
			<p><i> E' questo il numero.....SI SI!</i></p>
			<p>adesso calcolo la chiave di Alice.... eccola! {$_SESSION['alice']}</p>
			
			";
			
	}
	else
	{	echo "
		<img src= http://localhost/cryptoFantasy/bad.gif alt = 'stregatto Triste' higth = 150 width= 150>
                <p><i> Non credo sia questo.....Ho no! Alice e Bianconiglio cambiano i numeri!</i></p>
		";
	}
?>
