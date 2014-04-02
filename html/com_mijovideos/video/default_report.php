<?php
/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
# No Permission
defined( '_JEXEC' ) or die ; ?>
<form method="post" name="submitReport" id="submitReport" action="<?php echo JRoute::_('index.php?option=com_mijovideos&view=video&task=submitReport'); ?>">
    <div class="report_notification"></div>
    <div class="mijovideos_report">
        <?php echo $this->lists['reasons']; ?><br>
		<?php $i = 0; foreach ($this->reasons as $reason) { $i++; ?>
            <div class="mijovideos_report_description<?php echo $i; ?> options_vp" style="display: none">
               <?php echo $reason->description; ?>
            </div>
        <?php } ?>
        <div class="mijovideos_report_explanation">
            <textarea class="mijovideos_report_text_vp" name="mijovideos_report" id="mijovideos_report" cols="40" rows="3" class="" aria-invalid="false"></textarea>
        </div>
        <a class="mijovideos_button" id="mijovideos_button_vp">
            <?php echo JText::_('COM_MIJOVIDEOS_SUBMIT'); ?>
        </a>
    </div>
    <input type="hidden" name="item_id" value="<?php echo $this->item->id; ?>" />
    <input type="hidden" name="item_type" value="videos" />
    <?php echo JHTML::_('form.token'); ?>
</form>
<script type="text/javascript"><!--
    jQuery('#mijovideos_button_vp').click(function() {
        var postdata = jQuery('#submitReport').serialize();
        jQuery.ajax({
            url: 'index.php?option=com_mijovideos&view=video&task=submitReport',
            type: 'post',
            data: postdata,
            dataType: 'json',
            success: function(json) {
                if (json['success']) {
                    jQuery('.report_notification').html('<div class="mijovideos_success" style="display: none;">' + json['success'] + '</div>');
                    jQuery('.mijovideos_success').fadeIn('slow');
                    jQuery('.mijovideos_success').delay(5000).fadeOut('slow');
                    jQuery('#mijovideos_report').val('');

                }
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['error']) {
                    jQuery('#notification').html('<div class="mijovideos_warning" style="display: none;">' + json['error'] + '</div>');
                    jQuery('.mijovideos_warning').fadeIn('slow');
                    jQuery('.mijovideos_warning').delay(5000).fadeOut('slow');
                }
            }
        });
    });
    //--></script>	
<script type="text/javascript"><!--
   
    jQuery("#mijovideos_reasons").change(function(){
        var val=jQuery(this).val();
        jQuery(".options_vp").hide();
        jQuery('.mijovideos_report_description'+val).show();
    });
//--></script>