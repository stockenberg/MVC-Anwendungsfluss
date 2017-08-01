<pre>
<?php
/**
 * Created by PhpStorm.
 * User: workstation
 * Date: 01.08.17
 * Time: 11:06
 */

require __DIR__ . "/vendor/autoload.php";

$app = new \app\App();
$app->boot();

?>
</pre>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
    <style>
        p{
            color: blue;
        }
        nav{
            position: fixed;
            right: 100px;
            top: 100px;
            padding: 20px;
            border: thin solid black;
        }
        nav a{
            display: block;
            padding: 10px;
            background: darkslateblue;
            color: white;
            margin: 2px;
            text-decoration: none;
            text-align: center;
            font-family: arial;
        }
        nav a:hover{
            background: #222;
        }
    </style>
</head>
<body>
	<nav>
		<a href="/">Home</a>
		<a href="?p=users&action=create">User erstellen</a>
		<a href="">User Löschen</a>
		<a href="">User Editieren</a>
		<a href="">Userdaten Updaten</a>
		<a href="">Alle User laden</a>
	</nav>
</body>
</html>
