<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Product View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    * {
  box-sizing: border-box;
}
body{
    background-color: white;
}
.top-container {text-align:left;
  background-color: #f1f1f1;
  padding: 30px;
  text-align:left;
  background-color:rgb(134, 70, 126);
  height:110px;
  color:white;
}
.top-container button{
  float:right;
  width:60px;
  height:50px;
  margin:0;
}


.card{
  height:200px;
  width:90%;
}


.column {
  float: left;
  
  width:90%;
  height:auto; /* Should be removed. Only for demonstration */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
.column3{
    float: left;
  width: 50%;
  height:auto;
 
}
/* Clear floats after the columns */

.footer {
  position: fixed;
  float:left;
  width: 25%;
  background-color: red;
  color: white;
  text-align: center;
}


input[type=text][type=date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;
  margin-left:10px;
}

input[type=submit]:hover {
  background-color: #45a049;
  
}

.container {
  border-radius: 5px;
  background-color: #fff;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 40%;
    margin-top: 0;
  }

}
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=text] {
    width: 100%;
    margin-top: 0;
  }
  
}
/* Create four equal columns that floats next to each other */
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card1 {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
    height:400px;
    width:100%;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}
.profile{
  width:100%;
  height:450px;
  background-color:white;
}
.proimg{
  width:200px;
  border-radius:50%;
  margin-top:20px;
}
.wallet{
  width:400px;
  height:150px;
  background-color:white;

}
.wallet button{
  margin-left:10px;
  height:40px;
  width:80px;
  border-radius:20px;
}
.money{height:300px;
  display:none;
  background-color:white;
}
@media screen and (max-width: 600px) {
  .profile{
  width:100%;
  height:450px;
  background-color:white;
  
}
h1{
  font-size:40px;
}
h3{
  font-size:20px;
}
.proimg{
  width:200px;
  border-radius:50%;
  margin-top:20px;
}
.wallet{
  width:100%;
  height:150px;
  background-color:white;
}
}
input[type=text],[type=password],[type=email]{
  width: 20%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 
  resize: vertical;
}

input[type=submit]{
  width:100px;margin-left:20px;
}

input[type=submit]:hover {
  background-color: #45a049;

}
@media screen and (max-width: 600px){
  input[type=text],[type=password],[type=email]{
  width: 80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
 
  resize: vertical;
}
}
.edite{
  background-color:blue;
  color:white;
}
.offcanvas-body button{
   background-color:white;
   width:100%;
   height:40px;
   text-align:left;
}
    </style>
</head>
<body>
<div class="top-container">
  <h3>Mini Bazar.com <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
 <!--- &#9776;-->
 <center><img src="shop.JPEG" style="width:30px;border-radius:50%;"></center>
  </button></h3>
 
</div><br>
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title"><strong>dhirennaidu17@gmail.com</strong></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
  <button style="background-color:rgb(134, 70, 126);color:white;"><i class="fa fa-user" style="font-size:20px;"></i>Profile.</button><br><br>
    <button><i class="fa fa-plus-square" style="font-size:20px;"></i>Upload Store.</button><br><br>
    <button><i class="fa fa-dashboard" style="font-size:20px;"></i>Dash Bord.</button><br><br>
    <button><i class="fa fa-clipboard" style="font-size:20px;"></i>Your Order's</button><br><br>
    <button><i class="fa fa-shopping-cart" style="font-size:20px;"></i>Cart</button><br><br>
    <button><i class="fa fa-bell"style="font-size:20px;"></i>Notification</button><br><br>
    <button class="btn btn-secondary" type="button">Log out</button>
  </div>
  </div>
</div>
<!---------------Profile------------------------------->
<div class="profile">
 <center>
  <img src="shop.JPEG" class="proimg">
</center>
<center><h3><strong>dhirennaidu17@gmail.com</strong></h3></center>
<center><h4><strong>Your ID:</strong>767876</h4></center>
<center>
<div class="wallet">  
<p><h2>Wallet</h2><h1 style="color:green;"><strong><i class="fa fa-rupee"></i>50505</strong></h1></p>
<p><button type="button" onclick="Add()">Add</button><button type="button" onclick="Send()">Send</button><button type="button" onclick="Withdraw1()">Withdraw</button></p>
</div>
</center>
</div><br>
<div class="money" id="money1">
   
  <form method="post">
  <h2 style="color:blue"><strong>One Time Verification........</strong></h2>
    <label for="fname" id="l1"></label>
    <input type="email" id="fname" name="firstname" placeholder="Enter Your Email"><br>
<br>
    <label for="lname" id="l2"></label>
    <input type="text" id="lname" name="lastname" placeholder="Enter Your ID">

<br><br>
    <label for="subject" id="l3"></label>
    <input type="password" id="lname" name="lastname" placeholder="Enter Your Password"><br>

  <center><p><input type="submit" value="Continue"> <button type="button" onclick="close1()" style="float:left;width:100px;color:white;background-color:blue;height:44px;border-radius:6px;margin-left:10px;">Cancel</button></p><center>
  </form>

</div>
<div class="money" id="money2">

   
   <form method="post" id="sendmony1">
   <h2 style="color:blue"><strong>One Time Verification........</strong></h2>
     <label for="fname" id="l1"></label>
     <input type="email" id="fname" name="firstname" placeholder="Enter Your Email"><br>
 <br>
     <label for="lname" id="l2"></label>
     <input type="text" id="lname" name="lastname" placeholder="Enter Your ID">
 
 <br><br>
     <label for="subject" id="l3"></label>
     <input type="password" id="lname" name="lastname" placeholder="Enter Your Password"><br>
 
   <center><p><input type="submit" value="Continue"> <button type="button" onclick="close1()" style="float:left;width:100px;color:white;background-color:blue;height:44px;border-radius:6px;margin-left:10px;">Cancel</button></p><center>
   </form>
 
</div>
<div class="money" id="money3">
  <div id="withdraw">
  <form method="post">
   <h2 style="color:blue"><strong>One Time Verification........</strong></h2>
     <label for="fname" id="l1"></label>
     <input type="email" id="fname" name="firstname" placeholder="Enter Your Email"><br>
 <br>
     <label for="lname" id="l2"></label>
     <input type="text" id="lname" name="lastname" placeholder="Enter Your ID">
 
 <br><br>
     <label for="subject" id="l3"></label>
     <input type="password" id="lname" name="lastname" placeholder="Enter Your Password"><br>
 
   <center><p><input type="submit" value="Continue"> <button type="button" onclick="close1()" style="float:left;width:100px;color:white;background-color:blue;height:44px;border-radius:6px;margin-left:10px;">Cancel</button></p><center>
   </form>
  </div>


</div>
<!----------------------------------------------------->
<div class="container">
    <div class="row">
      <div class="col-25">
        <label for="fname"><strong>Full Name</strong></label>
      </div>
      <div class="col-75" id="edite"><br>
      Dhiren Naidu<button type="button" style="float:right;" onclick="edit()" class="edite">Edit<i class="fa fa-pencil"></i></button>
      </div>
      <div class="col-75" style="display:none;" id="edite1">
      <form method="post" action="Profile.php">
     <p> <input type="text" id="inputPassword6" style="width:100%;" class="form-control" aria-describedby="passwordHelpInline" ><br>
      <input type="submit" style="background-color:blue;color:white;"> <input type="submit" value="Cancel" ></P>
</form>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><strong>Date Of birth(DOB)</strong></label>
      </div>
      <div class="col-75" id="edite12"><br>
       20/10/2023<button style="float:right;" onclick="edit1()" class="edite">Edit<i class="fa fa-pencil"></i></button>
      </div>
      <div class="col-75" style="display:none;" id="edite2">
      <form method="post" action="Profile.php">
      <p> <input type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" ><br>
      <input type="submit" style="background-color:blue;color:white;"> <input type="submit" value="Cancel" ></P>
</form>  
    </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><h5><strong>Gender</strong></h5></label>
      </div>
      <div class="col-75" id="edite33"><br>
      xxxxx46546<button style="float:right;" onclick="editmob1()" class="edite">Edit<i class="fa fa-pencil"></i></button>
      </div>
      <div class="col-75" style="display:none;" id="edite3">
      <form method="post" action="Profile.php">
      <p> <select type="date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" >

      <option>Male</option>
      <option>Female</option>
      <option>Other</option>
      </select><br>
      <input type="submit" style="background-color:blue;color:white;"> <input type="submit" value="Cancel" ></P>
</form>  
    </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname"><strong>Mobile No</strong></label>
      </div>
      <div class="col-75" id="edite44"><br>
       8658135266<button style="float:right;" onclick="editcon()" class="edite">Edit<i class="fa fa-pencil"></i></button>
      </div>
      <div class="col-75" style="display:none;" id="edite4">
      <form method="post" action="Profile.php">
      <p> <input type="text" id="inputPassword6" style="width:100%;" class="form-control" aria-describedby="passwordHelpInline" ><br>
      <input type="submit" style="background-color:blue;color:white;"> <input type="submit" value="Cancel" ></P>
</form>  
    </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><strong>Addar No</strong></label>
      </div>
      <div class="col-75" id="edite55"><br>
       XXXXXXXXXX809<button style="float:right;" onclick="editadd()" class="edite">Edit<i class="fa fa-pencil"></i></button>
      </div>
      <div class="col-75" style="display:none;" id="edite5">
      <form method="post" action="Profile.php">
      <p> <input type="text" id="inputPassword6" style="width:100%;" class="form-control" aria-describedby="passwordHelpInline" ><br>
      <input type="submit" style="background-color:blue;color:white;"> <input type="submit" value="Cancel" ></P>
</form>  
    </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname"><strong>Address</strong></label>
      </div>
      <div class="col-75" id="edite66"><br>
       Suryanarayna pur,761003,Gnjam<button style="float:right;" onclick="editloc()" class="edite">Edit<i class="fa fa-pencil"></i></button>
      </div>
      <div class="col-75" style="display:none;" id="edite6">
      <form method="post" action="Profile.php">
      <p> <input type="textarea" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" ><br>
      <input type="submit" style="background-color:blue;color:white;"> <input type="submit" value="Cancel" ></P>
</form>  
    </div>
    </div>
</div>
    
         
<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2023 Copyright:
    <a href="/"> Mini Bazar.com</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
<script>
  function edit()
{
  var v=document.getElementById('edite');
  var h=document.getElementById('edite1');
  v.style.display="none";
  h.style.display="block";
}
function edit1()
{
  var v=document.getElementById('edite12');
  var h=document.getElementById('edite2');
  v.style.display="none";
  h.style.display="block";
}
function editmob1(){
  var v=document.getElementById('edite33');
  var h=document.getElementById('edite3');
  v.style.display="none";
  h.style.display="block";
}
function editcon(){
  var v=document.getElementById('edite44');
  var h=document.getElementById('edite4');
  v.style.display="none";
  h.style.display="block";
}
function editadd(){
  var v=document.getElementById('edite55');
  var h=document.getElementById('edite5');
  v.style.display="none";
  h.style.display="block";
}
function editloc(){
  var v=document.getElementById('edite66');
  var h=document.getElementById('edite6');
  v.style.display="none";
  h.style.display="block";
}
function Add(){
  var v1=document.getElementById('money1');
  var v3=document.getElementById('money2');
  var v4=document.getElementById('money3');
  v1.style.display="block";
  v3.style.display="none";
  v4.style.display="none";
}
function Send(){
  var v1=document.getElementById('money1');
  var v2=document.getElementById('money2');
  var v3=document.getElementById('money3');
  v1.style.display="none";
  v3.style.display="none";
  v2.style.display="block";
  v4.style.display="none";
}
function Withdraw1(){
  var v1=document.getElementById('money1');
  var v3=document.getElementById('money2');
  var v4=document.getElementById('money3');
  v1.style.display="none";
  v3.style.display="none";

  v4.style.display="block";
}
function close1(){
  var v1=document.getElementById('money1');
  var v2=document.getElementById('money2');
  var v3=document.getElementById('money3');
  v1.style.display="none";
  v2.style.display="none";
  v3.style.display="none";
}
</script>
</html>
