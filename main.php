<!DOCTYPE HTML>  
<html>
<head>
<title>Bmi Calculation</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <header>
      <h1>Bmi Calculation</h1>
    </header>
    <nav>
      <ul>
        <li><a href="main.php">Profile</a></li>
        <li><a href="indexx.php">BMI Calculation</a></li>
      
      </ul>
    </nav>
    <main>
    


<div class="container">
  <div class="bmi-calculator">


  <?php
// define variables and set to empty values
$nameErr = $matricErr = $groupErr = "";
$name = $matric  = $group = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  if (empty($_POST["matric"])) {
    $matricErr = "matric is required";
  } else {
    $matric = test_input($_POST["matric"]);
  }

  if (empty($_POST["group"])) {
    $group = "";
  } else {
    $group = test_input($_POST["group"]);
  }

}
?>

<h2 style="text-align:center"> My Profile</h2>

<div class="card">
  <img src="/individual/try.png" alt="Aini" style="width:50%">
  <h1>NURUL AINI HANANI BINTI ANIF</h1>
  <p class="title">RCS2405A</p>
  <p>2021767857</p>
 



<h2>User Test </h2>
<form method="post" action="indexx.php">  
  Name: <input type="text" name="name" required>
  <br><br>
 
  Matric : <input type="number" name="matric" required>
  <br><br>
  Group: <input type="text" name="group" required>
  <br><br>
  
  <button type="submit" class="calculate">Check BMI</button>
    <div class="result"></div>
  </div>
 
</form>
</div>


</body>

</html>