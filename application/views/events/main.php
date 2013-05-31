<div class="grid_12">

	<? foreach($events->result() as $event) { ?>
	
		<div class="event">
			
			<?= $event->description; ?>

		</div>

		<hr>

    <? } ?>


</div>

</div><!-- end of container 12 -->

</body>
</html>