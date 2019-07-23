<!DOCTYPE html>
<html>
<style>
* {
    box-sizing: border-box;
}
.container {
    position: relative;
}

.center {
    position: absolute;
    top: -9%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 80px;
}

img { 
    width: 100%;
    height: auto;
    opacity: 0.5;
}


body 
{
    margin: 0;
}



.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
}



.sidenav a {
    color: white;
    padding: 16px;
    text-decoration: none;
    display: block;
}

.sidenav a:hover {
    background-color: #ddd;
    color: black;
}


.content {
    margin-left: 200px;
    padding-left: 20px;
}
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 10%;
    border-radius: 10%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block; 
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<script type="text/javascript">
function validate()
{
strValidate=strForm.usn.value.search(/1BM16CS[0-9]{3}/i);
if(strValidate== -1)
{
alert("USN is not Valid");
}

}
function validate1(){
strValidate1=strForm.phone.value.search(/[0-9]{10}/);
if(strValidate1== -1)
{
alert("Phone Number is not Valid");
}

}
function validate2(){
strValidate2=strForm.pass.value.search(/\w{8}/);
if(strValidate2== -1)
{
alert("PASSWORD should be of minimum 8 charecters");
}

}



</script>

<body>

<h1><pre>                                                REGISTRATION </pre></h1>
<div class="sidenav">
 <div class="sidenav">
<a href="home.php">HOME</a>
  <a href="register.php">REGISTER</a>
  <a href="faculty.php">FACULTY LOGIN</a>
  <a href="student.php"> STUDENT LOGIN</a>
  <a href="about.php">ABOUT US</a>
  
</div>
  
</div>

<form action="reg.php" method="POST" class="content"  name="strForm" >
  <div class="imgcontainer">
    <img src="boss-512.png"  alt="Avatar" class="avatar">
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <label><b>NAME</b></label>
    <input type="text" placeholder="Enter NAME" name="name" required>

	  <label><b>USN</b></label>
    <input type="text" placeholder="Enter USN" name="usn" maxlength=10  onblur="validate();" required >
	  <label><b>SEMESTER</b></label>
    <input type="text" placeholder="Enter SEMESTER" name="sem" required>
	  <label><b>MOBILE NUMBER</b></label>
    <input type="text" placeholder="Enter NUMBER" name="phone"  maxlength=10  onblur="validate1();" required >
	  <label><b>EMAIL-ID</b></label>
    <input type="text" placeholder="Enter EMAIL" name="email" required>
	 <label><b>USER NAME</b></label>
    <input type="text" placeholder="Enter USER NAME" name="user" required>

    <label><b>PASSWORD</b></label>
    <input type="password" placeholder="Enter PASSWORD" name="pass" required onblur="validate2();">
        
    <button type="submit" name="submit">REGISTER</button>
    
  </div>

  
</form>

</body>
</html>
