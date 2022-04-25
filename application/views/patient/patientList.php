<h2><?php echo $title; ?></h2>
<div class="container">
	<table>
		<thead>
			<th>ID</th>
			<th>Date de naissance</th>
			<th>Nom</th>
			<th>Prénom</th>
			<th>Mail</th>
			<th>Phone</th>
			<th></th>
			<th></th>
		</thead>
		<tbody>
			<?php foreach ($patient as $patient_item): ?>
			<tr>
				<td><?=$patient_item['id']; ?></td>
				<td><?=date('j/m/Y', strtotime($patient_item['birthdate']))?></td>
				<td><?=$patient_item['lastname']; ?></td>
				<td><?=$patient_item['firstname']; ?></td>
				<td><a href="mailto:<?=$patient_item['mail']?>"><?=$patient_item['mail']; ?></a></td>
				<td><a href="tel:<?=$patient_item['phone']?>"><?=$patient_item['phone']; ?></a></td>
				<td class="activeCase"><a href="<?=site_url('/patient/view/'.$patient_item['id']); ?>"> Plus
						d'informations </a></td>
				<td class="delete"><a href="">Supprimer le RDV</a> </td>
			</tr>

			<?php endforeach; ?>


		</tbody>
	</table>
</div>