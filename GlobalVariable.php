<?php
$somevar=15;
function addit(){
GLOBAL	$somevar;
$somevar++;
print("\$somevar is $somevar");
}
addit();
?>

