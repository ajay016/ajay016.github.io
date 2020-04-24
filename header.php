<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">

			<ul>
				<li class="<?php if($page=='home'){echo 'active';}?>"><a href="index.php">Airbnb</a></li>
				<li class="<?php if($page=='packages'){echo 'active';}?>"><a href="packages.php">Host a place</a></li>
				<li class="<?php if($page=='admin'){echo 'active';}?>"><a href="adminlogin.php">Help</a></li>
			</ul>

			<div class="nav-login">
				
				<?php
                    if (isset($_SESSION['u_id'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
					<button type="submit" name="submit">Logout</button>
				    </form>';
                    } else {
                    echo '<form action="includes/login.inc.php" method="POST">
					<input type="text" name="uid" placeholder="Username/e-mail">
					<input type="password" name="pwd" placeholder="password">
					<button type="submit" name="submit">Login</button>
				    </form>
				    <a href="signup.php"><button>Sign up</button></a>';                    
                    }
				?>

			</div>

		</div>
		<div class="reviews">
			<p>Reviews</p>
			<div class="row">
				<div class="column">
					<div class="card">
						<img src="images/card1.png" alt="Card1" style="width:100%; border-radius: 2em">
						<div class="container">
						   <h4><b>John Doe</b></h4>
						   <p>Architect & Engineer</p>
						</div>
					</div>
				</div>
				<div class="column">
					<div class="card">
						<img src="images/card1.png" alt="Card1" style="width:100%; border-radius: 2em">
						<div class="container">
						   <h4><b>John Doe</b></h4>
						   <p>Architect & Engineer</p>
						</div>
					</div>
				</div>

			  <div class="column">
					<div class="card">
					   <img src="images/card1.png" alt="Card1" style="width:100%; border-radius: 2em">
					   <div class="container">
					      <h4><b>John Doe</b></h4>
					      <p>Architect & Engineer</p>
					   </div>
					</div>
			  </div>
			
			</div>
		</div>
	</nav>
</header>
