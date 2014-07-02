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
				<form role="form">
					<div class="form-group">
						<label for="numberOfWordsField" class="control-label">Number of words:</label>
						<div class="row">
							<div class="col-xs-2">
								<input type="number" class="form-control" value="4" id="numberOfWordsField">
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<label for="useNumberField" class="control-label"><input type="checkbox"> Add a number?</label>
					</div>

					<div class="form-group">
						<label for="useSymbolField" class="control-label"><input type="checkbox"> Add a symbol?</label>
					</div>

					<div class="form-group">
						<label for="capitalizeField" class="control-label"><input type="checkbox"> Capitalize the first letter of words?</label>
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