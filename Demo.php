<!DOCTYPE html>
<html>
<body>

<?php

  // Check if form submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted username, email, and password
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $Height = $_POST["Height"];
    $Weight = $_POST["Weight"];


    // Check if email is valid
    if (!filter_var($Height, FILTER_VALIDATE_EMAIL)) {
      // If invalid, print error message
      $errorMessage .= " Please enter your Height";
    }
    if(!filter_var($Weight))
    {
      $errorMessage.="Please enter your Weight";
    }

    // Check if username is valid
    if ($Age < 2 || $Age > 120) {
  	// If invalid, print error message
  	$errorMessage .= " The Agent not in array";
	}

    if (!empty($errorMessage)) {
      echo "<p>" . $errorMessage . "</p>";
      exit;
    }

    // Check if username and password are correct
    if ($Age!=null && $Height!=null && $Weight!=Null$$ $Gender !=null) {
      header("Location: NextPage.php");
      exit;
    } else {
      echo "<p> Check again </p>";
    }

   
  }
?>

<html>
  <head>
    <script>
      function validateForm() {
        var Age = document.forms["MetricUnits"]["Age"].value;
        var Gender = document.form["MetricUnits"]["Gender"].value;
        var Height = document.forms["MetricUnits"]["Height"].value;
        var Weight = document.forms["MetricUnits"]["Weight"].value;
        if (Age < 2 || Age > 120) {
          alert("The Agent not in array");
          return false;
        }
        if (Height!=null) {
          alert("Please enter your Height");
          return false;
        }
        if (Weight!=null) {
          alert("Please enter your Weight");
          return false;
        }
      }

    </script>
  </head>
  <body>
    <h2>Metric Units</h2>
    <form name="MetricUnits" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateForm()">
      <label for="Age">Age:</label>
      <input type="text" id="Age" name="Age">
      <label>ages 2-120</label><br><br/>
      <label for="Gender">Gender:</label>
      <input type="radio" value="Male" id="" name="gender"> Male
      <input type="radio" value="Famale" id="" name="gender"> Female<br><br>
      <label for="Height">Height:</label>
      <input type="text" id="Height" name="Height"><br><br>
      <label for="Weight">Weight:</label>
      <input type="text" id="Weight" name="Weight"><br><br>
      <input type="submit" value="Calculate">
      <input type="submit" value="Clear">
    </form>
    <?php
     
    ?>
  </body>
</html>