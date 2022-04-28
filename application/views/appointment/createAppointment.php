<?php
$dataForm = array(
    'hour' => [
        '08' => '8',
        '09' => '9',
        '10' => '10',
        '11' => '11',
        '12' => '12',
        '13' => '13',
        '14' => '14',
        '15' => '15',
        '16' => '16',
        '17' => '17',
        '18' => '18',
        '19' => '19'
    ],
    'minutes' => [
        '00' => '00',
        '10' => '10',
        '20' => '20',
        '30' => '30',
        '40' => '40',
        '50' => '50',
    ]
    );
?>


<div class="container">
	<div class="formDiv">
		<h2><?php echo $title; ?></h2>
		<?php echo form_open('appointment/create'); ?>

		<div class="inputDiv">
			<label for="patient">Patient</label>
			<select name="patient" id="">
				<?php foreach($patient as $key => $value){?>
				<option value="<?=$value['id']?>"><?=$value['firstname'].' '.$value['lastname']?></option>
				<?php } ?>
				<?php echo form_error('patient'); ?>
			</select>
		</div>
		<div class="inputDiv">
			<label for="date">Date</label>
			<input type="date" name="date">
		</div>
		<div class="inputDiv">
			<label for="schedule">Heure </label>
			<?=form_dropdown('hour', $dataForm['hour'])?>
			<?=form_dropdown('minutes', $dataForm['minutes'])?>
		</div>
		<div class="inputDiv">
			<input type="submit" name="submit" value="Ajouter rendez-vous" class="submit" />
		</div>
		</form>
	</div>
</div>
