<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ; ?>
<div class="mijovideos_share_tabs">
    <ul>
        <li class="active"><a data-toggle="share_this_video"><?php echo JText::_('COM_MIJOVIDEOS_SHARE_THIS_VIDEO'); ?></a></li>
        <li><a data-toggle="embed"><?php echo  JText::_('COM_MIJOVIDEOS_EMBED'); ?></a></li>
    </ul>
</div>
<!-- Tab panes -->
<div class="mijovideos_share_tabs-contents">
    <div class="tab_of_share" id="share_this_video">
        <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
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

    <div class="tab_of_share" id="embed">
        <textarea class="mijovideos_embed"><?php echo "<iframe width=\"600\" height=\"350\" src=\"".JRoute::_("index.php?option=com_mijovideos&view=video&video_id=".$this->item->id."&Itemid=".$this->Itemid."&layout=player&tmpl=component")."\" frameborder=\"0\" allowfullscreen></iframe>"; ?></textarea>
    </div>
</div>
<script type="text/javascript">
    jQuery(function(){
        jQuery(".mijovideos_share_tabs-contents div.tab_of_share").hide();
        jQuery(".mijovideos_share_tabs-contents div.tab_of_share:first-child").show();
        jQuery("div.mijovideos_share_tabs ul li a").click(function(){
            jQuery(".mijovideos_share_tabs ul li a").parent().removeClass("active");
            jQuery(this).parent().addClass("active");
            var id = jQuery(this).data('toggle');
            jQuery(".mijovideos_share_tabs-contents div.tab_of_share").hide();
            jQuery("#"+id).show();
        });
    });
</script>