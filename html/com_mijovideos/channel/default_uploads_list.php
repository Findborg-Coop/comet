<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;
if (count($this->items)) {
    $utility = MijoVideos::get('utility');
    $thumb_size = $utility->getThumbSize($this->config->get('thumb_size'));
    $k = 0;
    $n = count($this->items);
    for ($i = 0; $i < $n; $i++) {
        $item = &$this->items[$i];
        $url = JRoute::_('index.php?option=com_mijovideos&view=video&video_id='.$item->id.$this->Itemid);
        ?>
        <div class="videos-items-list-box_cp">
			<a href="<?php echo $url; ?>">
				<div id="videos-items-list-thumb_cp">
                    <span class="video_time"><?php echo $utility->secondsToTime($item->duration); ?></span>
                    <?php echo $utility->getWatchLaterButton($item->id); ?>
				</div>
                <img class="videos-items-list-thumb_cp" src="<?php echo $utility->getThumbPath($item->id, 'videos', $item->thumb); ?>" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>"/>
            </a>
            <div class="videos-items-list-box-content_cp">
                <h3 class="mijovideos_box_h3_cp mijovideos_box_h3">
                    <a href="<?php echo $url; ?>" title="<?php echo $item->title; ?>">
                        <?php echo $this->escape(JHtmlString::truncate($item->title, $this->config->get('title_truncation'), false, false)); ?>
                    </a>
                </h3>
                <div class="videos-meta">
                    <div class="mijovideos-meta-info_cp">
                        <div class="videos-view_cp">
                            <span class="value"><?php echo number_format($item->hits); ?></span>
                            <span class="key"><?php echo JText::_('COM_MIJOVIDEOS_VIEWS'); ?></span>
						</div>
                        <div class="date-created_cp">
                            <span class="value"><?php echo JHTML::_('date', $item->created, JText::_('DATE_FORMAT_LC4')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="videos-description_cp">
                    <?php if (!empty($item->introtext)) { ?>
                        <?php echo $this->escape(JHtmlString::truncate($item->introtext, $this->config->get('desc_truncation'), false, false)); ?>
					<?php } ?>
                
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>
