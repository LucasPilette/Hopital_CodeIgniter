<div class="container" id="profile">
<h2>Profil de <?=$patient_item['firstname'].' '.$patient_item['lastname']?></h2>
	<div class="cardUser">
		<div class="textCard">
			<div>
				<p><span class="elemCard">Prénom : </span> <?=$patient_item['firstname']?></p>
			</div>
			<div>
				<p><span class="elemCard">Nom :</span> <?=$patient_item['lastname']?></p>
			</div>
			<div>
				<p><span class="elemCard">Date de naissance :
					</span><?=date('j M Y', strtotime($patient_item['birthdate']))?> </p>
			</div>
			<div>
				<p><span class="elemCard">Numéro de téléphone :</span><?=$patient_item['phone']?> </p>
			</div>
			<div>
				<p><span class="elemCard">Mail :</span><?=$patient_item['mail']?> </p>
			</div>
			<div class="modifyPatient"> <a href="/patient/modifyPatient?id=<?=$patient_item['id']?>">Modifier le profil</a></div>
		</div>
		<div class="pictureCard">
			<img src="<?=src_url('User-icon')?>" alt="">
		</div>
	</div>
	<a href="<?=site_url('/patient'); ?>">Retour à la liste de patients</a>
</div>
