<!DOCTYPE HTML>
<html>
	<head>
		<title>xkcd password generator</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<?php require 'getWords.php'; ?>
		<?php require 'createPassword.php'; ?>
	</head>

	<body>
		<h1>Create an xkcd style password</h1>
		
		<div class="col-md-6" id="picture">
			<img src="images/comic.png" alt="XKCD's Password Strength Comic">
		</div>

		<div class="col-md-6">
			<div class="col-md-12" id="inputForm">
				<form role="form" action="index.php" method="post">
					<div class="col-md-6">
					<!-- Get the number of words for the password -->
						<div class="form-group">
							<label class="control-label">Number of words:</label>
							<div class="row">
								<div class="col-xs-4">
									<input type="number" class="form-control" value="4" name="numberOfWords" max="<?php echo count($masterWordList) ?>">
								</div>
								<span class="help-block">Max: <?php echo count($masterWordList); ?></span>
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
					</div>

					<div class="col-md-6">
						<!-- Ask about capitalization -->
						<div class="form-group">
							<label>Capitalization:</label><br>
							<div class="radio">
								<input type="radio" name="capitalization" value="allCaps">ALL CAPS<br>
								<input type="radio" name="capitalization" value="capFirstLetter" checked>Capitalize The First Letter Of Each Word<br>
								<input type="radio" name="capitalization" value="allLower">all lowercase<br>
							</div>
						</div>
					
						<button type="submit" class="btn btn-default">Submit</button>
					</div>
				</form>
			</div>

			<div class="col-md-12" id="showPassword">
				<h2>Your password is: <span id="password"><?php echo $password ?></span></h2>
			</div>
			
		</div>
	</body>
</html>