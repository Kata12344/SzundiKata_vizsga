<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./main.js" type="module"></script> 
    <meta name="csrf-token" content=<?php $token = csrf_token(); echo $token; ?>>
	<link rel="stylesheet" href="./css/style.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Szótár</title>
</head>
<body>
    <h4>Szótár</h4>
        <h2>Szavak</h2>
    <article></article>
    <aside></aside>
</body>
</html>