<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Funções em PHP</title>
</head>
<body>
	
    <h1>Exemplos do Manual do PHP</h1>
    <H2>Exemplo #1 implode() exemplo</H2>
        
        <?php

        $array = array('lastname', 'email', 'phone');
        $comma_separated = implode(",", $array);

        print $comma_separated; // lastname,email,phone

        ?>
    
    <h2>Exemplo Implode - Blog DialHos</h2>
        <p>
            Dando um implode em seus arrays

            Vamos à parte prática da função implode. Ela pode ser muito útil para fazer queries no MySQL utilizando a cláusula IN. Vamos dizer que tenhamos uma tabela de clientes e seus pratos preferidos. Você então deseja selecionar aqueles clientes que gostam de batatas fritas, bife de boi e arroz. Você poderia fazer uma query cheia de cláusulas OR, mas acredito que desta forma seria bem mais prático.
        </p>
        <p>
            Tabela de clientes

            +------+---------+---------------------+
            | id   | nome    | prato_preferido     |
            +------+---------+---------------------+
            | 1    | John    | batatas fritas      |
            | 2    | Ram     | bife de boi         |
            | 3    | Jack    | arroz               |
            | 4    | Jill    | torresmo            |
            +------+---------+--------------------+
        </p>
        <p>
            Tendo esta tabela em vista vamos ao código. No código abaixo fiz um simples array com os pratos que desejo, implodi o mesmo utilizando o separador ‘,’ e então fiz a query vejam só:
        </p>

            <?php

                //Definindo os itens da busca no array
                $arr = array('batata frita','bife de boi','arroz');

                //Fazendo o implode dos itens em uma string simples
                $query_args = implode("','",$arr);

                //definindos os dados de conexão com o banco via PDO
                $user = 'local';
                $pass = 'local';
                $dbh = new PDO('mysql:host=localhost;dbname=devel2_implode', $user, $pass);

                //Montando a query da busca filtrada
                $query = "select * from clientes where prato_preferido IN ('".$query_args."')";
                
                //Executando a query com PDO
                $resultado = $dbh->query($query);
                $resultado = $resultado->fetchAll();
                
                //Trazendo os resultados da busca
                foreach ( $resultado as $row){
                    echo "<p style=\"font-weight:bold;\">".$row["nome"]."</p>";
                }           
            ?>
        <p>
            Para a conexão com o banco utilizei o PDO do PHP, por questões de melhor segurança dos dados e etc. caso prefira pode utilizar o mysql_query ou mysqli_query. Fica a seu critério.
        </p>
        <p>
            Como explicado acima, eu defini os filtros da minha busca dentro do array. No caso você pode popular este array através de um formulário ou de um relatório. Implodi ele para que o mesmo venha como uma string só e assim permitir a utilização dos filtros no IN do MySQL. Por fim é só fazer a busca em seu banco e imprimir os resultados. Simples neh? Confiram o resultado final e com alguns ajustes neste link.
        </p>
        <p>
            Concluindo, o implode consegue transformar as strings dentro de um array reunindo-as em uma string simples e assim várias possibilidades surgem para tratamento posterior. 
        </p>

</body>
</html>