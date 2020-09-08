<?php
include "Cookies.php";
include "Session.php";
include "Request.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test OOP</title>
</head>
<body>
<?php
$_POST['1'] = '11';
$_POST['2'] = '';
$_GET['2'] = '22';
$_GET['page'] = '123';
$_SESSION['99'] = 999999;
$cookies = new Cookies($_COOKIE);
$session = new Session($_SESSION);
$request = new Request($_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE);
print_r ($request->query('page'));
echo "<br/>";
print_r ($request->post('1'));
echo "<br/>";
print_r ($request->get('2'));
echo "<br/>";
print_r ($request->all());
echo "<br/>";
print_r ($request->has('2'));
echo "<br/>";
print_r ($request->session());
echo "<br/>";
print_r ($cookies->all());
echo "<br/>";
print_r ($session->all());
?>
</body>
</html>