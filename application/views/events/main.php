<div class="grid_6">

	<h1>
		Milton, GA Events
	</h1>

	<hr>

	<? foreach($events->result() as $event) { ?>
		
		<? if($event->location == "milton"){ ?>

			<div class="event">
				
				<?= $event->description; ?>

			</div>

			<hr>
		<? } ?>

    <? } ?>

</div>

<div class="grid_6">
	
	<h1>
		Brookhaven, GA Events
	</h1>

	<hr>

	<? foreach($events->result() as $event) { ?>

		<? if($event->location == "brookhaven"){ ?>

			<div class="event">
				
				<?= $event->description; ?>

			</div>

			<hr>
		<? } ?>

    <? } ?>

</div>

</div><!-- end of container 12 -->

</body>
</html>