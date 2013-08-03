<?php
/*------------------------------------------------------------------------
# CGrocket Gallery Module by CGrocket.com
# ------------------------------------------------------------------------
# author    CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 CGrocket.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.cgrocket.com - www.leweb2.com
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<div id="cg-sig<?php echo $uniqid ?>" class="cg-sig">
<?php foreach($list as $item) { ?>
	<a href="<?php echo $item->image ?>" rel="lightbox-atomium" title="<?php echo $item->title ?>">
		<img class="cgrocket_simple_gallery" src="<?php echo $item->thumb ?>" alt="<?php echo $item->title ?>" />
	</a>
<?php } ?>
</div>
<?php if ($usefade) { ?>
<script type="text/javascript">
	window.addEvent("domready",function(){
		$$("div#cg-sig<?php echo $uniqid ?> img").each(function(e){
		  e.setOpacity(<?php echo $normal_opacity ?>);
		  e.addEvent("mouseover", function(){e.fade(<?php echo $hover_opacity ?>);});
		  e.addEvent("mouseout", function(){e.fade(<?php echo $normal_opacity ?>);});			  
		});
	});
</script>
<?php } ?>