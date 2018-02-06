<?php $nav = (empty($tome) ? '' : '/'.$tome); ?>
			<ul class="navigation" role="navigation">
				<li><a class="link-accueil" href="<?php echo (empty($tome) ? '/' : $nav); ?>">Roman</a></li>
				<li><a class="link-personnages" href="<?php echo $nav; ?>/personnages">Personnages</a></li>
				<li><a class="link-geographie" href="<?php echo $nav; ?>/geographie">Géographie</a></li>
			</ul>