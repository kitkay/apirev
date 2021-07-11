<?php

/**  Using this spl_autoload_registter.
*    We could simply use namespacing with ease.
*    And since autoloader is included to all files
*       we will just call the api.setting.php here.
*/
    spl_autoload_register(

        //Pass this function in our spl_autoload_register
        function($class){
            //we just require only once to trigger error if any and call all classes needed.
            require_once $class.'.inc.php';
        }

    );

    /**
     * Lets include the api.setting.php here to avoid any conflicts to other files.
     */
    include_once "api.setting.php";
?>