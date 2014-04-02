<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_wrapper
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<script type="text/javascript">

			$('iframe').iFrameSizer({
				log: true,
				contentWindowBodyMargin:8,
				doHeight:true,
				doWidth:false,
				interval:32,
				enablePublicMethods:true,
				callback:function(messageData){
					$('p#callback').html('<b>Frame ID:</b> ' + messageData.iframe.id + 
										' <b>Height:</b> ' + messageData.height + 
										' <b>Width:</b> ' + messageData.width);
				}
			});

		</script>
<div class="contentpane<?php echo $this->pageclass_sfx; ?>">
<?php if ($this->params->get('show_page_heading')) : ?>
	<h1>
		<?php if ($this->escape($this->params->get('page_heading'))) :?>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		<?php else : ?>
			<?php echo $this->escape($this->params->get('page_title')); ?>
		<?php endif; ?>
	</h1>
<?php endif; ?>
<h1>Show Me The IFrame!</h1>
<iframe src="http://findborg.com/s/" width="100%" scrolling="no"></iframe>
<p id="callback">
		</p>


</div>
