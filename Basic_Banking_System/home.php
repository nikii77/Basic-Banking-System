<html>
<head>
<title>Banking system</title>


<style>
h1{
  color:purple;
  font-size:45px;
}
body{
   background-image:url("img/ABC.jpg");
   background-size:1600px;
   background-repeat:no-repeat;
}

button#subs{
 width:140px;
 height=150px;
 padding:7px;
 font-size:16px;
 font-family:sans-serif;
 border-radius:3px;
 background-color:rgba(250,100,0,0.8);
 color:#fff;
 cursor:pointer;
 border-radius:25px;
 box-shadow:1px 1px 5px rgba(0,0,0,0.3);
 margin-bottom:20px;
 margin-right:50px;
}
button#subs:hover{
 background-color:green;
}
</style>
</head>
<body>
   <div>
    <marquee><h1>Welcome to Maharashtra Bank</h1></marquee>
     <center><a href="customer.php"><button type="button" id="subs" name="Customer">Customer add</button></a>
     <a href="viewuser.php"><button type="button" id="subs" name="Customer">View Customer</button></a>
     <a href="trans.php"><button type="button" id="subs" name="Customer">Transcation</button></a>
     <a href="history.php"><button type="button" id="subs" name="Customer">History</button></a>
     </center>
      <footer class="text-center mt-5 py-2">
        <br><br><center><p>&copy 2021. Made by <b>Nikita Gaikwad</b></p></center>
      </footer>     
</body>
<html>