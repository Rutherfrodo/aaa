<?php

namespace WPC;

class Widget_Loader{
    private static $_instance = null;
    public static function instance(){
        if (is_null(self::$_instance)){
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    
    public function __construct()
    {
        
        add_action('elemenot/widgets/widgets_registered',[$this, 'registered_widgets'],99);
    }
    
}

Widget_Loader::instance();


?>