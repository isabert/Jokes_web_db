<html>
<head>
<!-- CDN for bootstrap -->
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<style>
  *{
	font_family:Arial, Helvetica, sans-serrif;
	}
</style>
</head>

<body>
<h1>Welcome to the Jokes Page!</h1>
<?php
include "db_connect.php";
include "search_all_jokes.php";

echo "<br>";
echo "<br>";
?>

<form class="form-horizontal" action="search_key_word.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a joke</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="keyword">Search Keyword</label>
  <div class="col-md-5">
    <input id="keyword" name="keyword" type="search" placeholder="e.g. a word or a phrase" class="form-control input-md">
    <p class="help-block">Enter a word to search for jokes in the database</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Button</button>
  </div>
</div>

</fieldset>
</form>

<br>
<hr>
<br>

<form class="form-horizontal" action="add_joke.php">
<fieldset>
<!-- Form Name -->
<legend>Add a joke</legend>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newjoke">Enter the text of the new joke</label>  
  <div class="col-md-5">
  <input id="newjoke" name="newjoke" type="text" placeholder="question?" class="form-control input-md">
  <span class="help-block">Enter the joke question</span>  
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newanswer">The answer of the new joke</label>  
  <div class="col-md-5">
  <input id="newanswer" name="newanswer" type="text" placeholder="answer!" class="form-control input-md">
  <span class="help-block">Enter the punchline of your joke</span>  
  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Add a new joke</button>
  </div>
</div>
</fieldset>
</form>

<?php
// include "search_key_word.php";
$mysqli->close();
?>


</body>

</html>