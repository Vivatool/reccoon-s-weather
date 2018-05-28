
<?php require_once("header.php");?>

<form method='post' class='reg-form'>

		<div class='form-row'>
			<label for='form_fname'>First Name: </label>
    		<input type='text' id='form_fname' name='first_name'>
  		</div>
  		<div class='form-row'>
    		<label for='form_sname'>Second Name: </label>
    		<input type='text' id='form_sname' name='second_name'>
		</div>
		<div class='form-row'>
			<label for='form_email'>Email: </label>
			<input type='email' id='form_email' name='email'>
		</div>
		<div class='form-row'>
			<label for='form_phone'>Phone: </label>
			<input type='text' id='form_phone' name='phone'>
		</div>
		<div class="form-row">
			<input type="submit" value='Go'>
		</div>

	</form>


<?php require_once("footer.php");?>
