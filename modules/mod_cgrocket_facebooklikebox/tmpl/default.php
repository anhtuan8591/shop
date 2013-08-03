<?php
/*---------------------------------------------------------------
# Package - Module CGrocket Facebook Fanpage by CGrocket.com 
# ---------------------------------------------------------------
# Author - CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 CGrocket.com. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# Websites: http://www.cgrocket.com - http://www.leweb2.com
-----------------------------------------------------------------*/
 
// no direct access
defined('_JEXEC') or die('Restricted access');
?>

<div  class="cgrocket-facebookpage<?php echo $moduleclass_sfx ?>" >
<iframe 
	src="//www.facebook.com/plugins/likebox.php?href=<?php 
		$href =urlencode(trim($params->get('href')));
		
		if($params->get('width'))
		{
			$href .= "&amp;width=".$params->get('width');
		}
		if($params->get('height'))
		{
			$href .= "&amp;height=".$params->get('height');
		}
		if($params->get('colorscheme'))
		{
			$href .= "&amp;colorscheme=".$params->get('colorscheme');
		}
		if($params->get('show_faces'))
		{
			$href .= "&amp;show_faces=".$params->get('show_faces');
		}
		if($params->get('show_stream'))
		{
			$href .= "&amp;stream=".$params->get('show_stream');
		}
		if($params->get('border_color'))
		{
			$href .= "&amp;border_color=".urlencode($params->get('border_color'));
		}
		
		if($params->get('show_header'))
		{
			$href .= "&amp;header=".$params->get('show_header');
		}

		$href = $href;
		
		echo $href;	
	?>" scrolling="no" 
	frameborder="0" 
	style="border:none; overflow:hidden; width:<?php echo $params->get('width')?>px; height:<?php echo $params->get('height')?>px;" 
	allowTransparency="true">
</iframe>
</div>