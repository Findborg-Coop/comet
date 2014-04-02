<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;

$page_title = $this->params->get('page_title', '');
if (($this->params->get('show_page_heading', '0') == '1') && !empty($page_title)) { $page_title; } ?>
<div id="notification"></div>
<div class="mijovideos_box">
	<div class="mijovideos_box_heading">
		<h1 class="mijovideos_box_h1"><?php echo $page_title; ?></h1>
	</div>
	<div class="mijovideos_box_content_csp">
	<!-- content -->
		<form method="post" name="adminForm" id="adminForm" action="<?php echo JRoute::_('index.php?option=com_mijovideos&view=channels'.$this->Itemid); ?>">
            <div class="mijovideos_subheader_csp">
            	<div class="mijovideos_searchbox mijovideos_searchbox_csp">
                    <input type="text" name="mijovideos_search" id="mijovideos_search" placeholder="Search..." value="<?php echo empty($this->lists['search']) ? "" : $this->lists['search']; ?>" onchange="document.adminForm.submit();" />
                </div>
            </div>
			<input type="hidden" name="option" value="com_mijovideos" />
		    <input type="hidden" name="view" value="channels" />
		    <input type="hidden" name="task" value="" />
		    <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
		    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
		    <?php echo JHTML::_('form.token'); ?>		
			<div class="clr"></div>			
			<?php echo $this->loadTemplate('grid'); ?>
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