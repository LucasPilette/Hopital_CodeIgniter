<div class="main">
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
	<div class="appointments">
	<table>
			<thead>
				<th>Date</th>
				<th>Heure</th>
				<th></th>
				<th></th>
			</thead>
			<tbody>
				<?php foreach ($appointments as $appointment_item) : ?>
					<tr>
						<td><?= date('j M Y', strtotime($appointment_item['dateHour'])) ?></td>
						<td><?= date('H:i', strtotime($appointment_item['dateHour'])) ?></td>
						<td class="activeCase"><a href="<?= site_url('/appointment/view/' . $appointment_item['id']); ?>"> Plus d'informations </a></td>
						<td class="delete"><a href="">Supprimer le RDV</a> </td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</div>

