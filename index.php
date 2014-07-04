<!DOCTYPE HTML>
<html>
	<head>
		<title>xkcd password generator</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php require 'createpassword.php'; ?>
	</head>

	<body>
		<h1>Create an XKCD style password</h1>
		
		<div class="col-md-6" id="picture">
			<img src="images/comic.png" alt="XKCD's Password Strength Comic">
		</div>

		<div class="col-md-6">
			<div class="col-md-12" id="inputForm">
				
				<!-- Get the number of words for the password -->
				<form role="form" action="createPassword.php" method="post">
					<div class="form-group">
						<label class="control-label">Number of words:</label>
						<div class="row">
							<div class="col-xs-2">
								<input type="number" class="form-control" value="4" name="numberOfWords">
							</div>
						</div>
					</div>
					
					<!-- Ask if the password should have a number -->
					<div class="form-group">
						<label class="control-label"><input type="checkbox" name="useNumber" value="yes"> Add a number?</label>
					</div>

					<!-- Ask if the password should have a symbol -->
					<div class="form-group">
						<label class="control-label"><input type="checkbox" name="useSymbol" value="yes"> Add a symbol?</label>
					</div>

					<!-- Ask if the password should capitalize the first letter of each word -->
					<div class="form-group">
						<label class="control-label"><input type="checkbox" name="capitalize" value="yes"> Capitalize the first letter of each word?</label>
					</div>

					<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>

			<div class="col-md-12">
				<?php echo $password ?>
			</div>
			
		</div>
	</body>
</html>