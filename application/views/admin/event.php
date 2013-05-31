<div class="grid_2">
	<? $this->load->view("/admin/side_bar"); ?>
</div>

<div class="grid_10">
	<?= form_open("admin/save_event"); ?>

		<? if(@$event){ ?>

			<h5>Event Name</h5>
			<p>Choose a title for you event.</p>

			<input type="text" name="title" size="30" id="name" value="<?= $event->row()->title ?>"/>

			<br /><br />
			
			<h5>Event Description</h5>
			<p>
				Choose a description for your event.
			</p>
			<textarea name="description" id="description"><?= @$event->row()->description ?></textarea>

			<br /><br />

			<h5>Event Date</h5>

			<input type="text" name="date" id="datepicker" size="30" value="<?= $event->row()->date ?>" />

			<br /><br />

			<input type="hidden" name="current_event" value="<?= $event->row()->id ?>" />

			<input type="submit" value="Save Event" />

			
		<? } else { ?>
			
			<h5>Event Name</h5>
			<p>Choose a title for you event.</p>
			
			<input type="text" name="title" size="30" id="name" value=""/>

			<br /><br />
			
			<h5>Event Description</h5>
			<p>
				Choose a description for your event.
			</p>
			<textarea name="description" id="description"></textarea>

			<br /><br />

			<h5>Event Date</h5>

			<input type="text" name="date" id="datepicker" size="30"/>

			<br /><br />

			<input type="hidden" name="current_event" value="" />

			<input type="submit" value="Save Event" />

		<? }; ?>

	</form>

</div>


<script type="text/javascript">
	$("#datepicker").datepicker();
</script>