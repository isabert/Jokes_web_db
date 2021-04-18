<html>
<head>
</head>

<body>
<h1>Welcome to the Jokes Page!</h1>
<?php
include "db_connect.php";
include "search_all_jokes.php";

echo "<br>";
echo "<br>";
?>

<form action="search_key_word.php">
  <label for="keyword">Enter A Key Word</label><br>
  <input type="text" id="keyword" name="keyword" value="your key word"><br>
  <input type="submit" value="Submit">
</form> 

<?php
// include "search_key_word.php";

$mysqli->close();
?>


</body>

</html>