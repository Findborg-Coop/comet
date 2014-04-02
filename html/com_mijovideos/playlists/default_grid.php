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
	$n = count($this->items); ?>
	<div class="wrap_psp">
		<?php for ($i = 0; $i < $n; $i++) {
			$item = $this->items[$i];

            if (empty($item->videos)) {
                continue;
            } else {
                $video_id = $item->videos[0]->video_id;
            }

            if(!empty($item->thumb)) {
				$thumb = $utility->getThumbPath($item->id, 'videos', $item->thumb);
			} else {
				$thumb = $utility->getThumbPath($video_id, 'playlists', $item->videos[0]->thumb);
			}
			$url = JRoute::_('index.php?option=com_mijovideos&view=video&video_id='.$video_id.'&playlist_id='.$item->id.$this->Itemid);
			$channel_url = JRoute::_('index.php?option=com_mijovideos&view=channel&channel_id='.$item->channel_id.$this->Itemid); ?>
				<div class="playlists-items-grid-box_psp">
					<a href="<?php echo $url; ?>">
						<div class="view_full_playlist_grid"><span class="mijovideos_num_videos"><?php echo isset($item->total) ? $item->total : '0' ; ?>&nbsp;<br/><?php echo JTEXT::_('COM_MIJOVIDEOS_VIDEOS')?></span><img class="video_view_1_psp" src="<?php echo isset($item->videos[1]) ? ((strpos($item->videos[1]->thumb,'http://') === false) ? JURI::base().'media/com_mijovideos/images/videos/'.$item->videos[1]->thumb : $item->videos[1]->thumb) : ''; ?>"/><img class="video_view_2_psp" src="<?php echo isset($item->videos[2]) ? ((strpos($item->videos[2]->thumb,'http://') === false) ? JURI::base().'media/com_mijovideos/images/videos/'.$item->videos[2]->thumb : $item->videos[2]->thumb) : ''; ?>"/></div>
						<div class="mijovideos_blackout mijovideos_blackout_psp"><span class="mijovideos_playlist"><span class="mijovideos_right_arrow"></span><?php echo JText::_('COM_MIJOVIDEOS_PLAY_ALL'); ?></span></div>
						<img class="playlists-items-grid-thumb_psp" src="<?php echo $thumb; ?>" title="<?php echo $item->title; ?>" alt="<?php echo $item->title; ?>"/>
					</a>
					<div class="playlists-items-grid-box-content_psp">
						<h3 class="mijovideos_box_h3_psp mijovideos_box_h3_psp_pg">
							<a href="<?php echo $url; ?>" title="<?php echo $item->title; ?>">
                                <?php echo $this->escape(JHtmlString::truncate($item->title, $this->config->get('title_truncation'), false, false)); ?>
							</a>
						</h3>
						<div class="playlists-meta">
							<div class="mijovideos-meta-info_psp">
								<div class="created_by_psp">
									<span class="key"><?php echo JText::_('COM_MIJOVIDEOS_CREATED_BY'); ?></span>
									<span class="value"><a href="<?php echo $channel_url; ?>" title="<?php echo $item->channel_title; ?>">
                                            <?php echo $this->escape(JHtmlString::truncate($item->channel_title, $this->config->get('title_truncation'), false, false)); ?>
                                        </a>
                                    </span>
								</div>
								<div class="date-created_psp">
									<span class="key"><?php echo JText::_('COM_MIJOVIDEOS_DATE_CREATED'); ?></span>
									<span class="value"><?php echo JHTML::_('date', $item->created, JText::_('DATE_FORMAT_LC4')); ?></span>
								</div>
							</div>
						</div>
					</div>
				</div>

		<?php } ?>
	</div>
<?php } ?>