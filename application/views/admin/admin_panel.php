<div class="grid_2">
	<? $this->load->view("/admin/side_bar"); ?>
</div>

<div class="grid_10">
	<h1>
		Welcome back <?= $user->row()->username; ?>
	</h1>
</div>