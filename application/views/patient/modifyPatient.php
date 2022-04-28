
<div class="container">
	<div class="formDiv">
		<h2><?php echo $title; ?></h2>

		<?php echo form_open('patient/modifyPatient?id='.($_GET['id'])); ?>

		<div class="inputDiv">
			<label for="firstname">Prénom</label>
			<input type="text" name="firstname" value="<?=$patient_item['firstname']?>">
			<?php echo form_error('firstname'); ?>
		</div>
		<div class="inputDiv">
			<label for="lastname">Nom</label>
			<input type="text" name="lastname" value="<?=$patient_item['lastname']?>">
			<?php echo form_error('lastname'); ?>
		</div>
		<div class="inputDiv">
			<label for="birthdate">Date de naissance</label>
			<input type="date" name="birthdate" value="<?=$patient_item['birthdate']?>">
			<?php echo form_error('birthdate'); ?>
		</div>
		<div class="inputDiv">
			<label for="mail">Mail</label>
			<input type="text" name="mail" value="<?=$patient_item['mail']?>">
			<?php echo form_error('mail'); ?>
		</div>
		<div class="inputDiv">
			<label for="phone">Téléphone</label>
			<input type="text" name="phone" value="<?=$patient_item['phone']?>">
			<?php echo form_error('phone'); ?>
		</div>
		<div class="inputDiv">
			<input type="submit" name="submit" value="Modifier patient" class="submit"/>
		</div>
		</form>
	</div>
</div>