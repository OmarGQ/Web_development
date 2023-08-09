<?php
	$doc = new DOMDocument();
	$doc->load('../xml/kardex.xml');
	$raiz = $doc->getElementsByTagname('alumnos');
	foreach ($raiz as $rama) {
		while ($rama->hasChildNodes()) {
			$rama->removeChild($rama->childNodes->item(0));
		}
	}
	$doc->save('../xml/kardex.xml');
	require_once("../index.html");
?>