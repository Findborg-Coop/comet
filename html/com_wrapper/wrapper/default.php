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
function iFrameHeight()
{
	var h = 0;
	if (!document.all)
	{
		h = document.getElementById('blockrandom').contentDocument.height;
		document.getElementById('blockrandom').style.height = h + 60 + 'px';
	} else if (document.all)
	{
		h = document.frames('blockrandom').document.body.scrollHeight;
		document.all.blockrandom.style.height = h + 20 + 'px';
	}
}
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
<iframe <?php echo $this->wrapper->load; ?>
	id="blockrandom"
	name="iframe"
	src="<?php echo $this->escape($this->wrapper->url); ?>"
	width="<?php echo $this->escape($this->params->get('width')); ?>"
	height="<?php echo $this->escape($this->params->get('height')); ?>"
	scrolling="<?php echo $this->escape($this->params->get('scrolling')); ?>"
	frameborder="<?php echo $this->escape($this->params->get('frameborder', 1)); ?>"
	class="wrapper<?php echo $this->pageclass_sfx; ?>">
	<?php echo JText::_('COM_WRAPPER_NO_IFRAMES'); ?>
</iframe>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/iframe/jquery.iframeResizer.min.js"></script>
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
</div>
