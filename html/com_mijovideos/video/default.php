<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;

$tmpl = JFactory::getApplication()->getTemplate();

$url = JRoute::_('index.php?option=com_mijovideos&view=video&video_id='.$this->item->id.$this->Itemid);
$channel_url = JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this->item->channel_id.$this->Itemid);
$socialUrl = JURI::base().$url;
$utility = MijoVideos::get('utility');
?>

<div name="adminForm" id="adminForm">
    <div id="notification"></div>
    <div class="mijovideos_box">
       <div class="mijovideos_box_content">
            <div class="mijovideos_video_player">
                <?php echo $this->loadTemplate('player'); ?>
                <?php if(!empty($this->playlistvideos)) echo $this->loadTemplate('playlist'); ?>
            </div>
            <div class="mijovideos_video_headline"><h1 class="mijovideos_video_headline_1_vp"><?php echo $this->item->title ?></h1></div>
            <div class="mijovideos_user_header_vp">
                <a href="<?php echo $channel_url; ?>">
                    <img class="mijovideos_channel_thumb48_vp" src="<?php echo $utility->getThumbPath($this->item->channel->id, 'channels', $this->item->channel->thumb); ?>"/>
                </a>
                <div class="mijovideos_channel_info_vp">
                        <a class="mijovideos_channel_title_vp" href="<?php echo $channel_url; ?>">
                            <?php echo $this->escape(JHtmlString::truncate($this->item->channel->title, $this->config->get('title_truncation'), false, false)); ?>
                        </a>&nbsp;-&nbsp;
                    <a href="<?php echo $channel_url; ?>"><span class="mijovideos-meta-info_vp date-created"><?php echo $this->item->channel_videos_count; ?> <?php echo JText::_('COM_MIJOVIDEOS_VIDEOS'); ?></span></a>
                    <?php if($this->config->get('subscriptions')) { ?>
                        <div class="mijovideos_subscribe" id="<?php echo $this->item->channel_id ?>">
                            <?php if (is_null($this->checksubscription)) { ?>
                                <button class="mijovideos_button subscribe" id="subscribe_button">
                                    <span class="mijovideos_redbutton_image"></span>
                                    <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                                </button>
                                <div class="mijovideos_subscribe_count mijovideos_subscribe_count_vp">
                                    <span class="subs_count" id="subs_count<?php echo $this->item->channel_id ?>"><?php echo $this->item->channel_subs; ?></span>
                                </div>
                                <button class="mijovideos_button subscribed" style="display:none" id="unsubscribe_button">
                                    <span class="mijovideos_button_image"></span>
                                    <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?>
                                </button>
                            <?php } else { ?>
                                <button class="mijovideos_button subscribe" style="display:none" id="subscribe_button">
                                     <span class="mijovideos_redbutton_image"></span>
                                    <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                                </button>
                                <div class="mijovideos_subscribe_count mijovideos_subscribe_count_vp" style="display:none">
                                    <span class="subs_count" id="subs_count<?php echo $this->item->channel_id ?>"><?php echo $this->item->channel_subs; ?></span>
                                </div>
                                <button class="mijovideos_button subscribed" id="unsubscribe_button">
                                    <span class="mijovideos_button_image"></span>
                                    <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?>
                                </button>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="mijovideos_views_info_vp">
                    <?php if ($this->item->hits) { ?>
                        <div class="mijovideos_views_count_vp"><?php echo number_format($this->item->hits); ?>
                            <?php if ($this->item->hits < 1000) { ?>
                                <?php echo JText::_('COM_MIJOVIDEOS_VIEWS'); ?>
                            <?php } ?>
                        </div>
                    <?php } else { ?>
                        <div class="mijovideos_views_count_vp"><?php echo JText::_('COM_MIJOVIDEOS_NO_VIEWS'); ?></div>
                    <?php } ?>
                    <?php if ($this->config->get('likes_dislikes')) { ?>
                        <?php if ($this->item->likes or $this->item->dislikes) { ?>
                            <div class="stat-bar_vp">
                                <div class="bg-blue bg-blue_vp" style="width:<?php echo ((int)$this->item->likes*100)/((int)$this->item->dislikes+(int)$this->item->likes); ?>%;"></div>
                                <div class="bg-red bg-red_vp" style="width:<?php echo ((int)$this->item->dislikes*100)/((int)$this->item->dislikes+(int)$this->item->likes); ?>%;"></div>
                            </div>
                        <?php } ?>
                        <div class="views_likes_dislikes_vp">
                            <div class="like_image_div_vp">
                                <span class="like_image_vp"></span>
                                <span class="likes_count"> <span id="mijovideos_like1"><?php echo number_format($this->item->likes); ?></span></span>
                            </div>
                            <div class="dislike_image_div_vp">
                                <span class="dislike_image_vp"></span>
                                <span class="dislikes_count"><span id="mijovideos_like2"><?php echo number_format($this->item->dislikes); ?></span></span>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="mijovideos_actions_wrap_vp">
                <!-- Nav tabs -->
                <div class="mijovideos_tabs">
                    <?php if ($this->config->get('likes_dislikes')) { ?>
                    <div class="mijovideos_actions_vp_wrap">
                        <div class="mijovideos_actions_vp">
                            <div class="mijovideos_like_actions_vp">
                                <button class="mijovideos_button <?php if($this->checklikesdislikes == 1) echo 'inactive_vp'; else echo 'active_vp'; ?>" id="like_action_vp">
                                    <div class="like_button" id="like1"></div>
                                    <span class="like_button_1_vp"></span>
                                    <span>&nbsp;<?php echo JText::_('COM_MIJOVIDEOS_LIKE'); ?></span>
                                </button>
                                <button class="mijovideos_button <?php if($this->checklikesdislikes == 2) echo 'inactive_vp'; else echo 'active_vp'; ?>" id="dislike_action_vp">
                                    <div class="dislike_button" id="like2"></div>
                                    <span class="dislike_button_1_vp"></span>
                                    <span>&nbsp;<?php echo JText::_('COM_MIJOVIDEOS_DISLIKE'); ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <div class="mijovideos_vp_tabs">
                        <ul>
                            <li class="active"><a data-toggle="about"><?php echo JText::_('COM_MIJOVIDEOS_ABOUT'); ?></a></li>
                            <li><a data-toggle="share"><?php echo  JText::_('COM_MIJOVIDEOS_SHARE'); ?></a></li>
                            <?php if($this->config->get('playlists')) { ?>
                                <li><a data-toggle="addto"><?php echo JText::_('COM_MIJOVIDEOS_ADDTO'); ?></a></li>
                            <?php } ?>
                            <li><a data-toggle="report"   class="mijovideos_report_tab"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="mijovideos_tabs-contents">
                    <div class="tab_content" id="about">
                       <?php echo $this->loadTemplate('description'); ?>
                    </div>
                    <div class="tab_content" id="share">
                       <?php echo $this->loadTemplate('share'); ?>
                    </div>
                     <?php if($this->config->get('playlists')) { ?>
                        <div class="tab_content" id="addto">
                           <?php echo $this->loadTemplate('addto'); ?>
                        </div>
                    <?php } ?>
                    <div class="tab_content" id="report">
                       <?php echo $this->loadTemplate('report'); ?>
                    </div>
                </div>
            </div>
			<?php if ($this->config->get('comments') != "0") { ?>
				<div class="mijovideos_comments"><?php MijoVideos::get('utility')->trigger('getComments', array($this->item->id, $this->item->title)); ?></div>
			<?php } ?>
        </div>
        <div class="clr"></div>
    </div>
</div>
<?php if ($this->config->get('likes_dislikes')) { ?>
    <script type="text/javascript"><!--
    jQuery(function(){
        jQuery(".mijovideos_tabs-contents div.tab_content").hide();
        jQuery(".mijovideos_tabs-contents div.tab_content:first-child").show();
        jQuery("div.mijovideos_tabs ul li a").click(function(){
            jQuery(".mijovideos_tabs ul li a").parent().removeClass("active");
            jQuery(this).parent().addClass("active");
            var id = jQuery(this).data('toggle');
            jQuery(".mijovideos_tabs-contents div.tab_content").hide();
            jQuery("#"+id).show();
        });
    });
        jQuery('#like_action_vp,#dislike_action_vp').click(function() {
            var id = jQuery(this).children().attr("id");
            var type = id.replace("like","");
            jQuery.ajax({
                url: 'index.php?option=com_mijovideos&view=video&task=checkLikesDislikes&item_type=videos&item_id=<?php echo $this->item->id; ?>',
                type: 'post',
                data: {type: type},
                dataType: 'json',
                success: function(json) {
                    if (json['success']) {
                        var count = jQuery('#mijovideos_like'+type).text();
                        var oldtype = json['type'];
                        if(json['type'] == -1) {
                            jQuery.ajax({
                                url: 'index.php?option=com_mijovideos&view=video&task=likeDislikeItem&item_type=videos&item_id=<?php echo $this->item->id; ?>',
                                type: 'post',
                                data: {type: type},
                                dataType: 'json',
                                success: function(json) {
                                    if (json['success']) {
                                        jQuery('#'+id).parent().removeClass('active_vp').addClass('inactive_vp');
                                        jQuery('#mijovideos_like'+type).text(parseInt(count)+1);
                                    }
                                    if (json['redirect']) location = json['redirect'];
                                }
                            });
                        } else {
                            if(json['type'] == type){
                                jQuery.ajax({
                                    url: 'index.php?option=com_mijovideos&view=video&task=likeDislikeItem&item_type=videos&item_id=<?php echo $this->item->id; ?>',
                                    type: 'post',
                                    data: {type: type, change: -1},
                                    dataType: 'json',
                                    success: function(json) {
                                        if (json['success']) {
                                            jQuery('#'+id).parent().removeClass('inactive_vp').addClass('active_vp');
                                            jQuery('#mijovideos_like'+type).text(parseInt(count)-1);
                                        }
                                        if (json['redirect']) location = json['redirect'];
                                        }
                                });
                            } else {
                                jQuery.ajax({
                                    url: 'index.php?option=com_mijovideos&view=video&task=likeDislikeItem&item_type=videos&item_id=<?php echo $this->item->id; ?>',
                                    type: 'post',
                                    data: {type: type, change: 1},
                                    dataType: 'json',
                                    success: function(json) {
                                        if (json['success']) {
                                            jQuery('#'+id).parent().removeClass('active_vp').addClass('inactive_vp');
                                            jQuery('#like'+oldtype).parent().removeClass('inactive_vp').addClass('active_vp');
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
<?php } ?>
<?php if($this->config->get('subscriptions')) { ?>
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
                            jQuery(".mijovideos_subscribe_count").show();
                            jQuery('#'+id+' #unsubscribe_button').hide();
                            jQuery('#'+id+' #subscribe_button').show();
                            jQuery('#subs_count'+id).text(parseInt(count) - 1);
                            jQuery('#subs_count'+id).show();
                        } else {
                            jQuery(".mijovideos_subscribe_count").hide();
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
<?php } ?>