<?php
session_start();
if(!isset($_SESSION['a'])){
    echo "<script>  window.location.assign('index.php'); </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TRB CS Model Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

body {background-color: #F0F8FF;} 
</style>
<body>
 <form method=post action=test.php>
<div class="container">
<h2><center>
<?php
echo "Welcome Mr./Ms.";
echo $_SESSION['a'];
?>
</h2></center>
  <h3><center>You can start your test!!!</center></h3>
  <p>1. Which of the following decices is having a highest priority while assigning interrupts?</p>
 
    <div class="radio">
      <label><input   type="radio" value= "Hard disk" name="optradio1"   >Hard disk</label>
    </div>
    <div class="radio">
      <label><input   type="radio"  value= "Printer" name="optradio1">Printer</label>
    </div>
    <div class="radio">
      <label><input   type="radio"  value= "Keyboard" name="optradio1"  >Keyboard</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value= "Floppy" name="optradio1"  >Floppy</label>
    </div>
  <p>2. If deadlocks occur frequently, the detection algorithm must be invoked ________
</p>
 
    <div class="radio">
      <label><input   type="radio" value="rarely"  name="optradio2"   >rarely</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="frequently" name="optradio2">frequently</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="rarely & frequently" name="optradio2"  >rarely & frequently</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="none of the mentioned" name="optradio2"  >none of the mentioned</label>
    </div>
  <p>3. Program always deals with
 </p>
 
    <div class="radio">
      <label><input   type="radio" value="logical address" name="optradio3"   >logical address</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="absolute address" name="optradio3">absolute address</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="physical address" name="optradio3"  >physical address</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="relative addres" name="optradio3"  >relative addres</label>
    </div>
  <p>4. The flip-flop is only activated by _____________ </p>
 
    <div class="radio">
      <label><input   type="radio" value="Positive edge trigger" name="optradio4"   >Positive edge trigger</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Negative edge trigger" name="optradio4">Negative edge trigger</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Either positive or Negative edge trigger" name="optradio4"  >Either positive or Negative edge trigger</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="Sinusoidal trigge" name="optradio4"  >Sinusoidal trigge</label>
    </div>
  <p>5. Which of the following applications may use a stack?
 </p>
 
    <div class="radio">
      <label><input   type="radio" value="A parentheses balancing program" name="optradio5"   >A parentheses balancing program</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Tracking of local variables at run time" name="optradio5">Tracking of local variables at run time</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Compiler Syntax Analyzer" name="optradio5"  >Compiler Syntax Analyzer</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="All of the mentioned" name="optradio5"  >All of the mentioned</label>
    </div>
  <p>6. What is the time complexity for finding the height of the binary tree?
 </p>
 
    <div class="radio">
      <label><input   type="radio" value="h = O(loglogn)" name="optradio6"   >h = O(loglogn)</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="h = O(nlogn)" name="optradio6">h = O(nlogn)</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="h = O(n)" name="optradio6"  >h = O(n)</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="h = O(log n)" name="optradio6"  >h = O(log n)</label>
    </div>
  <p>7. What is an inline function? </p>
 
    <div class="radio">
      <label><input   type="radio" value="A function that is expanded at each call during execution" name="optradio7"   >A function that is expanded at each call during execution</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="A function that is called during compile time" name="optradio7">A function that is called during compile time</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="A function that is not checked for syntax errors" name="optradio7"  >A function that is not checked for syntax errors</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="A function that is not checked for semantic analysis" name="optradio7"  >A function that is not checked for semantic analysis</label>
    </div>
  <p>8. Which of the following is the default return value of functions in C++?</p>
 
    <div class="radio">
      <label><input   type="radio" value="void" name="optradio8"   >void</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="int" name="optradio8">int</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="char" name="optradio8"  >char</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="double" name="optradio8"  >double</label>
    </div>
  <p>9. The ______ clause allows us to select only those rows in the result relation of the ____ clause that satisfy a specified predicate.
 </p>
 
    <div class="radio">
      <label><input   type="radio" value="Where, from" name="optradio9"   >Where, from</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="From, select" name="optradio9">From, select</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Select, from" name="optradio9"  >Select, from</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="From, where" name="optradio9"  >From, where</label>
    </div>
  <p>10. Use the new system as the same time as the old system to compare the results. This is known as </p>
 
    <div class="radio">
      <label><input   type="radio" value="Procedure writing" name="optradio10"   >Procedure writing</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="parallel operation" name="optradio10">parallel operation</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="file conversion" name="optradio10"  >file conversion</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="all the above" name="optradio10"  >all the above</label>
    </div>
  <p>11. What is MVC in ASP.NET? </p>

 
    <div class="radio">
      <label><input   type="radio" value="Software" name="optradio11"   >Software</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="WebApplication" name="optradio11">WebApplication</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Framework" name="optradio11"  >Framework</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="Browser" name="optradio11"  >Browser</label>
    </div>
  <p>12. Several graphics image file formats that are used by most of graphics system are
 </p>
 
    <div class="radio">
      <label><input   type="radio" value="GIF" name="optradio12"   >GIF</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="JPEG" name="optradio12">JPEG</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="TIFF" name="optradio12"  >TIFF</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="All of these" name="optradio12"  >All of these</label>
    </div>
  <p>13. This topology requires multipoint connection </p>
 
    <div class="radio">
      <label><input   type="radio" value="Bus" name="optradio13"   >Bus</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Ring" name="optradio13">Ring</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Mesh" name="optradio13"  >Mesh</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="Star" name="optradio13"  >Star</label>
    </div>
  <p>14. Which of this is not a network edge device? </p>
 
    <div class="radio">
      <label><input   type="radio" value="Servers" name="optradio14"   >Servers</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Smartphones" name="optradio14">Smartphones</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="PC" name="optradio14"  >PC</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="Switch" name="optradio14"  >Switch</label>
    </div>
  <p>15. What layer in the TCP/IP stack is equivalent to the Transport layer of the OSI model?< /p>
 
    <div class="radio">
      <label><input   type="radio" value="Host to host" name="optradio15"   >Host to host</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Network Access<" name="optradio15">Network Access</label>
    </div>
    <div class="radio">
      <label><input   type="radio" value="Internet" name="optradio15"  >Internet</label>
    </div>

    <div class="radio">
      <label><input   type="radio" value="Application" name="optradio15"  >Application</label>
    </div>

   <button type="submit">Submit Test</button>
  </form>

<?php
$count=0;
$op1=$_POST["optradio1"];
$op2=$_POST["optradio2"];
$op3=$_POST["optradio3"];
$op4=$_POST["optradio4"];
$op5=$_POST["optradio5"];
$op6=$_POST["optradio6"];
$op7=$_POST["optradio7"];
$op8=$_POST["optradio8"];
$op9=$_POST["optradio9"];
$op10=$_POST["optradio10"];
$op11=$_POST["optradio11"];
$op12=$_POST["optradio12"];
$op13=$_POST["optradio13"];
$op14=$_POST["optradio14"];
$op15=$_POST["optradio15"];

if($op1=="Keyboard")
{
$count=$count+1;
}
if($op2=="frequently")
{
$count=$count+1;
}
if($op3=="logical address")
{
$count=$count+1;
}
if($op4=="Either positive or Negative edge trigger")
{
$count=$count+1;
}
if($op5=="All of the mentioned")
{
$count=$count+1;
}
if($op6=="h = O(log n)")
{
$count=$count+1;
}
if($op7=="A function that is expanded at each call during execution")
{
$count=$count+1;
}
if($op8=="int")
{
$count=$count+1;
}
if($op9=="Where, from")
{
$count=$count+1;
}
if($op10=="parallel operation")
{
$count=$count+1;
}
if($op11=="Framework")
{
$count=$count+1;
}
if($op12=="All of these")
{
$count=$count+1;
}
if($op13=="Bus")
{
$count=$count+1;
}
if($op14=="Switch")
{
$count=$count+1;
}
if($op15=="Host to host")
{
$count=$count+1;
}

$name=$_SESSION["a"];
$name1=$_SESSION["b"];



if($count!=0)
{
  echo "<script>";
   mysql_connect("localhost","root","suresh")or die("localhost error");
mysql_select_db("trb")or die("database error");
$res=mysql_query("insert into data values('$name','$name1',$count,'s')");
   $count=$count*10;
    echo "alert ('Mr./Ms. $name Your Test Mark is  $count out of 150');";
    echo "</script>"; 

session_destroy();

}
header("location:index.php");
?>

</div>

</body>
</html>

