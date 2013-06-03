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

			<h5>Event Location</h5>
				
			<select name="location">
				<option value="brookhaven">Brookhaven, GA</option>
				<option value="milton">Milton, GA</option>
			</select>

			<br /><br />

			<h5>Event Description</h5>
			<p>
				Choose a description for your event. This is what will be displayed to the visitor. You must use HTML formatting if you wish to format the post.
				The title of the event should always be surrounded by the &#60;h1>&#60;/h1> header tag. Sub headers must be surrounded by the &#60;h2>&#60;/h2> header tag. Every paragraph must be surrounded by the &#60;p>&#60;/p> paragraph tag. To create a link, use the &#60;a>&#60;/a> as shown:&#60;a href="www.address.com">Click here to link&#60;/a>. Use the &#60;br /> tag for a line break.
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
			
			<h5>Event Location</h5>
				
			<select name="location">
				<option value="brookhaven">Brookhaven, GA</option>
				<option value="milton">Milton, GA</option>
			</select>

			<br /><br />

			<h5>Event Description</h5>
			<p>
				Choose a description for your event. This is what will be displayed to the visitor. You must use HTML formatting if you wish to format the post.
				The title of the event should always be surrounded by the &#60;h1>&#60;/h1> header tag. Sub headers must be surrounded by the &#60;h2>&#60;/h2> header tag. Every paragraph must be surrounded by the &#60;p>&#60;/p> paragraph tag. To create a link, use the &#60;a>&#60;/a> as shown:&#60;a href="www.address.com">Click here to link&#60;/a>. Use the &#60;br /> tag for a line break.
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