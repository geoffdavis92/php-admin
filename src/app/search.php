<?php include 'parts/header.php' ?>

<?php 
if ( sizeof($_GET) == 0 ) { ?>
	<form action="search.php" method="GET">
		<!-- label[for=NAME]+input[name=NAME type=TYPE] -->
		<label for="search">Search: </label>
		<input type="text" name="search">
		<br/>
		<input type="submit" value="submit">
	</form>
<?php } else { 
	get_files($_GET['search']);
} ?>

<?php include 'parts/footer.php' ?>