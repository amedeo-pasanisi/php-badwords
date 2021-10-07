<?php
$paragrafo = "Qualsiasi storia delle opere di ingegno si riduce a un elenco di fatti miracolosi, se ne ignoriamo il contesto.<br/> La Storia, anche quando c'è di mezzo il talento, deve essere sempre storia sociale,<br/> altrimenti non parla di niente. ";
$censura = $_GET["censura"];
$paragrafoCensurato = str_replace($censura, "***", $paragrafo);
?>

<p style="position: absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center;"><?php echo $paragrafoCensurato, strlen($paragrafo); ?> caratteri</p>