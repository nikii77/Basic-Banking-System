<html>
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <style>
    hr{ boarder:2px solid white;}
   *{
   margin:0;
   padding:0;
 }
 body{
  
 
   background-image:url("img/ABC.jpg");
   background-size:1800px;
   background-repeat:no-repeat;

}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background: white;
}
div.main{
  width:400px;
  margin:50px auto 0px auto;
 }

h2{
   text-align:center;
   padding:20px;
   font-family:sans-serif;
}

div.register{
  background-color:grey;
  width:100%;
  font-size:18px;
  border-radius:10px;
  border:1px solid rgba(255,255,255,0.3);
  box-shadow:2px 2px 15px rgba(0,0,0,0.3);
  color:#fff;
}

form#register{
     margin:30px;
}


label{
 font-family:sans-serif;
 font-size:18px;
 font-style:italic;
}

input#name{
width:300px;
border:1px solid #ddd;
border-radius:3px;
outline:0;
padding:7px;
background-color:#fff;
box-shadow:inset 1px 1px 5px rgba(0,0,0,0.3);
}
button#sub{
 width:340px;
 padding:7px;
 font-size:16px;
 font-family:sans-serif;
 border-radius:25px;
 background-color:red;
 color:#fff;
 cursor:pointer;
 border:1px solid rgba(255,255,255,0.4);
 box-shadow:1px 1px 5px rgba(0,0,0,0.4);
 margin-bottom:20px;
 
}
#sub:hover{
 background-color:green;
}
</style>

</head>
<body>
<?php
  include 'navbar.php';
?>
<div class="main">
<div class="register">
   <h2>Customer</h2>
    <hr>
   <form id="register" method="POST" >
   
   <label>Name :</label><br>
   <input type="text" name="fname" id="name" placeholder="Enter name." >
   <br><br>
    <label>Mobile Number :</label><br>
   <input type="text" name="mobile" id="name" placeholder="Enter your mobile no." >
   <br><br>
   
   <label>Aadharcard Number :</label><br>
   <input type="text" name="aadhar" id="name" placeholder="Enter Aadharcard_no." >
   <br><br>
   
   

   <label>Email id:</label><br>
   <input type="text" name="email" id="name" placeholder="Enter your Email id" >
   <br><br>
   
   <label>Account No:</label><br>
   <input type="text" name="account" id="name" placeholder="Enter your account no.">
   <br><br>

   <label>balance:</label><br>
   <input type="text" name="bal" id="name" placeholder="Enter balance">
   <br><br>


   <button type="submit"  id="sub" name="Add">Add</button>    
     
   
</form>
</div>
</div>
<footer class="text-center mt-5 py-2">
       <br> <p>&copy 2021. Made by <b>Nikita gaikwad</b></p>
      </footer>
</body>
</html>

<?php
if(isset($_POST['Add'])){
$n1=$_POST["fname"];
$a1=$_POST["aadhar"];
$m1=$_POST["mobile"];
$e1=$_POST["email"];
$u1=$_POST["account"];
$p1=$_POST["bal"];
$servername = "localhost";
$name="root";
$pass="";
$dbname="bankd";
$conn=new mysqli($servername,$name,$pass,$dbname);
 if($conn->connect_error)
  {
	die("connection failed".$conn->connect_error);
   } 
 $sql2="insert into user(name,aadhar,mobile,email,accountno,balance) values('$n1','$a1','$m1','$e1','$u1','$p1')";
	if($conn->query($sql2)==TRUE)
     {
        echo '<script>alert("Insert successful")</script>';
        include("customer.php");
     }
 
 

}

?>
