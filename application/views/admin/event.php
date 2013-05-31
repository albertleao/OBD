<div class="grid_2">
	<? $this->load->view("/admin/side_bar"); ?>
</div>

<div class="grid_10">

	<?
		$params = array("id" => "event_form");
		echo form_open("admin/save_event", $params);
	?>

		<? if(@$event){ ?>

			<h5>Event Name</h5>
			<p>Choose a title for you event.</p>

			<input type="text" name="title" size="50" id="name" value="<?= $event->row()->title ?>"/>

			<br /><br />
			
			<h5>Event Description</h5>
			<p>
				Choose a description for your event. This is what will be displayed to the visitor. You must use HTML formatting if you wish to format the post.
				The title of the event should always be surrounded by the <xmp><h1></h1></xmp> header tag. Sub headers must be surrounded by the <xmp><h2></h2></xmp> header tag. Every paragraph must be surrounded by the <xmp><p></p></xmp> paragraph tag.
			</p>
			<textarea name="description" id="description"><?= @$event->row()->description ?></textarea>

			<br /><br />

			<h5>Event Date (Event will hide after event date)</h5>

			<input type="text" name="date" id="datepicker" size="30" value="<?= $event->row()->date ?>" />

			<br /><br />

			<input type="hidden" name="current_event" value="<?= $event->row()->id ?>" />

			<input type="submit" value="Save Event" />

			<button>
				<a href="/admin/delete_event?id=<?= $event->row()->id ?>">Delete Event</a>
			</button>
			
		<? } else { ?>
			
			<h5>Event Name</h5>
			<p>Choose a title for you event.</p>
			
			<input type="text" name="title" size="50" id="name" value=""/>

			<br /><br />
			
			<h5>Event Description</h5>
			<p>
				Choose a description for your event. This is what will be displayed to the visitor. You must use HTML formatting if you wish to format the post.
				The title of the event should always be surrounded by the <xmp><h1></h1></xmp> header tag. Sub headers must be surrounded by the <xmp><h2></h2></xmp> header tag. Every paragraph must be surrounded by the <xmp><p></p></xmp> paragraph tag.
			</p>
			<textarea name="description" id="description"></textarea>

			<br /><br />

			<h5>Event Date (Event will hide after event date)</h5>

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