

  <!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="UTF-8">

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



  <div class="calculator">
    <div class="bmi-calculator">

    <?php
// define variables and set to empty values
$name = $matric = $group = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $matric = test_input($_POST["matric"]);
  $group = test_input($_POST["group"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


echo "<h1>Hi There ! </h1>";
echo "<br>";
echo " Welcome, ";

echo $name;
echo "<br>";

echo "Your Matric Number is ";
echo $matric;
echo "<br>";

echo "Your Class Group is ";
echo $group;
echo "<br>";


?>


<div class="calculator">


        <h1 class="text-center">BMI Calculator</h1>

        <div class="bmi-status">
      <div class="Underweight">Underweight: 0 - 18.5</div>
      <div class="Normal">Normal: 18.5 - 25</div>
      <div class="Overweight">Overweight: 25 - 30</div>
      <div class="Obese">Obese: 30 - 35</div>
    </div>
  </div> 
  <br> 


  <h2 style="color: Green;">Weight Converter</h2>
  
  <p>Enter a value in the Kilograms field to convert :</p>
    
    
    
  <p>
      <!-- label the input field -->
      <label>Weight in Kilograms</label>
      <!-- input tag for enter the data -->
      <!-- kiloweightConvert function call
           function kiloweightConvert to evaluate value-->
      <input id="Kilograms" type="number" placeholder="kilograms" 
             oninput="kiloweightConvert(this.value)" 
             onchange="kiloweightConvert(this.value)" />
  </p>
    
  <!-- output field-->
  <p>Pounds: <span id="Pounds"></span></p>
  <p>Ounces: <span id="Ounces"></span></p>
  <p>Grams: <span id="Grams"></span></p>
  <p>Stones: <span id="Stones"></span></p>
    
  <script>
      //function that evaluates the weight and return result
             function kiloweightConvert(value) {
                 document.getElementById("Pounds").innerHTML =
                   value * 2.2046;
                 document.getElementById("Ounces").innerHTML =
                   value * 35.274;
                 document.getElementById("Grams").innerHTML =
                   value * 1000;
                 document.getElementById("Stones").innerHTML =
                   value * 0.1574;
             }
  </script>

<br>
<br>





        <div class="form">
            <div class="mb-3">
                <label class="form-label">
                    Height:
                    <div class="input-value">
                        <input id="height" class="form-range" type="range" value="1" min="1" max="300" />
                        <span id="height-value">0</span>
                        <!-- Select Height unit -->
                        <select id="height-unit" class="form-select">
                            <option value="cm">cm</option>
                            <option value="m">m</option>
                            <option value="in">in</option>
                            <option value="ft">ft</option>
                        </select>
                    </div>
                </label class="form-label">
            </div>
            <div class="mb-3">
                <label class="form-label">
                    Weight:
                    <div class="input-value">
                        <input id="weight" class="form-range" type="range" value="1" min="1" max="300" />
                        <span id="weight-value">0</span>
                        <!-- Select Weight unit -->
                        <select id="weight-unit" class="form-select">
                            <option value="kg">kg</option>
                            <option value="g">g</option>
                            <option value="lbs">lbs</option>
                            <option value="oz">oz</option>
                        </select>
                    </div>
                </label>
            </div>
        </div>
        <div class="text-center">
            <h1 class="bmi"></h1>
            <h2 class="remark"></h2>
        </div>
        
            <script src="script.js"></script>
 

<br>


  </script>


</body>

</html>
