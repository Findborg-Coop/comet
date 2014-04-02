/**
 * @package		MijoVideos
 * @copyright	2009-2014 Mijosoft LLC, mijosoft.com
 * @license		GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */
jQuery(document).ready(function() {
    var body = jQuery("body");
    body.on('click', '.video_watch_later_button', function () {
        var id = jQuery(this).children().attr("class").match(/(\d+)/g)[0];
        var video_id = jQuery(this).attr("class").match(/(\d+)/g)[0];
        jQuery.ajax({
            url: 'index.php?option=com_mijovideos&view=playlists&format=raw&task=addVideoToPlaylist',
            type: 'post',
            data: {playlist_id: id, video_id: video_id},
            dataType: 'json',
            success: function (json) {
                if (json['success']) {
                    var video = jQuery(".mijovideos_video" + video_id);
                    video.removeClass("video_watch_later_button");
                    video.addClass("video_added_button");
                    video.children(".mijovideos_watch_later" + id).removeClass("video_watch_later");
                    video.children(".mijovideos_watch_later" + id).addClass("video_added");
                }
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['error']) {
                    jQuery('.playlist_notification').html('<div class="mijovideos_warning" style="display: none;"><div class="mijovideos_warning_image"></div>' + json['error'] + '</div>');
                    var warning = jQuery('.mijovideos_warning');
                    warning.fadeIn('slow');
                    warning.delay(5000).fadeOut('slow');
                }
            }
        });
    });
    body.on('click', '.video_added_button', function () {
        var id = jQuery(this).children().attr("class").match(/(\d+)/g)[0];
        var video_id = jQuery(this).attr("class").match(/(\d+)/g)[0];
        jQuery.ajax({
            url: 'index.php?option=com_mijovideos&view=playlists&format=raw&task=removeVideoFromPlaylist',
            type: 'post',
            data: {playlist_id: id, video_id: video_id},
            dataType: 'json',
            success: function (json) {
                if (json['success']) {
                    var video = jQuery(".mijovideos_video" + video_id);
                    video.removeClass("video_added_button");
                    video.addClass("video_watch_later_button");
                    video.children(".mijovideos_watch_later" + id).removeClass("video_added");
                    video.children(".mijovideos_watch_later" + id).addClass("video_watch_later");
                }
                if (json['redirect']) {
                    location = json['redirect'];
                }
                if (json['error']) {
                    jQuery('.playlist_notification').html('<div class="mijovideos_warning" style="display: none;"><div class="mijovideos_warning_image"></div>' + json['error'] + '</div>');
                    var warning = jQuery('.mijovideos_warning');
                    warning.fadeIn('slow');
                    warning.delay(5000).fadeOut('slow');
                }
            }
        });
    });
});