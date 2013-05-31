<div class="grid_2">
	<? $this->load->view("/admin/side_bar"); ?>
</div>

<div class="grid_10">
	<h1>
		Events
	</h1>
	<table id="admin_events">
		<tr>
			<th>Event Title</th>
			<th>Event Description</th>
			<th>Event Date</th>
			<th></th>
		</tr>

		<? foreach($events->result() as $event) { ?>
			<tr>
				<td><?= $event->title ?></td>
				<td>
					<?= character_limiter($event->description, 20) ?>
				</td>
				<td><?= $event->date ?></td>
				<td><a href="/admin/event?id=<?= $event->id ?>">Edit This Event</a></td>
			</tr>

		<? } ?>
	</table>

</div>