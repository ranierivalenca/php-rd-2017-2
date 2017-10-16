<h1>Exemplo</h1>
<?php
function foo(&$bar, $big, $small = 1) {}
function bar($foo) {}
function noparams() {}
function byrefandopt(&$the = 'one') {}

$functions = get_defined_functions();
$functions_list = array();
foreach ($functions['user'] as $func) {
        $f = new ReflectionFunction($func);
        $args = array();
        foreach ($f->getParameters() as $param) {
                $tmparg = '';
                if ($param->isPassedByReference()) $tmparg = '&';
                if ($param->isOptional()) {
                        $tmparg = '[' . $tmparg . '$' . $param->getName() . ' = ' . $param->getDefaultValue() . ']';
                } else {
                        $tmparg.= '&' . $param->getName();
                }
                $args[] = $tmparg;
                unset ($tmparg);
        }
        $functions_list[] = 'function ' . $func . ' ( ' . implode(', ', $args) . ' )' . PHP_EOL;
}
print_r($functions_list);
?>
