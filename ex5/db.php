<?php
session_start();


if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html'); 
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Group 8 Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css?family=Gothic+A1:300,600|Playfair+Display" rel="stylesheet">
</head>
<body>

	<section class="team">
		<div class="center">
			
		<h1><span class="typing"></span></h1>
			</div>

		<div class="team-content">
			<div class="box">
				
				<h3>IAN REYNOSO</h3>
				<h5>Leader</h5>
				<div class="icons">
					<a href="https://github.com/just-seb8"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/iaaaaanskie/"><i class="ri-facebook-box-fill"></i></a>
					
				</div>
			</div>

			<div class="box">
				
				<h3>PRINCESS JOY REMANDIMAN</h3>
				<h5>Member</h5>
				<div class="icons">
					<a href="https://github.com/Princess0613"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/profile.php?id=100009232409492"><i class="ri-facebook-box-fill"></i></a>
				
				</div>
			</div>

			<div class="box">
				
				<h3>ANGELICA RODRIGUEZ</h3>
				<h5>Member</h5>
				<div class="icons">
					<a href="https://github.com/angelicaarss"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/co0lasf"><i class="ri-facebook-box-fill"></i></a>
				
				</div>
			</div>

			<div class="box">
				
				<h3>MARIAH CHESKA BAUTISTA</h3>
				<h5>Member</h5>
				<div class="icons">
					<a href="https://github.com/cheskaa01"><i class="ri-github-fill"></i></a>
					<a href="https://www.facebook.com/mariahcheska.bautista"><i class="ri-facebook-box-fill"></i></a>
		
				</div>                  
			</div>
            <div class="box">
                
                <h3>JERICO FERNANDEZ</h3>
                <h5>Member</h5>
                <div class="icons">
                    <a href="https://github.com/JericoFernandez"><i class="ri-github-fill"></i></a>
                    <a href="https://www.facebook.com/eco.fernandez.75"><i class="ri-facebook-box-fill"></i></a>
               
                </div>
                </div>
		</div>
	</section>
	<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script>
		var typed = new Typed(".typing",
    {
        strings : ["HELLO, WE ARE GROUP 8", "WELCOME TO OUR WEBSITE"],
        typeSpeed : 150,
        backSpeed : 150,
        loop : true 
    });
	</script>

</body>
</html>