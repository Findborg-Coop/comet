<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ; ?>
<div class="mijovideos_description_vp">
    <p class="video_published_date_vp"><?php echo JText::_('COM_MIJOVIDEOS_PUBLISHED'); ?> <?php echo JHTML::_('date', $this->item->created, JText::_('DATE_FORMAT_LC4')); ?></p>
    <div class="mijovideos_expander_collapsed"><?php echo $this->item->introtext; ?></div>
    <div class="mijovideos_expand_vp" style="display: none">
        <div class="video_description"><?php echo $this->item->description; ?></div>
        <div class="video_custom_fields">
            <?php if($this->config->get('categories')) { ?>
                <div class="title_vp">
                    <?php echo JText::_('COM_MIJOVIDEOS_CATEGORY'); ?>
                </div>
                <div class="content_vp">
                    <?php
                    $cats = array();
                    foreach($this->item->categories as $category)  {
                        $category_url = JRoute::_('index.php?option=com_mijovideos&view=category&category_id='.$category->id.$this->Itemid);
                        $cats[] = '<a href="'.$category_url.'" >'.$category->title.'</a>';
                    }

                    echo implode(', ', $cats);
                    ?>
                </div>
            <?php } ?>
            <br />
            <?php if (MijoVideos::is31() and !empty($this->item->tags) and $this->config->get('tags')) { ?>
                <div class="title_vp">
                    <?php echo JText::_('COM_MIJOVIDEOS_TAGS'); ?>
                </div>
                <div class="content_vp">
                    <?php
                    $tags = array();
                    foreach($this->item->tags as $tag)  {
                        $tag_url = JRoute::_('index.php?option=com_tags&view=tag&id='.$tag->id.':'.$tag->alias);
                        $tags[] = '<a href="'.$tag_url.'" >'.$tag->title.'</a>';
                    }

                    echo implode(', ', $tags);
                    ?>
                </div>
                <br />
            <?php } ?>
            <?php if ($this->config->get('custom_fields')) { ?>
                <?php
                if (!empty($this->fields)) {
                    foreach ($this->fields as $field) { ?>
                        <div class="title_vp">
                            <?php echo $field->title; ?>
                        </div>
                        <div class="content_vp">
                            <?php echo str_replace('***', ', ', $field->field_value); ?>
                        </div>
                        <br />
                    <?php }
                } ?>
            <?php } ?>
        </div>
    </div>
    <div class="video_more_vp"><button type="button" class="video_more_buttons_vp"><?php echo JText::_('COM_MIJOVIDEOS_SHOW_MORE'); ?></button></div>
</div>
<script type="text/javascript"><!--
    jQuery(".video_more_buttons_vp").toggle(showPanel,hidePanel);
    function showPanel() {
        jQuery(".mijovideos_expand_vp").show();
        jQuery('.mijovideos_expander_collapsed').hide();
        jQuery(".mijovideos_more_button").text('<?php echo JText::_('COM_MIJOVIDEOS_SHOW_LESS'); ?>')
    }
    function hidePanel() {
        jQuery(".mijovideos_expand_vp").hide();
        jQuery('.mijovideos_expander_collapsed').show();
        jQuery(".mijovideos_more_button").text('<?php echo JText::_('COM_MIJOVIDEOS_SHOW_MORE'); ?>');
    }
    //--></script>