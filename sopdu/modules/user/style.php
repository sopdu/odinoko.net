<?php
Class userStyle {
    function getColor(){
        $path = $_SERVER["DOCUMENT_ROOT"].'/sopdu/template/core/style';
        foreach (glob("$path/palette_*.css") as $docFile) {
            $ex = explode('/', $docFile) ;
            $res[] = end($ex);
        }
        return $res;
    }

    function main (){
        $gtColor = new self();
        echo '/sopdu/template/core/style/'.$gtColor->getColor()[array_rand($gtColor->getColor())];
        return;
    }
}