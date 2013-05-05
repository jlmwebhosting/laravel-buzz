<?php

// Configure the PSR-0 compatible autoloader 
Autoloader::namespaces(array(
    'Buzz' => Bundle::path('buzz') . 'buzz' . DS . 'lib' . DS . 'Buzz'
));