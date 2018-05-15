<!DOCTYPE html>
<html>
	<head>
		<title>Signup</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="icon fa-book"></span>
						</div>
						<div class="content">
							<div class="inner">
<?php
if
(
!empty($_POST['SName'])
&& !empty($_POST['Gender'])
&& !empty($_POST['DOB'])
&& !empty($_POST['BG'])
&& !empty($_POST['SMobile'])
&& !empty($_POST['SEmail'])
&& !empty($_POST['SPassword'])
&& !empty($_POST['PAddress'])
&& !empty($_POST['Vendor'])
&& !empty($_POST['Customer'])

)

{
$SName = $_POST['SName'];
$Gender = $_POST['Gender'];
$DOB = $_POST['DOB'];
$BG = $_POST['BG'];
$SMobile = $_POST['SMobile'];
$SEmail = $_POST['SEmail'];
$SPassword = $_POST['SPassword'];
$PAddress = $_POST['PAddress'];
$Vendor = $_POST['Vendor'];
$Customer = $_POST['Customer'];

include 'conn.php'; // DB Connection
 //Insert to Mysqli Query


 $result = mysqli_query($dbc,"INSERT INTO signup (name,gender,dob,bloodgroup,mob,email,password,perm_add)
  VALUES('$SName','$Gender','$DOB','$BG','$SMobile','$SEmail','$SPassword','$PAddress')") or die("Could not query database");

  if($result)
    {
    echo "<h3>Your info is stored</h3>";
    }
 else
  {
    echo "Failure!";
  }
 }
 else
 {
 echo "<h3> Enter all fields </h3>";
 }
?>
</div>
	</div>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>

    </ul>
  </nav>
</header>
<br>
<br>
</div>

<!-- BG -->
<div id="bg"></div>
<!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>

</body>
</html>
