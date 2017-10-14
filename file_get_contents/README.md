<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>file_get_contents</title>
</head>
<body>
  <h1>file_get_contents</h1>
  <p>O file_get_contents () lê um arquivo em uma string.
  Esta função é a maneira preferida de ler o conteúdo de um arquivo em uma string. Porque ele usará técnicas de mapeamento de memória, se isso for suportado pelo servidor, para melhorar o desempenho. 
  <strong> Dica:</strong> esta função é de segurança binária (o que significa que dados binários, como imagens e dados de caracteres podem ser escritos com esta função).</p>
  <br>
  <h2>Parâmetros</h2><br>
  <br>
  <strong> filename:</strong> Nome do arquivo para ler.<br>
  <strong>context:</strong> Um recurso de contexto válido, criado com stream_context_create(). Se você não precisa usar um contexto personalizado, você pode ignorar este parâmetro passando NULL.<br>
  <strong>maxlen: </strong> Comprimento máximo dos dados lidos.<br>
  <strong>offset:</strong> O ponto onde a leitura deve começar.<br>
</body>
</html>