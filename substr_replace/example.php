<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

   <p>Exemplos: 1 usando array </p>  
 
   <P>
      $replace = array("1: AAA","2: AAA","3: AAA");

      echo implode("<br>",substr_replace($replace,'BBB',3,3));
      // note o que vai ser impresso, de em vez imprimir AAA, vai ser impresso BBB, isso usando array;

   </P>
   <?php  
       $replace = array("1: AAA","2: AAA","3: AAA");

       echo implode("<br>",substr_replace($replace,'BBB',3,3));
     // note o que vai ser impresso, de em vez imprimir AAA, vai ser impresso BBB, isso usando array;
    ?>
     
   <p>Exemplos: 2 usando numero negativo</p>  
   
    <p> echo substr_replace("oi mundo","terra",-5); </p>

    <p>note que usando numero negativo a contagem fica do final para o comerço, e o que vai ser impresso na tela sera <b>oi terra</b>, de vez de ser <b>oi mundo</b> pós o nome mundo sera substituido pelo terra</p>
   <?php
     echo substr_replace("oi mundo","terra",-5);
   ?>


    <p>Exemplos: 3 usando numero positivo</p>  
   
    <p> echo substr_replace("oi mundo","terra",3); </p>

    <p>note que usando numero positivo a contagem ela volta a ser do inicio da frase "sempre contando com o espaço", e o que vai ser impresso na tela sera <b>oi terra</b>, de vez de ser <b>oi mundo</b> pós o nome mundo sera substituido pelo terra</p>
   <?php
     echo substr_replace("oi mundo","terra",3);
   ?>

</body>
</html>