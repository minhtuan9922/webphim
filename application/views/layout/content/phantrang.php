<?php
	echo('
	<div class="center-block">
	<ul class="pagination">
		<li><a href="'.$link.'&trang=1">&laquo;</a></li>');
	for($i = 1; $i <=$a; $i++)
	{
		if ($get_trang == $i)
		{
			echo('<li class="active"><a href="'.$link.'&trang='.$i.'">'.$i.'<span class="sr-only">(current)</span></a></li>');
		}
		else
			echo('<li><a href="'.$link.'&trang='.$i.'">'.$i.'</a></li>');
	}
	echo('
		<li><a href="'.$link.'&trang='.$a.'">&raquo;</a></li>
	</ul>
	</div>
	');	
?>