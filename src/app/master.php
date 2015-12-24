<?php
    require_once('config.php');
    require_once('data.php');
    
    class Master {
        private static $instance = null;
        private static $lang = null;
         
        public static function getInstance() {
             if (!isset(self::$instance) && is_null(self::$instance)) {
    			$c = __CLASS__;
    			self::$instance = new $c;
    		}
    		return self::$instance;
        }
         
        private function __constructor(){}
        
        public static function getProductClass() {
            return Data::$productClass;
        }
        
        public static function getAbout() {
            return Data::$about;
        }
        
        public static function getMeta() {
            return Data::$meta;
        }
    }
?>
