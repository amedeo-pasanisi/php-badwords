<?php
$paragrafo = "Qualsiasi storia delle opere di ingegno si riduce a un elenco di fatti miracolosi, se ne ignoriamo il contesto.<br/> La Storia, anche quando c'è di mezzo il talento, deve essere sempre storia sociale,<br/> altrimenti non parla di niente. ";
$censura = $_GET["censura"];
$paragrafoCensurato = str_replace($censura, "***", $paragrafo);
?>

<p><?php echo $paragrafoCensurato, strlen($paragrafo); ?> caratteri</p>
