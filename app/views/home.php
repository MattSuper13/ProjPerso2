<!DOCTYPE html>
<html>
<head>
    <title>MotoStats</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="/../../public/images/logo_favicon.png"> <!-- Favicon -->
</head>
<body>

<img src="/../../public/images/logo_big.png" alt="Logo">

<h1>Welcome to MotoStats</h1>

<p>Every statistic about the Moto World Championship since its inception in 1949.</p>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="search">

    <label>Name :</label>
    <input type="text" name="RIDER">

    <label>Nationality :</label>
    <input type="text" name="NATIONALITY">

    <label>Birth year :</label>
    <input type="text" name="BIRTHYEAR">

    <label>Class :</label>
    <input type="text" name="RIDER_CLASS">

    <label>Races entered :</label>
    <input type="text" name="RACES">

    <button type="submit">Search</button>
</form>

<br>
<a href="index.php?page=contact">Contact</a>

</body>
</html>
