<?php
class userLocation {
    function getIP(){
        return $_SERVER["REMOTE_ADDR"];
    }
    function getCity(){

        return;
    }
    function addCity(){

        return;
    }
    function editCity($idCity){

        return;
    }
    function main(){
        echo '<pre>'; print_r(self::getIP()); '</pre>';
        return;
    }
}
?>
