<head>
  <!-- jquery UI-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>


<?php
//searchs for entries with only matching words
include "db_connect.php";
$keyword_from_form =  $_GET["keyword"];

echo "<h2>All Jokes contains <em>$keyword_from_form</em> in the question<br></h2>";
$sql = "SELECT JokeID, Joke_question, Joke_answer FROM jokes_tables WHERE Joke_question LIKE '%". $keyword_from_form ."%'";
$result = $mysqli->query($sql);
echo "<br>";
?>


<div id="accordion">
<?php
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["JokeID"]. " - Question: " . $row["Joke_question"]. " - Answer: " . $row["Joke_answer"]. "<br>";
	echo "<h3>$row[Joke_question]</h3>";
	echo "<div><p>$row[Joke_answer]</p></div>";
  }
} else {
  echo "0 results";
}
?>
</div>
<!--go back to main page-->
<a href="index.php"> return to main page</a>