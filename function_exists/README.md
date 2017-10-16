<h1>function_exists</h1>
function_exists — Retorna TRUE se a função dada está definida
Descrição ¶
bool function_exists ( string $function_name )
Verifica a lista de funções definidas, ambas embutidas (interna) e definidas pelo usuário, para function_name.
Parâmetros ¶
function_name
O nome da função, como uma string.
Valor Retornado ¶
Retorna TRUE se function_name existe e é uma função, FALSE caso contrário.
Nota:
Esta função retornará FALSE para construtores, como include_once e echo.
Exemplos ¶
Exemplo #1 Exemplo da function_exists()
<?php
if (function_exists('imap_open')) {
    echo "IMAP functions are available.<br />\n";
} else {
    echo "IMAP functions are not available.<br />\n";
}
?>
Notas ¶
Nota:
O nome da função deve existir se a função chama a si própria se torna inútil devido a configuração ou opções de compilação (com a função image sendo um exemplo).
