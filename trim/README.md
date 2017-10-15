<h1>Função trim - PHP</h1>
<p>A função <b>trim()</b> é responsável por remover sobras de <b>string tanto no início como no fim.</b></p><br>
<p> As sobras de string podem ser interpretadas como espaços em branco, retorno, quebras de linhas, etc. que ficam ou no início ou no final da string.<br></p>

<p>Visualmente podem não dar muita diferença, mas se desnecessários, por vezes, ocupam um espaço valioso, principalmente, em banco de dados</p>

<h2>Descrição: </h2>
<b>string trim ( string $str [, string $charlist ] )</b>

<p>Esta função retorna uma string com os espaçoes retirados do ínicio e do final de str. Sem o segundo parâmetro,<br> trim() irá retirar estes caracteres
<ul>

    <li>" " (ASCII 32 (0x20)), um espaço normal.</li>
    <li>"\t" (ASCII 9 (0x09)), uma tabulação.</li>
    <li>"\n" (ASCII 10 (0x0A)), uma linha nova (line feed).</li>
    <li>"\r" (ASCII 13 (0x0D)), um retono.</li>
    <li>"\0" (ASCII 0 (0x00)), o byte NULL.</li>
    <li>"\x0B" (ASCII 11 (0x0B)), uma tabulação vertical.</li">
</ul>
</p>
<p>Para entender melhor consulte o example.php</p>

