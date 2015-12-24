<?php
    define('ENV', 'PROD');
    
    if(ENV == 'DEV') {
        define('BASE_URL', '//criatronic-mendizabal.c9.io/');
    } elseif(ENV == 'PROD') {
        define('BASE_URL', '//criatronic.com.br/');
    }
    
    define('ASSETS_URL', BASE_URL . 'assets/');
    
?>