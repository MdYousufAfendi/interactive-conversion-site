<?php
define("filepath", "converter.txt");
?>

<!DOCTYPE html>
  <html>
  <head>
    <meta charset ="utf-8">
    <title>Home</title>
    <style>
    #abc{
      color: red;
    }
    #head1{
      color: red;
    }

    </style>
    <script src="a.js"></script>
  </head>

      <body>
   

</script>

   <div style = "position: absolute; top: 50%; left: 50%; transform: translate(-49%, -49%);"> 
     <form action="actionJS.php" method="POST" onsubmit = "return isValid()" name = "mForm" id ="nForm">

    <fieldset>
      <p id="head1"> Page 1: [Home]</p>

    <p id="head1"> Conversion site</p>
     <a href="Home.php" target="_blank">Home</a>
      <a href="conversion.php" target="_blank">Conversion Rate</a>

      <a href="History.php" target="_blank">History</a>

<br>

  <label for="converter" id="abc">Converter: </label>
  <br>
  <select id="converter" name="converter"> 

      <option value="feet to inch">feet to inch</option>
      <option value="inch to feet">inch to feet</option>

    </select>
    <br><br>
    <label>Value :</label>
       <p>
  <label>Feet</label>
  <input id="inputFeet" type="number" placeholder="Feet" oninput="LengthConverter(this.value)" onchange="LengthConverter(this.value)">
</p>
<p>Inch: <span id="outputMeters"></span></p>

<script>
function LengthConverter(valNum) {
  document.getElementById("outputMeters").innerHTML=12/valNum;
}
</script>
      <br><br>
      
      <p id ="result"></p>
      <br><br>
    </fieldset>
    

</form>


</div>
</body>
</html>

