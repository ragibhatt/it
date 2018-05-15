<!DOCTYPE html>
<html>
<title>PMS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <link rel="stylesheet" href="css/style.css">

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="1.jpg" style="width:100%">
  <a href="index.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>

  <a href="contact.html" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>



<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <form action="login.php" method=POST>
    								<center><h2> Customer Details </h2></center>
    								<center><h4>---- All are Mandatory Fields----</h4></center>

    							 Name<input type="text" name="SName" required placeholder="FirstName MiddleName LastName">
    							 <br>
    							 Gender<input type="text" name="Gender" required placeholder="M / F / Other">
    							 <br>
    							 Date of Birth<input type="text" name="DOB" required placeholder="YYYY-MM-DD">
    							 <br>
    							 Blood Group<input type="text" name="BG" required placeholder="Blood Group (+ve / -ve)">
    							 <br>
    							 Mobile Number<input type="text" name="SMobile" required placeholder="XXXXXXXXXXX">
    							 <br>
    							 Email<input type="text" name="SEmail" required placeholder="abc@gmail.com">
    							 <br>
    							 Permanent Address<textarea rows="5" cols="50" name="PAddress" required placeholder="Enter Address here."></textarea>
    							 <br>

    							<p> <b> NOTE: </b>The registered mobile number will be the number used for communication. The applicant are expected to be available in this number all the time. In case of any change in number, it should be updated in person. </p>

    							<center><button type ="submit">Signup</button></center>


              </form>

            </div>

          </div><!-- tab-content -->

    </div> <!-- /form -->
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script  src="js/index.js"></script>
  </header>


</body>
</html>
