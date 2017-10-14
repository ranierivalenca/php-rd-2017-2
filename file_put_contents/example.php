<?php
$filename="test.html";
$content ="Exemplo de file_get_contets";

echo file_put_contents ($filename, $content);
header('location:test.html');


?>