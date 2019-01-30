<?php


include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>

      <link href="http://fonts.googleapis.com/css?family=Jura" rel="stylesheet" type="text/css" />
	  <link href='http://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style1.css" />
		
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.slidertron-0.3.1.js"></script>
		<script type="text/javascript" src="js/jquery.treeonic-0.2.js"></script>
		<script type="text/javascript" src="js/jquery.poptrox-0.1.js"></script>
		<script type="text/javascript" src="js/init.js"></script>
</head>
<body>
<div id="outer">
<div id="header" align="right">
<p><b>Welcome</b> <?php echo $_SESSION['username']; ?>!</p>
<div id="button"><h3><a href="logout.php">Logout</a></h3></div>
</div>
<div class="contact_logo" align="center">
		<a href="../index.html"><img src="logo2.png" alt=""/></a>
   </div>


			<div class="contact-form">
					<b>
					  <h2><b><p>Please tell us about your product</p></b></h2>
				  	        <b><form method="post" action="contact-post.html">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
								<p><label>Address: </label>
								<input type="text" placeholder="Enter Address" name="address" required></p>
								<p><label>Contact: </label>
								<input type="text" placeholder="Enter Contact Number" name="address" required></p>
						        
								<p>Please Select of your Catagory of product:
								<select>
								<option value="cloths">Cloths</option>
								<option value="electronics">Electronics</option>
								<option value="accessories">Accessories</option>
								<option value="furnitures">Furnitures</option>
								<option value="books">Books</option>
								<option value="others">Others</option>
								</select>
						        <p class="comment-form-author"><label for="author"><b>Product detail:</b><br></label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter your product detail</textarea>
						        </p>
								<p>Upload photo of your product:<b></p><input type="file" name="pic" accept="image/*"></p>
								<p>How many days you have used it:<b>
								<select>
								<option value="one week">One Week</option>
								<option value="one month">One Month</option>
								<option value="one Year">One Year</option>
								<option value="greater than one year">Greater than One Year</option>
								<option value="Other">Other</option>
								</select></p>
								<p>Do you return it? <br><input type="radio" name="gender" value="yes" checked> Yes<br>
  <input type="radio" name="gender" value="no"> No<br>  
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form></b>
				       </div>
					   <div class="contact-form2">
					<b>
					  <h2><b><p>Please tell us about your necessary product</p></b></h2>
				  	        <b><form method="post" action="contact-post.html">
					    	    <p class="comment-form-author"><label for="author">Your Name:</label>
					    	    	<input type="text" class="textbox" value="Enter your name here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your name here...';}">
						    	</p>
								<p><label>Address: </label>
								<input type="text" placeholder="Enter Address" name="address" required></p>
								<p><label>Contact: </label>
								<input type="text" placeholder="Enter Contact Number" name="address" required></p>
						        
								<p>Please Select of the Catagory of your necessary product:
								<select>
								<option value="cloths">Cloths</option>
								<option value="electronics">Electronics</option>
								<option value="accessories">Accessories</option>
								<option value="furnitures">Furnitures</option>
								<option value="books">Books</option>
								<option value="others">Others</option>
								</select>
						        <p class="comment-form-author"><label for="author"><b>Product detail:<br></b></label>
						    	  <textarea value="Enter your message here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Enter the product detail that you need:</textarea>
						        </p>
								<p>How many old product you will exchange? :<b>
								<select>
								<option value="one week">One Week</option>
								<option value="one month">One Month</option>
								<option value="one Year">One Year</option>
								<option value="greater than one year">Greater than One Year</option>
								<option value="Other">Other</option>
								</select></p>
								<p>Do you return it? <br><input type="radio" name="gender" value="yes" checked> Yes<br>
  <input type="radio" name="gender" value="no"> No<br>  
						        <input name="submit" type="submit" id="submit" value="Submit">
					        </form></b>
				       </div>

			<div id="copyright" align="center">
			<a><b>&copy;All credits deserved CatLab</b></a>.
		</div>
	
</div>



</body>
</html>
