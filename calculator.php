<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator using php</title>
    <style>
     @import url('https://fonts.googleapis.com/css2?family=Anton&family=Gugi&family=Lato&family=Roboto:wght@300&family=Sofia&display=swap');


        *{
            box-sizing: border-box;
        }
        body{
            background-color: #FFFFCC;
        }

    .centre{
        width:300px;height:215px;background-color:royalblue;font-weight:bolder;
        top: 50%;left: 50%;transform: translate(-50%,-50%);position: absolute;border-radius: 20px;
        box-shadow: 20px 6px 80px 15px grey;

    }
    
    p{
        top:0px;position: relative;text-align: center;font-family:"Sofia",cursive;
    }
    input{width: 75%;margin: 0px 35px;font-weight: bolder;cursor: pointer;text-align: center;

    }
    h1{
        color:whitesmoke;font-family: "Roboto",sans-serif;text-align: center;
    }
    .mid{
        display: flex;margin: 0px 58px;
    }
    .php{
        text-align: center;font-size: 30px;color: indianred;
    }
    </style>
</head>

<body>
<div class="centre">
<h1>PHP CALCULATOR</h1>
<form method="POST">
 <input type="text" name="num1" placeholder="write your 1st number"><br>
 <input type="text" name="num2" placeholder="write your 2nd number"><br><br>
 <div class="mid">
 <select name="operator" style="cursor: pointer;border-radius:20px;font-weight:bolder;" >
 <option>None</option>
 <option>Add</option>
 <option>Subtract</option>
 <option>Multiply</option>
 <option>Divide</option>
 </select><br>

<button style="cursor: pointer;border-radius:10px;border:2px solid white;outline:none;font-size:large" type="submit" name="submit" value="submit">calculate</button>
</div>
</form>
<p>the calculated value is :</p>
<div class="php">
<?php
if (isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch($operator){
    case "None":
        echo "you need to select something for a result!";
    break;
    case "Add":
    echo $num1 + $num2 ;
    break;
    case "Subtract":
    echo $num1 - $num2 ;
    break;
    case "Multiply":
    echo $num1 * $num2 ;
    break;
    case "Divide":
    echo $num1 / $num2 ;
    break;
    }
}
?>
</div>
</div>
</body>
</html>