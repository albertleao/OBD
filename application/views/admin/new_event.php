<div class="grid_2">
	<? $this->load->view("/admin/side_bar"); ?>
</div>

<div class="grid_10">
	<?= form_open("admin/save_event"); ?>

		<h5>Event Name</h5>
		<p>
			Choose a title for you event.
		</p>
		<input type="text" name="name" size="30" id="event_name"/>

		<br /><br />
		
		<h5>Event Description</h5>
		<p>
			Choose a description for your event.
		</p>
		<textarea name="description" id="event_description"></textarea>

		<br /><br />

		<h5>Event Date</h5>

		<input type="text" name="date" id="datepicker" size="30"/>

		<br /><br />

		<input type="submit" value="Save Event" />

	</form>

</div>


<script type="text/javascript">
	$("#datepicker").datepicker();
</script>