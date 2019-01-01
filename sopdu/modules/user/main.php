<?php
    require ($_SERVER["DOCUMENT_ROOT"].'/sopdu/modules/user/location.php');
    class user {
        function location(){
            return userLocation::main();
        }
    }
?>