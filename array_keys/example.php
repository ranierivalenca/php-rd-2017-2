
<h3>Sem uso do Strict</h3>
<?php 

$arr= array("cor1"=>"Azul","cor2"=>"Vermelho","cor3"=>"Amarelo","cor4"=>"Cinza");
print_r(array_keys($arr));

?>

<h3>Com uso do Strict</h3>

<?php 
$arr =array("cor1"=>"Cinza","cor2"=>"Vermelho","cor3"=>"Amarelo","cor4"=>"Cinza");
print_r(array_keys($arr,"Cinza"));
?>

