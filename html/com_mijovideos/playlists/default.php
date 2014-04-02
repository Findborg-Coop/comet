<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;

$page_title = $this->params->get('page_title', '');
$tmpl = JFactory::getApplication()->getTemplate();
if (($this->params->get('show_page_heading', '0') == '1') && !empty($page_title)) { $page_title; } ?>

<div class="mijovideos_box">
	<div class="mijovideos_box_heading">
		<h1 class="mijovideos_box_h1"><?php echo $page_title; ?></h1>
	</div>

	<div class="mijovideos_box_content_psp">
	<!-- content -->
		<form method="post" name="adminForm" id="adminForm" action="<?php echo JRoute::_('index.php?option=com_mijovideos&view=playlists'.$this->Itemid); ?>">
		    <div class="mijovideos_subheader_psp">
		    	<div class="mijovideos_searchbox_wrap">
	                <div class="mijovideos_searchbox mijovideos_searchbox_psp">
	                    <input type="text" name="mijovideos_search" id="mijovideos_search" placeholder="Search..." value="<?php echo empty($this->lists['search']) ? "" : $this->lists['search']; ?>" onchange="document.adminForm.submit();" />
	                </div>
	                <div class="mijovideos_flow_select_psp">
	                    <a class="mijovideos_button <?php echo (strpos($this->display, 'grid') !== false) ? 'toggled' : ''; ?>" href="<?php echo JRoute::_('index.php?option=com_mijovideos&view=playlists&display=grid'.$this->Itemid); ?>" title="<?php echo JText::_('COM_MIJOVIDEOS_GRID'); ?>"><h4 class="mijovideos_button_grid_image mijovideos_button_grid_image_psp" style="<?php echo(strpos($this->display, 'grid') !== false) ? "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") 0 -540px" : "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") -21px -402px"; ?>"></h4></a>
	                    <a class="mijovideos_button <?php echo (strpos($this->display, 'grid') === false) ? 'toggled' : ''; ?>" href="<?php echo JRoute::_('index.php?option=com_mijovideos&view=playlists&display=list'.$this->Itemid); ?>" title="<?php echo JText::_('COM_MIJOVIDEOS_LIST'); ?>"><h4 class="mijovideos_button_list_image mijovideos_button_list_image_psp" style="<?php echo(strpos($this->display, 'grid') === false) ? "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") -70px -242px" : "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") -55px -209px"; ?>"></h4></a>
	                </div>
            	</div>
            </div>
		    <input type="hidden" name="option" value="com_mijovideos" />
		    <input type="hidden" name="view" value="playlists" />
		    <input type="hidden" name="task" value="" />
		    <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
		    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
		    <?php echo JHTML::_('form.token'); ?>
			<div class="clr"></div>

			<?php echo $this->loadTemplate($this->display); ?>
		</form>
	<!-- content // -->
	</div>
	<?php
	if ($this->pagination->total > $this->pagination->limit) {
	?>
		<tfoot>
			<tr>
				<td colspan="5">
					<div class="pagination">
						<?php echo $this->pagination->getListFooter(); ?>
					</div>
				</td>
			</tr>
		</tfoot>
	<?php
	}
	?>
</div>
<script type="text/javascript">
	jQuery(".playlists-items-list-thumb").mouseover(function(){
		jQuery(".playlists-items-list-tumb_wrap").show();
	});

</script>