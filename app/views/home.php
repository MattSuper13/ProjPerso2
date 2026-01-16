<!DOCTYPE html>
<html>
<head>
    <title>MotoStats</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<img src="public/images/logo_big.png" alt="Logo">

<h1>Welcome to MotoStats</h1>

<p> Every statistic about the Moto World Championship since its inception in 1949. </p>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="search">

    <label>Name :</label>
    <input type="text" name="rider">

    <label>Nationality :</label>
    <input type="text" name="nationality">

    <label>Birth year :</label>
    <input type="text" name="birthyear">

    <label>Class :</label>
    <input type="text" name="rider_class">

    <label>Races entered :</label>
    <input type="text" name="races">

    <button type="submit">Search</button>
</form>

<br>
<a href="index.php?page=contact">Contact</a>

</body>
</html>
