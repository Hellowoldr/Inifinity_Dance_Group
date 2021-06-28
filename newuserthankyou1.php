<html lang="en">
<head>
<title>Infinity Dance Group</title>
<link href="style.css" rel="stylesheet" type="text/css" />

<style>

body {
    background-color: #F00;
}


h2 {
    color: orange;
    text-align: center;
}


p {
    font-family: "Arial";
    font-size: 20px;
}

</style>



<script>
function ChangeColor()
{
var e = document.getElementById("Colorpic");
var strUser = e.options[e.selectedIndex].value;

document.body.style.backgroundColor=strUser; 
}


var i=0;
function IncreaseSize() {
  
   var div = document.getElementById("p1");
   if (i > 2)
   { i = 0; }
   if (i == 0) {
       div.style.fontSize = "larger";
       //alert("0");
   }
   if (i == 1) {
       div.style.fontSize = "x-large";
       //alert("1");
       
   }
   if (i == 2) {
       div.style.fontSize = "xx-large";
       //alert("2");
       
   }
   i++;
    /*document.div.style.font-size =  document.div.style.font-size+1; */
} var p = 0;
function DecreaseSize() {
   
    var div = document.getElementById("p1");
    if (p > 2)
    { p = 0; }
        
    if (p == 0) {
        div.style.fontSize = "smaller";
        
       
    }
    if (p == 1) {
        div.style.fontSize = "x-small";
        
    }
    if (p == 2) {
        div.style.fontSize = "xx-small";
        
       
    }
    p++;
    /*document.div.style.font-size =  document.div.style.font-size+1; */
}
</script>
</head>

<body>
<div style="background-image: url(images/Commercial1.JPG); height: 100%;">
<table border=2 bordercolor="white" width="80%" align="center" bgcolor="black">
<tr><td>
<div id="hmenu"> 
 <ul> 
   <li><a href="index.html">Home</a></li> 
   <li><a href="about.html">About</a></li> 
   <li><a href="dance.html">Dance Gallery</a></li> 
   <li><a href="tickets.html">Tickets</a></li> 
   <li><a href="support.html">Support</a></li> 
   <li><a href="contact.html">Contact Us</a></li> 
   <li><a href="#"><input type="text" size="7" value="Search"></a></li>
</ul>   
 </div> 
</td></tr>
 </table>
<center><img src="images/Infinity.jpg" alt="dance image" width="30%"></center>
<table border=2 bordercolor="black" width="80%" align="center" bgcolor="white">
<tr>
<td width="50%"><h2><center><font style="Lucida Handwriting">New User</font></center></h2>
<center><font face="Helvetica" color="maroon" size=4><b>
<?php
$a=$_POST["f1"];
$b=$_POST["f2"];
$c=$_POST["f3"];
$d=$_POST["f4"];
$e=$_POST["f5"];
{
$servername='localhost';
$username='root';
$passwd='';
$dbname="Website";
// Create connection
$conn=mysqli_connect($servername, $username, $passwd, $dbname);
// Check connection
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO Dance (Name, EMail, City, Age, PhoneNumber) VALUES ('$a', '$b', '$c', '$d', '$e')"; 
if (mysqli_query($conn, $sql))
{
echo "Your Details have been entered successfully " . "<br>"; 
}
else 
{
echo "Error in entering your details. Please try again later.". $sql . "<br>" . mysqli_error($conn);
}	
mysqli_close($conn);
}
?>

Thank You  <font color="black"><?php $x=$_POST["f1"]; echo $x ; ?> for registering. Your account has been created!!!</font><br><br>

<br> 
NAME:<font color="black"> <?php $x=$_POST["f1"]; echo $x ; ?></font><br><br>
E-mail :<font color="black"> <?php echo $_POST["f2"]; ?></font><br><br>
City: <font color="black"><?php echo $_POST["f3"]; ?></font><br><br>
Age: <font color="black"><?php echo $_POST["f4"]; ?></font><br>
Phone Number:<font color="black"> <?php echo $_POST["f5"]; ?></font><br><br>

<br>
<br></b>
</font></center>
</td>
</tr>
</table>
<table width="80%" align="center" bgcolor="black">
<tr>
<td align="center"><h3><font color="white">Connect with Us</font></h3><br>
<img src="images/icon1.jpg">
<img src="images/icon2.jpg">
<img src="images/icon3.jpg">
<img src="images/icon4.jpg">
<img src="images/icon5.jpg"><br><br>
</td>
<td><img src="images/line.jpg"></td>
<td align="center"><font color="white"><h3>Join Us</h3><br />
<a href="joinus.html">Sign In</a><br>
<a href="merchandise.html">Merchandise</a><br>
<a href="feedback.html">Feedback</a><br>
</font></td>
<td><img src="images/line.jpg"></td>
<td align="center"><font color="white"><h3>Order Tickets</h3>
<br>Free Phone<br>
<h2>1800-123-456
</h2></font></td>
</tr>
</table>
<table width="80%" align="center"> 
<tr><td valign="top" bgcolor="#9966FF" align="center"><input type="button" value="+" onClick="return IncreaseSize();" /> Text Size <input type="button" value="-"  onclick="return DecreaseSize();"/>
<p id="p1" style="width:250px; font-size:medium"><b>
Established @ 1999 <br>
</b></p>
</td>
<td valign="top" bgcolor="#33CC66" align="center">
<div id="txt">Choose background color of your choice: </div> 
<Select id="Colorpic" onChange="ChangeColor();">
<option value="Red">Red</option>
<option value="yellow">Yellow</option>
<option value="Blue">Blue</option>
<option value="Green">Green</option>
</select>
</td>
</tr>
<tr><td align="center" colspan="2"  bgcolor="white"><b>Copyright &copy; Abhay Gupta </b>
</td>
</tr>

<tr><td align="center" bgcolor="black" colspan="2">
<div align='center'><font color="white">Visitor No.</font> <img src='http://www.hit-counts.com/counter.php?t=MTMzNjIzMw==' border='0' alt='Hit Counter'></div>
 
</td>
</tr>
<tr><td align="center" bgcolor="black" colspan="2">
<embed src="Kalimba.mp3" autostart="true" loop="true"  width="200" height="55"></embed>
</td>
</tr>



</table>


</div>
</body>
</html>
