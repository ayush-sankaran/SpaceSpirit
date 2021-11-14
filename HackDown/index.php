<html>
<head>
	<meta charset="utf-8v">
	<meta name = "viewport" content = "width=device-width">
	<meta name = "description" content = "Affordable and professional web design">
	<meta name = "keywords" content = "web design, affordable web design, professional web design">
	<meta name = "author" content = "Brad Tavery">
	<title>Space Spirit | Home</title>
	<link rel = "stylesheet" href= "./css/style1.css"> 
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
	<header id = "toolbar">
		 <div class = "container">
		 	<div id = "branding">
		 		<h1 id = "logo"><a href = "index.php"><span class = "highlight"><img src = "img/newLogo.png"></a></span></h1>
		 	</div>
		 	<nav>
		 		<ul>
		 			<li class = "current"><a href = "index.php">Home</a></li>
		 			<li><a href = "about.php">Articles</a></li>
		 			<li><a href = "answers.php">Answers</a></li>
		 			<li><a href = "#contact" data-toggle = "modal">Form</a></li>
		 		</ul>
		 	</nav>
		 </div>
	</header>

	<section id = "showcase">
		<div class = "container">
			<h1>Explore A New Galaxy</h1>
			<p>Learn and answer questions about space.</p>
		</div>
	</section>

	<section id = "newsletter">
		<div class = "container">
			<h1>Subscribe to our Newsletter</h1>
			<form>
				<input type = "email" placeholder="Enter Email....">
				<button type = "submit" class = "button_1">Subscribe</button>
			</form>
		</div>
	</section>

	<section id = "boxes">
		<div class = "container">
			<div class = "box">
				<img src = "./img/nasaRocket.png">
				<h3><a href = "about.php">"NASA's Last Rocket"</a></h3>
				<p>Eleven years in the making, the most powerful NASA-built rocket since the Apollo program at last stands upright. Framed by the industrial test platform to which it is mounted...</p>
			</div>
			<div class = "box">
				<img src = "./img/star.png">
				<h3><a href = "about.php">"Alpha Centauri: Closest Star to Earth"</a></h3>
				<p>The closest star to Earth is a triple-star system called Alpha Centauri.
					The two main stars are Alpha Centauri A and Alpha Centauri B...</p>
			</div>
			<div class = "box">
				<img src = "./img/moonFrag.png">
				<h3><a href = "about.php">"A Fragment of Our Moon May be Orbiting the Sun with Earth"</a></h3>
				<p>A small piece of the moon may be orbiting the sun alongside Earth. This object, called Kamo‘oalewa, has an unexpected composition that hints it may have been chipped off the moon and tossed into orbit.</p>
			</div>
		</div>
	</section>

	<footer>
		<p>Tejas, Praneeth, Rishvik, Ayush, Copyright &copy;2021</p>
	</footer>

	<div class = "modal fade" id = "contact" role = "dialog">
            <div class = "modal-dialog">
                  <div class = "modal-content">
                     <form class = "form-horizontal">
                        <div class = "modal-header">
                           <h4>Submit An Inquiry</h4>
                        </div>
                        <div class = "modal-body">
                           <div class = "form-group">
                              <label for = "contact-name" class = "col-lg-2 control-label">Name:</label>
                              <div class = "col-lg-10">
                                 <input type = "text" name = "name" class = "form-control" id = "contact-name" placeholder = "Full Name">
                              </div>
                           </div>
                        <div class = "form-group">
                              <label for = "contact-email" name = "tag" class = "col-lg-2 control-label">Topic:</label>
    								<select id="country" >
      								<option value="#general">General</option>
      								<option value="#articles">Articles</option>
      								<option value="#planets">Planets</option>
      								<option value = "#launches">Launches</option>
      								<option value = "#stars">Stars</option>
    								</select>
                           </div>
                        <div class = "form-group">
                              <label for = "contact-message" class = "col-lg-2 control-label">Question:</label>
                              <div class = "col-lg-10">
                                 <textarea class = "form-control" name = "question" rows = "8" maxlength = "250" id = "question" placeholder = "Limit of 500 characters"></textarea>
                              </div>
                           </div>
                        </div>
                        <div class = "modal-footer">
                           <a class = "btn btn-default" data-dismiss = "modal">Close</a>
                           <button class = "btn btn-primary" type = "submit">Send</button>                   
                        </div>
                  </form>
                  </div>
            </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script type = "text/javascript" src = "answers.js"></script>
  <php?
    $name = $_POST["name"];
    $tag = $_POST["tag"];
    $question = $_POST["question"];
    $command = escapeshellcmd("python getQuestion.py 3");
    $output = shell_exec($command);
    echo $output;
  ?>
</body>
</html>