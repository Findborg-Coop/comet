<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ;
$url = JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this-> item->id.$this->Itemid);
$tmpl = JFactory::getApplication()->getTemplate();
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
	
	
	<div class="mijovideos_box_content">
	<!-- content -->
        <?php if ($this->item->banner and file_exists(JPATH_ROOT.'/media/com_mijovideos/images/channels/' . $this->item->id . '/banner/thumb/' . $this->item->banner)) {
            $background_image = "url(media/com_mijovideos/images/channels/" . $this->item->id . "/banner/thumb/" .$this->item->banner.") no-repeat;";
         } else {
            $background_image = "";
         } ?>
        <div class="banner_image" style="background: <?php echo $background_image; ?>; background-repeat: round;">
             <a href="<?php echo $url; ?>">
                <img class="channel-items-list-thumb" src="<?php echo $utility->getThumbPath($this->item->id, 'channels', $this->item->thumb); ?>" title="<?php echo $this->item->title; ?>" alt="<?php echo $this->item->title; ?>"/>
            </a>
        </div>
        <form method="post" name="adminForm" id="adminForm" action="<?php echo JRoute::_('index.php?option=com_mijovideos&channel_id='.$this->item->id.'&view=channel'.$this->Itemid); ?>">
        <div class="mijovideos_channel_header">
            <div class="mijovideos_channel_title">
                <h1><a href="<?php echo JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this->item->id.$this->Itemid); ?>"><?php  
                echo $this->item->title;
                ?></a></h1>
            </div>
            <?php if (MijoVideos::get('channels')->getDefaultChannel()->id == $this->item->id or $this->item->share_others) { ?>
                <span class="mijovideos_upload">
                    <a href="<?php echo MijoVideos::get('utility')->route(JUri::base() . 'index.php?option=com_mijovideos&view=upload&channel_id='.$this->item->id.'&dashboard=1')?>" class="mijovideos_upload_btn">
                        <?php echo JText::_('COM_MIJOVIDEOS_UPLOAD'); ?>
                    </a>
                </span>
            <?php } ?>
            <?php if ($this->config->get('subscriptions')) { ?>
                <div class="mijovideos_subscribe mijovideos_subscribe_cp" id="<?php echo $this->item->id ?>">
                    <?php if (is_null($this->checksubscription)) { ?>
                        <button class="mijovideos_button subscribe" onclick="return false;" id="subscribe_button">
                         <span class="mijovideos_redbutton_image"></span>   <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                        </button>
                        <button class="mijovideos_button subscribed" onclick="return false;" style="display:none" id="unsubscribe_button"><span class="mijovideos_button_image"></span><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                    <?php } else { ?>
                        <button class="mijovideos_button subscribe" onclick="return false;" style="display:none" id="subscribe_button">
                            <span class="mijovideos_redbutton_image"></span>
                            <?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBE'); ?>
                        </button>
                        <button class="mijovideos_button subscribed" onclick="return false;" id="unsubscribe_button"><span class="mijovideos_button_image"></span><?php echo JText::_('COM_MIJOVIDEOS_SUBSCRIBED'); ?></button>
                    <?php } ?>

                    <div class="mijovideos_subscribe_count mijovideos_subscribe_count_cp"><span class="subs_count" id="subs_count<?php echo $this->item->id ?>"><?php echo number_format($this->item->subs); ?></span></div>
                </div>
            <?php } ?>
        </div>
             <!-- Nav tabs -->
            <div class="mijovideos_tabs">
                <ul>
                    <li class="active"><a data-toggle="videos"><?php echo JText::_('COM_MIJOVIDEOS_VIDEOS'); ?></a></li>
                    <?php if ($this->config->get('comments') != "0") { ?>
                        <li><a data-toggle="comments"><?php echo JText::_('COM_MIJOVIDEOS_COMMENTS') ?></a></li>
                    <?php } ?>
                     <li><a data-toggle="description"><?php echo JText::_('COM_MIJOVIDEOS_ABOUT'); ?></a></li>
                </ul>
                <div class="magnifying_glass"></div>
                    <div class="mijovideos_searchbox_cp">
                        <input type="text" name="mijovideos_search" id="mijovideos_search" placeholder="Search..." value="<?php echo empty($this->lists['search']) ? "" : $this->lists['search']; ?>" onchange="document.adminForm.submit();" />
                    </div>
            </div>
            <!-- Tab panes -->
            <div class="mijovideos_tabs-contents">
                <div class="tab_content" id="videos">
                    <div class="mijovideos_subheader_cp">
                        <div class="mijovideos_filter_videos_cp"><?php echo $this->lists['filter_videos']; ?></div>
                        <div class="wrap_cp">
                            <div class="mijovideos_filter_videos_1_cp"><?php echo $this->lists['order']; ?></div>
                            <div class="mijovideos_flow_select_cp">
                                 <a class="mijovideos_button <?php echo (strpos($this->display, 'grid') !== false) ? 'toggled' : ''; ?>" href="<?php echo JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this->item->id.'&display=grid'.$this->Itemid); ?>" title="<?php echo JText::_('COM_MIJOVIDEOS_GRID'); ?>"><h4 class="mijovideos_button_grid_image mijovideos_button_grid_image_cp" style="<?php echo(strpos($this->display, 'grid') !== false) ? "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.")  0 -540px" : "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") -21px -402px"; ?>"></h4></a>
                                <a class="mijovideos_button <?php echo (strpos($this->display, 'grid') === false) ? 'toggled' : ''; ?>" href="<?php echo JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$this->item->id.'&display=list'.$this->Itemid); ?>" title="<?php echo JText::_('COM_MIJOVIDEOS_LIST'); ?>"><h4 class="mijovideos_button_grid_image mijovideos_button_list_image_cp" style="<?php echo(strpos($this->display, 'grid') === false) ? "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") -70px -242px" : "background: no-repeat url(".JUri::base().'templates/'.$tmpl.'/html/com_mijovideos/images/mijovideos_image.png'.") -55px -209px"; ?>"></h4></a>
                            </div>
                        </div>
                    </div>
                        <input type="hidden" name="option" value="com_mijovideos" />
                        <input type="hidden" name="view" value="channel" />
                        <input type="hidden" name="task" value="" />
                        <input type="hidden" name="channel_id" value="<?php echo $this->item->id; ?>" />
                        <input type="hidden" name="filter_order_Dir" value="<?php echo $this->lists['order_Dir']; ?>" />
                        <?php echo JHTML::_('form.token'); ?>
                        <div class="clr"></div>
                        <div id="channel_items_cp">
                            <?php echo $this->loadTemplate($this->display); ?>
                        </div>
                        <?php if($this->total_items > $this->config->get('videos_per_page')) { ?>
                            <div class="video_more">
                                <button type="button" id="loadmore" class="video_more_buttons"><?php echo JText::_('COM_MIJOVIDEOS_LOAD_MORE'); ?></button>
                                <input id="pages" type="hidden" value="<?php echo $this->total_pages; ?>">
                            </div>
                        <?php } ?>
                    </form>
                </div>
                <?php if ($this->config->get('comments') != "0") { ?>
                    <div class="tab_conent" id="comments"><?php MijoVideos::get('utility')->trigger('getComments', array($this->item->id, $this->item->title)); ?></div>
                <?php } ?>
                <div class="tab_content" id="description">  
                    <div class="mijovideos_description_cp"><?php echo  $this->item->description; ?></div>
                    <div class="mijovideos_description_stats_cp">
                        <?php if($this->config->get('subscriptions')) { ?>
                            <div class="title"><?php echo number_format($this->item->subs); ?></div> <?php echo $this->item->subs > 1 ? JText::_('COM_MIJOVIDEOS_SUBSCRIBERS') : JText::_('COM_MIJOVIDEOS_SUBSCRIBER'); ?><br>
                        <?php } ?>
                        <div class="title"><?php echo number_format($this->item->hits); ?></div> <?php echo $this->item->hits > 1 ? JText::_('COM_MIJOVIDEOS_VIEW') : JText::_('COM_MIJOVIDEOS_VIEWS'); ?><br>
                        <div class="content"><?php echo JText::_('COM_MIJOVIDEOS_JOINED'); ?> <?php echo JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC4')); ?></div>
                    </div>
                </div>
            </div>
            
	<!-- content // -->
    </div>
</div>
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
jQuery("#mijovideos_search").hide();
jQuery("#mijovideos_search").css({"width":0,"height":0});
jQuery('.magnifying_glass').click(function(){
    jQuery(this).hide();
    jQuery("#mijovideos_search").show();
    jQuery("#mijovideos_search").animate({"height":"20px"},200).animate({"width":"218px"},200); 
    //jQuery('.mijovideos_searchbox').show('slide',{direction: "right" },1000);
});
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
<script>
    jQuery(function(){
        var page = 1;
        var pages = jQuery("#pages").val(); //TOTAL NUMBER OF PAGES

        //WHEN THE 'LOAD MORE' BUTTON IS PRESSED
        jQuery("#loadmore").live("click", function(){
            var next = page+=1;

            jQuery.ajax({
                url: 'index.php?option=com_mijovideos&view=channel&channel_id=<?php echo $this->item->id; ?>',
                type: 'post',
                data: 'page='+next,
                dataType: 'json',
                success: function(json) {
                    if(next==pages){
                        jQuery("#loadmore").remove();
                    }
                    jQuery("#channel_items_cp").append(json);
                }
            });
        });
    });
</script>