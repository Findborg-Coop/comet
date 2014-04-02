<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;
$channel_itemId = MijoVideos::get('router')->getItemid(array('view' => 'channel', 'channel_id' => $this->channelitem->id), null, true);
$channel_url = JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this->channelitem->id.$channel_itemId);
$seconds = 0;
foreach ($this->items as $videos) {
    $seconds += $videos->duration;
}
$utility = MijoVideos::get('utility');
?>

<?php if (($this->params->get('show_page_heading', '0') == '1')) { ?>
    <?php $page_title = $this->params->get('page_title', ''); ?>

    <?php if (!empty($this->item->title)) { ?>
        <h1><?php echo $this->item->title;?></h1>
    <?php } else if (!empty($page_title)) { ?>
        <h1><?php echo $page_title; ?></h1>
    <?php } ?>
<?php } ?>
<div id="notification"></div>
<div class="mijovideos_box">
   
    <div class="mijovideos_box_content_pp">
        <!-- content -->
        <?php if ($this->channelitem->banner and file_exists(JPATH_ROOT.'/media/com_mijovideos/images/channels/'.$this->channelitem->banner)) {
            $background_image = "url(media/com_mijovideos/images/channels/" . $this->channelitem->id . "/banner/thumb/" . $this->channelitem->banner.") no-repeat;";
        } else {
            $background_image = "";
        } ?>
        <div class="banner_image" style="background: <?php echo $background_image; ?>; background-repeat: round;" >
            <a href="<?php echo $channel_url; ?>">
				<img class="channel-items-list-thumb" src="<?php echo $utility->getThumbPath($this->channelitem->id, 'channels', $this->channelitem->thumb); ?>" title="<?php echo $this->channelitem->thumb; ?>" alt="<?php echo $this->channelitem->thumb; ?>"/>
			</a>
        </div>

        <div class="mijovideos_channel_header_pp">
            <div class="mijovideos_channel_title_pp">
                <h1><a href="<?php echo JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this->channelitem->id.$this->Itemid); ?>"><?php echo $this->channelitem->title; ?></a></h1>
            </div>
            <?php if (MijoVideos::get('channels')->getDefaultChannel()->id == $this->channelitem->id or $this->channelitem->share_others) { ?>
                <span class="mijovideos_upload">
                    <a href="<?php echo $utility->route(JUri::base() . 'index.php?option=com_mijovideos&view=upload&channel_id='.$this->item->id.'&dashboard=1')?>" class="mijovideos_upload_btn">
                        <?php echo JText::_('COM_MIJOVIDEOS_UPLOAD'); ?>
                    </a>
                </span>
            <?php } ?>
            <?php if($this->config->get('subscriptions')) { ?>
                <div class="mijovideos_subscribe_pp" id="<?php echo $this->channelitem->id ?>">
                    <?php if (is_null($this->checksubscription)) { ?>
                        <button class="mijovideos_button subscribe" onclick="return false" id="subscribe_button">
                            <span class="mijovideos_redbutton_image"></span>
                            <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                        </button>
                        <button class="mijovideos_button subscribed unsubscribe_button_pp" onclick="return false" style="display:none" id="unsubscribe_button"><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                    <?php } else { ?>
                        <button class="mijovideos_button subscribe" onclick="return false" style="display:none" id="subscribe_button">
                            <span class="mijovideos_redbutton_image"></span>
                            <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                        </button>
                        <button class="mijovideos_button subscribed unsubscribe_button_pp" onclick="return false;" id="unsubscribe_button"><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                    <?php } ?>
                    <div class="mijovideos_subscribe_count mijovideos_subscribe_count_pp"><span class="subs_count" id="subs_count<?php echo $this->item->channel_id ?>"><?php echo $this->channelitem->subs; ?></span></div>
                </div>
            <?php } ?>
        </div>
         <!-- Nav tabs -->
        <div class="mijovideos_tabs">
            <ul>
                <li class="active"><a data-toggle="my_playlist"><?php echo JText::_('COM_MIJOVIDEOS_VIDEOS'); ?></a></li>
            </ul>
        </div>
        <form method="post" name="adminForm" id="adminForm" action="<?php echo JRoute::_('index.php?option=com_mijovideos&channel_id='.$this->channelitem->id.'&view=playlist'.$this->Itemid); ?>">
            <div class="mijovideos_playlist_subheader">
                <div class="mijovideos_actions_wrap_pp">
                    <div class="mijovideos_actions_pp">
                        <div class="mijovideos_like_actions_pp">
                            <?php $playlist_url = JRoute::_('index.php?option=com_mijovideos&view=video&video_id='.$this->items[0]->id.'&playlist_id='.$this->item->id.$this->Itemid); ?>
                            <a class="mijovideos_button_pp play_all_pp" href="<?php echo $playlist_url; ?>">
                                <span>&#9654;&nbsp;<?php echo JText::_('COM_MIJOVIDEOS_PLAY_ALL'); ?></span>
                            </a>
                            <a class="mijovideos_button_pp like <?php if($this->checklikesdislikes == 1) echo 'inactive'; ?>" id="like_action_pp">
                                <div class="like_button_pp" id="like1"></div>
                                <h4 class="like_image_pp"></h4>
                                <span>&nbsp;<?php echo JText::_('COM_MIJOVIDEOS_LIKE'); ?></span>
                            </a>
                            <a class="mijovideos_button_pp dislike <?php if($this->checklikesdislikes == 2) echo 'inactive'; ?>" id="dislike_action_pp">
                                <div class="dislike_button" id="like2"></div>
                                <h4 class="dislike_image_pp"></h4>
                                <span>&nbsp;<?php echo JText::_('COM_MIJOVIDEOS_DISLIKE'); ?></span>
                            </a>
                            <a class="mijovideos_button_pp share" id="share_button_pp">
                                <span><?php echo JText::_('COM_MIJOVIDEOS_SHARE'); ?></span>
                                <h4 class="arrow_bottom_pp"></h4>
                            </a>
                        </div>
                    </div>

                    <div class="mijovideos_views_info_pp">
                        <li><?php echo $this->totalvideos == 1 ? $this->totalvideos." ".JText::_('COM_MIJOVIDEOS_VIDEO') : $this->totalvideos." ".JText::_('COM_MIJOVIDEOS_VIDEOS'); ?></li>
                        <li><?php echo $utility->secondsToTime($seconds, true); ?></li>
                        <li class="mijovideos_views_count"><?php echo number_format($this->item->hits); ?> <?php echo JText::_('COM_MIJOVIDEOS_VIEWS');?></li><br>
                        <?php if ($this->item->likes or $this->item->dislikes) { ?>
                            <div class="stat-bar_pp">
                                <div class="bg-blue" style="width:<?php echo ((int)$this->item->likes*100)/((int)$this->item->dislikes+(int)$this->item->likes); ?>%;"></div>
                                <div class="bg-red" style="width:<?php echo ((int)$this->item->dislikes*100)/((int)$this->item->likes+(int)$this->item->likes); ?>%;"></div>
                            </div>
                            <div class="views_likes_dislikes_pp">
                                <span class="likes_count"><span id="mijovideos_like1"><?php echo number_format($this->item->likes); ?></span> <?php echo JText::_('COM_MIJOVIDEOS_LIKES');?>&nbsp;</span>
                                <span class="dislikes_count"><span id="mijovideos_like2"><?php echo number_format($this->item->dislikes); ?></span> <?php echo JText::_('COM_MIJOVIDEOS_DISLIKES');?></span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style" id="addthis_share_pp" style="display: none;">
                    <a class="addthis_button_facebook"></a>
                    <a class="addthis_button_twitter"></a>
                    <a class="addthis_button_google_plusone_share"></a>
                    <a class="addthis_button_blogger"></a>
                    <a class="addthis_button_odnoklassniki_ru"></a>
                    <a class="addthis_button_vk"></a>
                    <a class="addthis_button_tumblr"></a>
                    <a class="addthis_button_reddit"></a>
                    <a class="addthis_button_linkedin"></a>
                    <a class="addthis_button_compact"></a>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js"></script>
                <!-- AddThis Button END -->
            </div>
            <?php if (count($this->items)) { 
                $k = 0;
                foreach ($this->items as $item) {
                    $video_itemId = MijoVideos::get('router')->getItemid(array('view' => 'video', 'video_id' => $item->id), null, true);
                    $video_url = JRoute::_('index.php?option=com_mijovideos&view=video&video_id='.$item->id.$video_itemId); ?>
                    <div class="playlists-items-list-box_pp<?php echo $k; ?>">
						<a href="<?php echo $video_url; ?>">
                            <div id="videos-items-thumb_pp">
                                <span class="video_time"><?php echo $utility->secondsToTime($item->duration); ?></span>
                                <?php echo $utility->getWatchLaterButton($item->id); ?>
							</div>
                            <img class="playlists-items-list-thumb_pp" src="<?php echo $utility->getThumbPath($item->id, 'videos', $item->thumb); ?>" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>"/>
                        </a>
                        <div class="playlists-items-list-box-content_pp">
                            <h3 class="mijovideos_box_h3_pp">
                                <a href="<?php echo $video_url; ?>" title="<?php echo $item->title; ?>">
                                    <?php echo $this->escape(JHtmlString::truncate($item->title, $this->config->get('title_truncation'), false, false)); ?>
                                </a>
                            </h3>
                            <div class="playlists-meta">
                                <div class="mijovideos-meta-info">
                                    <div class="created_by_pp">
                                    <span class="key"><?php echo JText::_('COM_MIJOVIDEOS_CREATED_BY'); ?></span>
                                    <span class="value">
                                        <a href="<?php echo $channel_url; ?>" title="<?php echo $this->channelitem->title; ?>">
                                            <?php echo $this->escape(JHtmlString::truncate($this->channelitem->title, $this->config->get('title_truncation'), false, false)); ?>
                                        </a>
                                    </span>
                                    </div>
                                    <div class="date-created_pp">
                                        <span class="key"><?php echo number_format($item->hits); ?></span>
                                        <span class="value"><?php echo JText::_('COM_MIJOVIDEOS_VIEWS'); ?></span>
                                    </div>
                                </div>
                                <div class="video_description_pp">
                                    <?php echo $this->escape(JHtmlString::truncate($item->introtext, $this->config->get('desc_truncation'), false, false)); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                   <?php $k = 1 - $k; ?>
                <?php } ?>
            <?php } ?>
			
		    <input type="hidden" name="option" value="com_mijovideos" />
		    <input type="hidden" name="view" value="playlist" />
		    <input type="hidden" name="task" value="" />
		    <input type="hidden" name="filter_order" value="<?php echo $this->lists['order']; ?>" />
		    <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
		    <?php echo JHTML::_('form.token'); ?>		
			<div class="clr"></div>
		</form>
	<!-- content // -->
	</div>
	<?php
	/*if ($this->pagination->total > $this->pagination->limit) {
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
	}*/
	?>
</div>
<script type="text/javascript"><!--
    jQuery('#like_action_pp,#dislike_action_pp').click(function() {
        var id = jQuery(this).children().attr("id");
        var type = id.replace("like","");
        jQuery.ajax({
            url: 'index.php?option=com_mijovideos&view=playlist&task=checkLikesDislikes&item_type=playlists&item_id=<?php echo $this->item->id; ?>',
            type: 'post',
            data: {type: type},
            dataType: 'json',
            success: function(json) {
                if (json['success']) {
                    var count = jQuery('#mijovideos_like'+type).text();
                    var oldtype = json['type'];
                    if(json['type'] == -1) {
                        jQuery.ajax({
                            url: 'index.php?option=com_mijovideos&view=playlist&task=likeDislikeItem&item_type=playlists&item_id=<?php echo $this->item->id; ?>',
                            type: 'post',
                            data: {type: type},
                            dataType: 'json',
                            success: function(json) {
                                if (json['success']) {
                                    jQuery('#'+id).parent().addClass('inactive');
                                    jQuery('#mijovideos_like'+type).text(parseInt(count)+1);
                                }
                                if (json['redirect']) location = json['redirect'];
                            }
                        });
                    } else {
                        if(json['type'] == type){
                            jQuery.ajax({
                                url: 'index.php?option=com_mijovideos&view=playlist&task=likeDislikeItem&item_type=playlists&item_id=<?php echo $this->item->id; ?>',
                                type: 'post',
                                data: {type: type, change: -1},
                                dataType: 'json',
                                success: function(json) {
                                    if (json['success']) {
                                        jQuery('#'+id).parent().removeClass('inactive');
                                        jQuery('#mijovideos_like'+type).text(parseInt(count)-1);
                                    }
                                    if (json['redirect']) location = json['redirect'];
                                }
                            });
                        } else {
                            jQuery.ajax({
                                url: 'index.php?option=com_mijovideos&view=playlist&task=likeDislikeItem&item_type=playlists&item_id=<?php echo $this->item->id; ?>',
                                type: 'post',
                                data: {type: type, change: 1},
                                dataType: 'json',
                                success: function(json) {
                                    if (json['success']) {
                                        jQuery('#'+id).parent().addClass('inactive');
                                        jQuery('#like'+oldtype).parent().removeClass('inactive');
                                        jQuery('#mijovideos_like'+type).text(parseInt(count)+1);
                                        jQuery('#mijovideos_like'+oldtype).text(parseInt(jQuery('#mijovideos_like'+oldtype).text())-1);
                                    }
                                    if (json['redirect']) location = json['redirect'];
                                }
                            });
                        }
                    }
                }
                if (json['redirect']) location = json['redirect'];
            }
        });
    });
    //--></script>
<script type="text/javascript">
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
                    } else {
                        jQuery('#'+id+' #subscribe_button').hide();
                        jQuery('#'+id+' #unsubscribe_button').show();
                        jQuery('#subs_count'+id).text(parseInt(count) + 1);
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

    jQuery("#share_button_pp").toggle(showPanel,hidePanel);
    function showPanel() {
        jQuery("#addthis_share_pp").show();
    }
    function hidePanel() {
        jQuery("#addthis_share_pp").hide();
    }

    jQuery(document).ready(function() {
        jQuery('.subscribed').hover(
            function() {
                jQuery(this).html('<span class="mijovideos_button_unsubs_image"></span><?php echo JText::_("COM_MIJOVIDEOS_UNSUBSCRIBE"); ?>');
            }, function() {
                jQuery(this).html('<span class="mijovideos_button_image"></span><?php echo JText::_("COM_MIJOVIDEOS_SUBSCRIBED"); ?>');
            }
        );

    });
</script>
