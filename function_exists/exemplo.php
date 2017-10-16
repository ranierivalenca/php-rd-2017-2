<?php 
if (function_exists('foo')) { 
  print "foo defined\\n"; 
} else { 
  print "foo not defined\\n"; 
} 
function foo() {} 

if (function_exists('bar')) { 
  print "bar defined\\n"; 
} else { 
  print "defining bar\\n"; 
  function bar() {} 
} 
print "calling bar\\n"; 
bar(); // ok to call function conditionally defined earlier 

print "calling baz\\n"; 
baz(); // ok to call function unconditionally defined later 
function baz() {} 

qux(); // NOT ok to call function conditionally defined later 
if (!function_exists('qux')) { 
  function qux() {} 
} 
?> 
