<h2><?php echo $title; ?></h2>
<a href="/appointment/create">Ajouter un rendez-vous</a>
<div class="container">
	<table>
		<thead>
			<th>Patient</th>
			<th>Date</th>
			<th>Heure</th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php foreach ($appointment as $appointment_item) : ?>
				<tr>
					<td><?= $patient[$appointment_item['idPatients']]['firstname'] . ' ' . $patient[$appointment_item['idPatients']]['lastname'] ?></td>
					<td><?= date('j M Y', strtotime($appointment_item['dateHour'])) ?></td>
					<td><?= date('H:i', strtotime($appointment_item['dateHour'])) ?></td>
					<td class="activeCase"><a href="<?= site_url('/appointment/view/' . $appointment_item['id']); ?>"> Plus d'informations </a></td>
					<td class="delete"><a href="">Supprimer le RDV</a> </td>
				</tr>

			<?php endforeach; ?>
		</tbody>
	</table>
</div>