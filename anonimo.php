<?php

//first sample
echo preg_replace_callback('~-([a-z])~', function ($take) {
    return strtoupper($take[1]);
}, 'lets go to download.');

//second sample
$grettingsTo = function($name)
{
    printf("hey %s\r\n", $name);
};

$grettingsTo('developers');
$grettingsTo('node.js');

?>
