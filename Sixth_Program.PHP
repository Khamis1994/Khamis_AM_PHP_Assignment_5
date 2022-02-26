<!DOCTYPE HTML>
<head
<title>PHP Assingment 5</title>
<style>
    span {
        font-size:20px;
    }
</style>
</head>
<?php
session_start();
//SCRIPT NAME
echo $_SERVER['SCRIPT_NAME']."<br>";
//Calculater
$First_Number=$_POST["First_Number"];
$Second_Number=$_POST["Second_Number"];
$Calculate=$_POST["Calculate"];
$Result=0;

if (is_numeric($First_Number) && is_numeric($Second_Number)) {
Switch ($Calculate) {
    case 'Add':
        $Result=$First_Number+$Second_Number;
        break;
    case 'Subtract':
        $Result=$First_Number-$Second_Number;
        break;
    case 'Multiply':
        $Result=$First_Number*$Second_Number;
        break;
    case 'Divide':
        $Result=$First_Number/$Second_Number;
        break;    
    
}
}
      ?>
     

<body>
   
    <h1>PHP - Simple Calculator Program</h1>
    <form action="" method="post">

    <input type="number" name="First_Number" required="required"
    value="<?php echo $First_Number; ?>"/><span>First Number</span><br>

    <input type="number" name="Second_Number"required="required"
    value="<?php echo $Second_Number; ?>"/><span>Second Number</span><br>

    <input type="number" name="Result" Value="<?php echo $Result;?>" 
    readonly="readonly"/><span>Result</span><br>

    <input type="submit" name="Calculate" Value="Add"/>
    <input type="submit" name="Calculate" Value="Subtract"/>
    <input type="submit" name="Calculate" Value="Multiply"/>
    <input type="submit" name="Calculate" Value="Divide"/>
    </form>

</body>
</HTML>