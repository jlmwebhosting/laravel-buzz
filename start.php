<?php

// Configure the PSR-0 compatible autoloader 
Autoloader::namespaces(array(
    'Buzz' => Bundle::path('buzz') . 'lib' . DS . 'Buzz',
));