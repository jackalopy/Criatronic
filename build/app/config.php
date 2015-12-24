<?php
    define('ENV', 'DEV');
    
    if(ENV == 'DEV') {
        define('BASE_URL', '//criatronic-mendizabal.c9.io/');
    } elseif(ENV == 'PROD') {
        define('BASE_URL', '//mastifftibetanobrasil.com.br/');
    }
    
    define('ASSETS_URL', BASE_URL . 'assets/');
    
?>