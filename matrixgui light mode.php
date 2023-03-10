<!doctype html>
<html>
<head>
<script>
function modeshift() {
  alert("Switched to Dark Mode");
}
</script>
<style>
body{
background: linear-gradient(to right, #F5F7FA 0%, #88C6DB 100%);
background-repeat:no-repeat;
}
*{
font-family:verdana;

}
</style>
<style>
table{
  border-collapse:collapse;
  width:15%;
}
.purple{
  border:4px solid #7d6e7d;
}
th,td{
  text-align:center;
  padding:5px 0;
}
tbody tr:nth-child(even){
  background:#99aab5;
}
tbody tr:hover{
background:#BDC3C7;
  color:#FFFFFF;
}
</style>
<style>
.btn {
  line-height: 50px;
  height: 50px;
  text-align: center;
  width: 250px;
  cursor: pointer;
}

.btn-one {
  color: #28282B;
  transition: all 0.3s;
  position: relative;
}
.btn-one span {
  transition: all 0.3s;
}
.btn-one::before {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  opacity: 0;
  transition: all 0.3s;
  border-top-width: 1px;
  border-bottom-width: 1px;
  border-top-style: solid;
  border-bottom-style: solid;
  border-top-color: rgba(255,255,255,0.5);
  border-bottom-color: rgba(255,255,255,0.5);
  transform: scale(0.1, 1);
}

.btn-one:hover span {
  letter-spacing: 2px;
}
.btn-one:hover::before {
  opacity: 1; 
  transform: scale(1, 1); 
}
.btn-one::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.3s;
  background-color: rgba(255,255,255,0.1);
}
.btn-one:hover::after {
  opacity: 0; 
  transform: scale(0.1, 1);
}
</style>
<style>
	button {
  background-color: transparent;
}
</style>
<style>
	.button {
  background-color: transparent;
}
</style>
<style>
	.btn-two {
  color: black;
  transition: all 0.5s;
  position: relative; 
}
.btn-two span {
  z-index: 2; 
  display: block;
  position: absolute;
  width: 100%;
  height: 100%; 
}
.btn-two::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.2);
  background-color: rgba(255,255,255,0.1);
}
.btn-two::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
  transition: all 0.5s;
  border: 1px solid rgba(255,255,255,0.2);
  background-color: rgba(255,255,255,0.1);
}
.btn-two:hover::before {
  transform: rotate(-45deg);
  background-color: rgba(255,255,255,0);
}
.btn-two:hover::after {
  transform: rotate(45deg);
  background-color: rgba(255,255,255,0);
}
</style>
<style>
	.box{
    background-color:#99aab5;
	border-radius:3px;
	padding:70px 100px;
}
</style>
<style>
.button-85 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-85:before {
  content: "";
  background: linear-gradient(
    45deg,
    #ffffff,
    #ffffff,
    #ffffff,
    #ffffff
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.button-85:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
</style>
<style>
.button-89 {
  --b: 3px;   /* border thickness */
  --s: .45em; /* size of the corner */
  --color: #373B44;
  
  padding: calc(.5em + var(--s)) calc(.9em + var(--s));
  color: var(--color);
  --_p: var(--s);
  background:
    conic-gradient(from 90deg at var(--b) var(--b),#0000 90deg,var(--color) 0)
    var(--_p) var(--_p)/calc(100% - var(--b) - 2*var(--_p)) calc(100% - var(--b) - 2*var(--_p));
  transition: .3s linear, color 0s, background-color 0s;
  outline: var(--b) solid #0000;
  outline-offset: .6em;
  font-size: 16px;

  border: 0;

  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-89:hover,
.button-89:focus-visible{
  --_p: 0px;
  outline-color: var(--color);
  outline-offset: .05em;
}

.button-89:active {
  background: var(--color);
  color: #fff;
}
</style>
<style>
.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #92b0ae;
  color: white;
}
</style>
<style>
.b1 {
  padding: 0.6em 2em;
  border: none;
  outline: none;
  color: rgb(255, 255, 255);
  background: #111;
  cursor: pointer;
  position: relative;
  z-index: 0;
  border-radius: 10px;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.b1:before {
  content: "";
  background: linear-gradient(
    45deg,
    #f7f2f2,
    #a288bf,
    #565e61
  );
  position: absolute;
  top: -2px;
  left: -2px;
  background-size: 400%;
  z-index: -1;
  filter: blur(5px);
  -webkit-filter: blur(5px);
  width: calc(100% + 4px);
  height: calc(100% + 4px);
  animation: glowing-button-85 20s linear infinite;
  transition: opacity 0.3s ease-in-out;
  border-radius: 10px;
}

@keyframes glowing-button-85 {
  0% {
    background-position: 0 0;
  }
  50% {
    background-position: 400% 0;
  }
  100% {
    background-position: 0 0;
  }
}

.b1:after {
  z-index: -1;
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: #222;
  left: 0;
  top: 0;
  border-radius: 10px;
}
</style>
<title>
Matrix Calculator
</title>
</head>
<body>
<center>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];
#php input
$x =$a*(($e*$i)-($h*$f));
$y =(-1*$b)*(($d*$i)-($g*$f));
$z =$c*(($d*$h)-($g*$e));
$q =($x+$y+$z);
if($q==0){
}
else{
	$a11 =(($e*$i)-($h*$f))*1;
	$a12 =(($d*$i)-($g*$f))*-1;
	$a13 =(($d*$h)-($g*$e))*1;
	#php matrix 1x1 1x2 1x3 ;
	$a21 =(($b*$i)-($h*$c))*-1;
	$a22 =(($a*$i)-($c*$g))*1;
	$a23 =(($a*$h)-($g*$b))*-1;
	#php matrix 2x1 2x2 2x3;
	$a31 =(($b*$f)-($e*$c))*1;
	$a32 =(($a*$f)-($d*$c))*-1;
	$a33 =(($a*$e)-($d*$b))*1;
	#php matrix 3x1 3x2 3x3 ;
	
}
}
?>
<div class="topnav">
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <a class="active" href="http://localhost/matrixgui%20light%20mode.php">Matrix</a>
</div>

<p align="right">
<a href="http://localhost/matrixgui.php" onclick="modeshift()"><button class="b1" role="button">Dark Mode</button></a>
</p>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<div class="box">
<div class="btn btn-two">
<h3> MATRIX CALCULATOR </h3>
</div>
<br>
<table class="purple" border="4" cellspacing="2" cellpadding="2">
<tr>
<th> 
<input name="a" size="3">
</th>
<th>
<input name="b" size="3">
 </th>
<th>
<input name="c" size="3">
 </th>
</tr>
<tr>
<th>
 <input name="d"size="3">
</th>
<th>
<input name="e"size="3">
 </th>
<th>
<input name="f"size="3">

 </th>
</tr>
<tr>
<th>
 <input name="g"size="3">
</th>
<th>
<input name="h"size="3"> 
</th>
<th> 
<input name="i"size="3">
</th>
</tr>
</table>
<br>
<button class="button-85" type="submit">Calculate</button>
</div>
<fieldset>
<div class="box">
<div class="btn btn-one">
<h3> FINDING THE INVERSE</h3>
</div>
<h3 style="background-color:#FAF9F6; color:#000000;">
<?php
 echo "|A| =",$a,"x","(",$e,"x",$i,")","-","(",$h,"X",$f,")","-",$b,"x",$i,")","-","(",$g,"x",$e,")". "<br/>";
 echo "|A| =",$x,"+",$y,"+","(",$z,")". "<br/>";
 echo "|A| =",$q. "<br/>";
 if($q==0){
 echo"A^-1 DOES NOT EXIST ";}
 else{
 echo"A^-1 EXISTS";}
?>
</h3>
<div class="btn btn-one">
<h4> FINDING THE COEFFICIENT</h4>
</div>
<h3 style="background-color:#FAF9F6; color:#000000;"> 
<?php
if($q==0){
	echo "COEFICIENT DOES NOT EXIST AS A^-1 DOES NOT EXIST ";
	die();
}else{
echo "A.1x1=","(",$e,"x",$i,")","-","(",$h,"x",$f,")","=",$a11,"<br/>";
echo "A.1x2=","(",$d,"x",$i,")","-","(",$g,"X",$f,")","=",$a12,"<br/>";
echo "A.1X3=","(",$d,"x",$h,")","-","(",$g,"x",$e,")","=",$a13,"<br/>";
# 1x1 1x2 1x3 ;
echo "A.2x1=","(",$b,"x",$i,")","-","(",$h,"x",$c,")","=",$a21,"<br/>";
echo "A.2x2=","(",$a,"x",$i,")","-","(",$c,"X",$g,")","=",$a22,"<br/>";
echo "A.2X3=","(",$a,"x",$h,")","-","(",$g,"x",$b,")","=",$a23,"<br/>";
#2x1 2x2 2x3 ;
echo "A.3x1=","(",$b,"x",$f,")","-","(",$e,"x",$c,")","=",$a31,"<br/>";
echo "A.3x2=","(",$a,"x",$f,")","-","(",$d,"X",$c,")","=",$a32,"<br/>";
echo "A.3X3=","(",$a,"x",$e,")","-","(",$d,"x",$b,")","=",$a33,"<br/>";
#3x1 3x2 3x3 ;
}
?>
</h3>
<div class="btn btn-one">
<h3>
COEFICIENT OF |A|  
</h3>
</div>
<table style="background-color:#99aab5" border="4" cellspacing="2" cellpadding="2" class="purple">
<tbody>
<tr>
<th>
<?php
echo $a11;
?> </th>
<th>
<?php
echo $a12;
?> </th>
<th>
<?php
echo $a13;
?> </th>
</tr>

<tr>
<th > 
<?php
echo $a21;
?>
</th>
<th > 
<?php
echo $a22;
?></th>
<th > 
<?php
echo $a23;
?></th>
</tr>

<tr>
<th >
<?php
echo $a31;
?> </th>
<th >
 <?php
echo $a32;
?></th>
<th >
 <?php
echo $a33;
?></th>

</tr>
</tbody>
</table>
<div class="btn btn-one">
<h3>
ADJUST OF |A|  
</h3>
</div>
<table style="background-color:#99aab5" border="4" cellspacing="2" cellpadding="2" class="purple">
<tbody>
<tr>
<th>
<?php
echo $a11;
?> </th>
<th>
<?php
echo $a21;
?> </th>
<th>
<?php
echo $a31;
?> </th>
</tr>

<tr>
<th> 
<?php
echo $a12;
?>
</th>
<th> 
<?php
echo $a22;
?></th>
<th> 
<?php
echo $a32;
?></th>
</tr>

<tr>
<th>
<?php
echo $a13;
?> </th>
<th>
 <?php
echo $a23;
?></th>
<th>
 <?php
echo $a33;
?></th>

</tr>
</tbody>
</table>
</fieldset>
</div>
</form>
</center>
<p align="right" style="font-family: Common Pixel;">matrix calculator (Light Mode) - release: beta - v2.7</p>
</body>
</html>