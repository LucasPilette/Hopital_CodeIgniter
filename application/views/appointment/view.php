

<div class="container" id="profile">


<h2>Rendez-vous de <?=$patient['firstname'].' '.$patient['lastname']?></h2>
	<div class="cardUser">
		<div class="textCard">
			<div>
				<p><span class="elemCard">Patient : </span> <?=$patient['firstname'].' '.$patient['lastname']?></p>
			</div>
			<div>
				<p><span class="elemCard">Date</span> <?=date('j M Y', strtotime($appointment_item['dateHour']))?></p>
			</div>
			<div>
				<p><span class="elemCard">Heure
					</span><?=date('H:i', strtotime($appointment_item['dateHour']))?> </p>
			</div>
			<div class="modifyappointment"> <a href="/appointment/modifyAppointment?id=<?=$appointment_item['id']?>">Modifier le rendez-vous</a></div>
		</div>
	</div>
	<a href="<?=site_url('/appointment'); ?>">Retour à la liste de rendez-vous</a>
</div>