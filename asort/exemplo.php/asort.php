<?php
		$frutas = array("a" => "limao", "b" => "laranja", "c" => "banana", "d" => "melancia" => "e" => "abacaxi"=> "f" => "goiaba" => "z" => "pupuasul");
		asort($frutas);
		foreach( $frutas as $chave => $valor ){
		    echo "$chave = $valor\n";
		}
 		?>