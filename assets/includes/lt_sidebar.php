
<div class="col-md-3 hidden-sm hidden-xs">
	<i class="glyphicon glyphicon-tasks"></i>&nbsp;&nbsp;<?php echo $lang['index-sidebar-feeds']; ?>
	<hr>

	
	<ul class="feed-ul">
		<?php $popular;
			$current = '';
			if(!isset($_GET['feed']) || $_GET['feed'] == '' ) {
				$current = 'current';
			}
		?>
		<li><a href="<?php echo $url_mapper['index/']; ?>" class="<?php echo $current; ?> col-md-12"><?php echo $lang['index-sidebar-top']; ?></a></li>
		<li>&nbsp;</li>
		<center><b class="yple_back"><?php echo $lang['index-sidebar-trending']; ?></b></center>
		<?php $tags = Tag::get_trending(' LIMIT 5 ');
			if($tags) {
				foreach($tags as $tag) {
					$current = '';
					if(isset($_GET['feed']) && $_GET['feed'] != '' ) {
						if($_GET['feed'] == $tag->name ) {
							$current = 'current';
						}
					}
					//$tagname = str_replace(" ", '-', strtolower($tag->name));
			?>
				<li><a href="<?php echo $url_mapper['feed/'] . $tag->name; ?>/" class="<?php echo $current; ?> col-md-12"><?php echo $tag->name; ?></a></li>
			<?php
				}
			}
		?>
		<li>&nbsp;</li>
		<!-- <center><b class="yple_back"><?php echo $lang['index-sidebar-subscriptions']; ?></b></center> -->
		 <?php //$tags = FollowRule::get_subscriptions('tag',$current_user->id , 'user_id' , 'LIMIT 20');
			// if($tags) {
			// 	foreach($tags as $tag) {
			// 		$tag = Tag::get_specific_id($tag->obj_id);
			// 		$current = '';
			// 		if(isset($_GET['feed']) && $_GET['feed'] != '' ) {
			// 			if($_GET['feed'] == $tag->name ) {
			// 				$current = 'current';
			// 			}
			// 		}
			?>
				<!-- <li><a href="<?php echo $url_mapper['feed/'] . $tag->name; ?>/" class="<?php echo $current; ?> col-md-12"><?php echo $tag->name; ?></a></li> -->
			<?php
			// 	}
			// }
		?>
		<li>&nbsp;</li>
		<center><b class="yple_back"><?php echo $lang['index-sidebar-industry']; ?></b></center>
		<?php $cats = Industries::get_industries();
		// echo "<pre>"; print_r($cats); exit;
			if($cats) {
				foreach($cats as $cat) {
					// $tag = Tag::get_specific_id($tag->obj_id);
					$current = '';
					if(isset($_GET['feed']) && $_GET['feed'] != '' ) {
						if($_GET['feed'] == $tag->name ) {
							$current = 'current';
						}
					}

					$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					$uri_segment = explode('/', $actual_link);
					if(!empty($uri_segment[5]))
					{
						$popular = str_replace(" ", '-', $uri_segment[5]);
					}
			?>
				<li><a href="<?php echo $url_mapper['feed/'] . $popular . '/' . $cat->slug; ?>" class="<?php echo $current; ?> col-md-12"><?php echo $cat->cat_name; ?></a></li>
			<?php
				}
			}
		?>
		<li>&nbsp;</li>
		<center><b class="yple_back"><?php echo $lang['index-sidebar-partner']; ?></b></center>
		<?php $mats = Materials::get_materials();
		// echo "<pre>"; print_r($mats); exit;
			if($mats) {
				foreach($mats as $mat) {
					// $tag = Tag::get_specific_id($tag->obj_id);
					$current = '';
					if(isset($_GET['feed']) && $_GET['feed'] != '' ) {
						if($_GET['feed'] == $mat->mat_name ) {
							$current = 'current';
						}
					}

					$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					$uri_segment = explode('/', $actual_link);
					if(!empty($uri_segment[5]))
					{
						$popular = $uri_segment[5];
					}
			?>
				<li><a href="<?php echo $url_mapper['feed/'] . $popular . '/' . $mat->slug; ?>" class="<?php echo $current; ?> col-md-12"><?php echo $mat->mat_name; ?></a></li>
			<?php
				}
			}
		?>

		<!-- <center><b class="yple_back"><?php echo $lang['index-sidebar-tools']; ?></b></center> -->
		<?php //$tools = Tools::get_tools();
		// echo "<pre>"; print_r($cats); exit;
			// if($tools) {
			// 	foreach($tools as $tool) {
			// 		// $tag = Tag::get_specific_id($tag->obj_id);
			// 		$current = '';
			// 		if(isset($_GET['feed']) && $_GET['feed'] != '' ) {
			// 			if($_GET['feed'] == $tool->tool_name ) {
			// 				$current = 'current';
			// 			}
			// 		}

			// 		$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			// 		$uri_segment = explode('/', $actual_link);
			// 		if(!empty($uri_segment[5]))
			// 		{
			// 			$popular = $uri_segment[5];
			// 		}
			// 		if(!empty($uri_segment[6]))
			// 		{
			// 			$industry = $uri_segment[6];
			// 		}
			// 		if(!empty($uri_segment[7]))
			// 		{
			// 			$material = $uri_segment[7];
			// 		}
			?>
				<!-- <li><a href="<?php echo $url_mapper['feed/'] . $popular . '/'. $industry . '/'. $material . '/' . $tool->slug; ?>" class="<?php echo $current; ?> col-md-12"><?php echo $tool->tool_name; ?></a></li> -->
			<?php
			// 	}
			// }
		?>

		<!-- <center><b class="yple_back"><?php echo $lang['index-sidebar-microf']; ?></b></center> -->
		<?php //$microfinance = Microfinance::get_microfinances();
		// echo "<pre>"; print_r($cats); exit;
			// if($microfinance) {
			// 	foreach($microfinance as $microf) {
			// 		// $tag = Tag::get_specific_id($tag->obj_id);
			// 		$current = '';
			// 		if(isset($_GET['feed']) && $_GET['feed'] != '' ) {
			// 			if($_GET['feed'] == $microf->microf_name ) {
			// 				$current = 'current';
			// 			}
			// 		}

			// 		$actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
			// 		$uri_segment = explode('/', $actual_link);
			// 		if(!empty($uri_segment[5]))
			// 		{
			// 			$popular = $uri_segment[5];
			// 		}
			// 		if(!empty($uri_segment[6]))
			// 		{
			// 			$industry = $uri_segment[6];
			// 		}
			// 		if(!empty($uri_segment[7]))
			// 		{
			// 			$material = $uri_segment[7];
			// 		}
			// 		if(!empty($uri_segment[8]))
			// 		{
			// 			$microfi = $uri_segment[8];
			// 		}
			?>
				<!-- <li><a href="<?php echo $url_mapper['feed/'] . $popular . '/'. $industry . '/'. $material . '/'. $microfi . '/' . $microf->slug; ?>" class="<?php echo $current; ?> col-md-12"><?php echo $microf->microf_name; ?></a></li> -->
			<?php
			// 	}
			// }
		?>

	</ul>
	
	<?php if(isset($admanager2->value) && $admanager2->value != '' && $admanager2->value != '&nbsp;' ) { echo '<br style="clear:both"><hr>'.str_replace('\\','',$admanager2->value); } ?>
	</div>
	