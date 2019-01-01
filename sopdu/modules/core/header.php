<?
require ($_SERVER["DOCUMENT_ROOT"].'/sopdu/modules/user/style.php');
require ($_SERVER["DOCUMENT_ROOT"].'/sopdu/modules/user/main.php');
if($_SERVER["PHP_SELF"] === '/login.php') {
    require ($_SERVER["DOCUMENT_ROOT"].'/sopdu/template/login/header.php');
} else {
    require ($_SERVER["DOCUMENT_ROOT"].'/sopdu/template/core/header.php');
}

?>

<?='<pre>'; print_r($_SERVER); '</pre>';?>
