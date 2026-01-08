<!DOCTYPE html>
<html>
<head>
    <title>MotoStats</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Welcome to MotoStats</h1>

<form method="GET" action="index.php">
    <input type="hidden" name="page" value="search">

    <label>Rider:</label>
    <input type="text" name="rider">

    <label>Nationality:</label>
    <input type="text" name="nationality">

    <label>Birth year:</label>
    <input type="text" name="birthyear">

    <label>Class:</label>
    <input type="text" name="class">

    <label>Races:</label>
    <input type="text" name="races">

    <button type="submit">Search</button>
</form>

<br>
<a href="index.php?page=contact">Contact</a>

</body>
</html>
