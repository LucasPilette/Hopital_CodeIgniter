<div class="container">
	<div class="formDiv">
		<h2><?php echo $title; ?></h2>

		<?php echo validation_errors(); ?>

		<?php echo form_open('patient/create'); ?>

		<div class="inputDiv">
			<label for="firstname">Nom</label>
			<input type="text" name="firstname" />
		</div>
		<div class="inputDiv">
			<label for="lastname">Prénom</label>
			<input type="text" name="lastname">
		</div>
		<div class="inputDiv">
			<label for="birthdate">Date de naissance</label>
			<input type="date" name="birthdate">
		</div>
		<div class="inputDiv">
			<label for="mail">Mail</label>
			<input type="text" name="mail">
		</div>
		<div class="inputDiv">
			<label for="phone">Téléphone</label>
			<input type="text" name="phone">
		</div>
		<div class="inputDiv">
			<input type="submit" name="submit" value="Ajouter patient" class="submit"/>
		</div>
		</form>
	</div>
</div>
