<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;
if (count($this->items)) {
    foreach ($this->checksubscription AS $checksubscription) {
        $subs[] = $checksubscription['item_id'];
    }
    $utility = MijoVideos::get('utility');
    $n = count($this->items);
    for ($i = 0; $i < $n; $i++) {
        $item = $this->items[$i];
        if (empty($item->videos)) {
            continue;
        }
		$url = JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$item->id.$this->Itemid); ?>
        <div class="mijovideos_channels_grid_csp">
            <a href="<?php echo $url; ?>">
			<img class="mijovideos_channels_box_content_img_csp" src="<?php echo $utility->getThumbPath($item->id, 'channels', $item->thumb); ?>" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>"/>
            </a>
            <div class="mijovideos_channels_box_content_header_csp">
                <h3 class="mijovideos_box_h3_csp">
                    <a href="<?php echo $url; ?>" title="<?php echo $item->title; ?>">
                        <?php echo $this->escape(JHtmlString::truncate($item->title, $this->config->get('title_truncation'), false, false)); ?>
                    </a>
                </h3>
                <?php if($this->config->get('subscriptions')) { ?>
                    <div class="mijovideos_subscribe mijovideos_subscribe_csp" id="<?php echo $item->id ?>">
                        <?php if (isset($subs)) { ?>
                            <?php if (in_array($item->id, $subs)) { ?>
                                <button class="mijovideos_button subscribe" onclick="return false;" style="display:none" id="subscribe_button">
                                     <span class="mijovideos_redbutton_image"></span>
                                    <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                                </button>
                                <div class="mijovideos_subscribe_count mijovideos_subscribe_count_csp"><span class="subs_count" style="display:none" id="subs_count<?php echo $item->id ?>"><?php echo is_null($item->subs) ? '0' : $item->subs; ?></span></div>
                                <button class="mijovideos_button subscribed" onclick="return false;" id="unsubscribe_button"><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                            <?php } else { ?>
                                <button class="mijovideos_button subscribe" onclick="return false;" id="subscribe_button">
                                     <span class="mijovideos_redbutton_image"></span>
                                    <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                                </button>
                                <div class="mijovideos_subscribe_count mijovideos_subscribe_count_csp"><span class="subs_count" id="subs_count<?php echo $item->id ?>"><?php echo is_null($item->subs) ? '0' : $item->subs; ?></span></div>
                                <button class="mijovideos_button  subscribed" onclick="return false;" style="display:none" id="unsubscribe_button"><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                            <?php } ?>
                        <?php } else { ?>
                            <button class="mijovideos_button subscribe" onclick="return false;" id="subscribe_button">
                                 <span class="mijovideos_redbutton_image"></span>
                                <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                            </button>
                            <div class="mijovideos_subscribe_count mijovideos_subscribe_count_csp"><span class="subs_count" id="subs_count<?php echo $item->id ?>"><?php echo isset($item->subs) ? $item->subs : '0'; ?></span></div>
                            <button class="mijovideos_button subscribed" onclick="return false;" style="display:none" id="unsubscribe_button"><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="mijovideos_channels_box_content_csp">
                    <?php echo $this->escape(JHtmlString::truncate($item->introtext, $this->config->get('desc_truncation'), false, false)); ?>
                </div>
                  <div class="mijovideos_preview_videos">
                    <div class="mijovideos_preview_videos_title"><?php echo JText::_('COM_MIJOVIDEOS_PREVIEW_VIDEOS');?></div>
                    <?php $j=0; foreach ($item->videos as $video) { $j++; ?>
                        <?php $url = JRoute::_('index.php?option=com_mijovideos&view=video&video_id='.$video->id.$this->Itemid); ?>
                        <div class="mijovideos_preview">
                            <a href="<?php echo $url; ?>">
                                <img class="mijovideos_thumb_100" src="<?php echo $utility->getThumbPath($video->id, 'videos', $video->thumb); ?>" title="<?php echo $video->title; ?>" alt="<?php echo $video->title; ?>"/>
                            </a>
                        </div>
                    <?php if($j == 3) break; } ?>
                </div>
            </div>
            
        </div>
    <?php } ?>
<?php } ?>

<script type="text/javascript"><!--
    jQuery('#subscribe_button, #unsubscribe_button').click(function() {
        var clicked_button = jQuery(this).attr('id').replace("_button","");
        var id = jQuery(this).parent().attr("id");
        jQuery.ajax({
            url: 'index.php?option=com_mijovideos&view=channels&task=subscribeToItem',
            type: 'post',
            data: {type: clicked_button , id: id},
            dataType: 'json',
            success: function(json) {
                if (json['success']) {
                    var count = jQuery('#subs_count'+id).text();
                    if(clicked_button == "unsubscribe") {
                        jQuery('#'+id+' #unsubscribe_button').hide();
                        jQuery('#'+id+' #subscribe_button').show();
                        jQuery('#subs_count'+id).text(parseInt(count) - 1);
                        jQuery('#subs_count'+id).show();
                    } else {
                        jQuery('#'+id+' #subscribe_button').hide();
                        jQuery('#'+id+' #unsubscribe_button').show();
                        jQuery('#subs_count'+id).text(parseInt(count) + 1);
                        jQuery('#subs_count'+id).hide();
                    }

                }
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['error']) {
                    jQuery('#notification').html('<div class="mijovideos_warning" style="display: none;">' + json['error'] + '</div>');
                    jQuery('.mijovideos_warning').fadeIn('slow');
                    jQuery('.mijovideos_box, body').animate({ scrollTop: 0 }, 'slow');
                    jQuery('.mijovideos_warning').delay(5000).fadeOut('slow');
                }
            }
        });
    });
    jQuery(document).ready(function() {
        jQuery('.subscribed').hover(
            function() {
                jQuery(this).html('<span class="mijovideos_button_unsubs_image"></span><?php echo JText::_("COM_MIJOVIDEOS_UNSUBSCRIBE"); ?>');
            }, function() {
               jQuery(this).html('<span class="mijovideos_button_image"></span><?php echo JText::_("COM_MIJOVIDEOS_SUBSCRIBED"); ?>');
            }
        );
    });
    //--></script>