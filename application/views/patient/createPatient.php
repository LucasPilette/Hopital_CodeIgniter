<div class="container">
	<div class="formDiv">
		<h2><?php echo $title; ?></h2>

		<?php echo form_open('patient/create'); ?>

		<div class="inputDiv">
			<label for="firstname">Prénom</label>
			<input type="text" name="firstname" value=<?=set_value('firstname')?>>
			<?php echo form_error('firstname'); ?>
		</div>
		<div class="inputDiv">
			<label for="lastname">Nom</label>
			<input type="text" name="lastname" value=<?=set_value('lastname')?>>
			<?php echo form_error('lastname'); ?>
		</div>
		<div class="inputDiv">
			<label for="birthdate">Date de naissance</label>
			<input type="date" name="birthdate" value=<?=set_value('birthdate')?>>
			<?php echo form_error('birthdate'); ?>
		</div>
		<div class="inputDiv">
			<label for="mail">Mail</label>
			<input type="text" name="mail" value=<?=set_value('mail')?>>
			<?php echo form_error('mail'); ?>
		</div>
		<div class="inputDiv">
			<label for="phone">Téléphone</label>
			<input type="text" name="phone" value=<?=set_value('phone')?>>
			<?php echo form_error('phone'); ?>
		</div>
		<div class="inputDiv">
			<input type="submit" name="submit" value="Ajouter patient" class="submit"/>
		</div>
		</form>
	</div>
</div>
