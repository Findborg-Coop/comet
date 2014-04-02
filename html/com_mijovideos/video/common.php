<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined('_JEXEC') or die ('Restricted access');
$utility = MijoVideos::get('utility');
$thumb_size = $utility->getThumbSize($this->config->get('thumb_size'));

?>
<div class="mijovideos_box_cap">
    <div class="mijovideos_box_content_cap">
      <div class="videos-items-list-box">
            <div class="videos-list-item_cap" style="width: <?php echo $thumb_size; ?>px">
                <a href="<?php echo $url; ?>">
                    <div id="videos-items-grid-thumb_cp">
                        <span class="video_time"><?php echo $utility->secondsToTime($item->duration); ?></span>
                        <?php echo $utility->getWatchLaterButton($item->id); ?>
                    </div>
                    <img class="videos-items-grid-thumb_cap" src="<?php echo $utility->getThumbPath($item->id, 'videos', $item->thumb); ?>" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>"/>
                </a>
            </div>
            <div class="videos-items-list-box-content_cap">
                 <div class="mijovideos_box_heading_cap">
                    <h3 class="mijovideos_box_h3_cap">
                        <a href="<?php echo $url; ?>" title="<?php echo $item->title; ?>">
                            <?php echo $this->escape(JHtmlString::truncate($item->title, $this->config->get('title_truncation'), false, false)); ?>
                        </a>
                    </h3>
                </div>
                <div class="videos-meta">
                    <div class="mijovideos-meta-info_cap">
                        <div class="videos-view">
                            <span class="value"><?php echo number_format($item->hits); ?></span>
                            <span class="key"><?php echo JText::_('COM_MIJOVIDEOS_VIEWS'); ?></span>
                        </div>
                        <div class="date-created">
                            <span class="key"><?php echo JText::_('COM_MIJOVIDEOS_DATE_CREATED'); ?></span>
                            <span class="value"><?php echo JHTML::_('date', $item->created, JText::_('DATE_FORMAT_LC4')); ?></span>
                        </div>
                    </div>
                </div>
                <div class="videos-description_cap">
                    <?php if (!empty($item->introtext)) { ?>
                        <?php echo $this->escape(JHtmlString::truncate($item->introtext, $this->config->get('desc_truncation'), false, false)); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
