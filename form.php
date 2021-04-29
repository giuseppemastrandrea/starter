<?php
	require __DIR__ . '/vendor/autoload.php';

	use Twig\Environment;
	use Twig\Loader\FilesystemLoader;

	
	// Diciamo a Twig dove si trovano i nostri template
	$loader = new FilesystemLoader(__DIR__ . "/templates");

	// Creiamo un renderer utilizzando il loader (che è legato alla directory dei nostri template TWIG)
	$renderer = new Environment($loader);

	
	// Utilizzando echo restituiamo al client il template renderizzato
	// render accetta 2 parametri: 
	// 1 - il nome del file del template da renderizzare
	// 2 - il contesto da passare al template (l'insieme delle variabili che saranno utilizzabili nel template)
	$result =  $renderer->render(
		"form.html.twig",
		[
			"titolo" => "Il titolo della pagina",
			"page_title" => "LISTA UTENTI",
			"menu" => [
      	[ "href" => "https://google.it", "text" => "Vai su Google" ],
      	[ "href" => "index.php", "text" => "Home" ],
      	[ "href" => "lista-utenti.php", "text" => "Utenti" ]
			]
		]
	);

	echo $result;

?>