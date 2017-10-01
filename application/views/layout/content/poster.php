<div class="row">
	<?php
		foreach($tmp as $dong_phim)
		{
	?>
			<div class="phim1 col-md-2 col-sm-3 col-xs-6">
				<ul>			
				<li><a href="play/phim/<?php echo($dong_phim['idphim']); ?>">
					<img src="<?php echo(base_url('img/poster/').$dong_phim['poster']); ?>" width="100%" height="auto" class="image" />
					<p class="tenphim" style="color: #B8A000"><?php echo($dong_phim['tenphimvi']); ?></p>
					<div class="middle">
						<img src="<?php echo base_url(); ?>img/Play_blauw.png" width="100%"/>
					</div>
					</a>
				</li>
				</ul>
			</div>
			<?php
		}
	?>
</div>