 <?php
// no direct access
	defined('_JEXEC') or die;
?> 

<!-- This is the Comet Development area -->
<?php if ($showDrawer) : ?>
<!-- DRAWER MODULE AREA -->
<div id="drawerwrap-outer" style="margin-left:<?php echo $drawerouter_marginleft;?>;margin-top: <?php echo $drawerouter_margintop;?>;margin-bottom:<?php echo $drawerouter_marginbottom;?>;margin-right:<?php echo $drawerouter_marginright;?>; max-width:<?php echo $drawerouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $drawerouter_background;?>">
	<div id="drawerwrap-inner" class="" style="background:<?php echo $drawermod_background;?>; margin-left:<?php echo $drawermod_marginleft;?>;margin-right:<?php echo $drawermod_marginright;?>; max-width:<?php echo $drawermod_maxwidth;?>;color:<?php echo $drawer_Textcolor;?>;">
		<div style="padding:5px;">
			<div id="drawermodule-container" class="row clearfix">
			
				<div class="col-md-12"
				<jdoc:include type="modules" name="drawer" style="custom"/>
				</div>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- DRAWER MODULE AREA END -->
<?php endif; ?>
<?php if ($showShowcase) : ?>
<!-- SHOWCASE MODULE AREA -->
<div id="showcasewrap-outer" style="margin-left:<?php echo $showouter_marginleft;?>;margin-top: <?php echo $showouter_margintop;?>;margin-bottom:<?php echo $showouter_marginbottom;?>;margin-right:<?php echo $showouter_marginright;?>; max-width:<?php echo $showouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $showouter_background;?>;">
	<div id="showcasewrap-inner" class="" style="background:<?php echo $showmod_background;?>; margin-left:<?php echo $showmod_marginleft;?>;margin-right:<?php echo $showmod_marginright;?>; max-width:<?php echo $showmod_maxwidth;?>;color:<?php echo $show_Textcolor;?>;">
		
			
			<div class="" style="padding:5px;">
				<div id="showcasemodule-container" class="row clearfix">
				<?php if ($showShowcasea) : ?>
				<div class="<?php echo $mainmod5_width; ?>">
				<jdoc:include type="modules" name="showcase-a" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showShowcaseb) : ?>
				<div class="<?php echo $mainmod5_width; ?>">
				<jdoc:include type="modules" name="showcase-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showShowcasec) : ?>
				<div class="<?php echo $mainmod5_width; ?>">
				<jdoc:include type="modules" name="showcase-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showShowcased) : ?>
				<div class="<?php echo $mainmod5_width; ?>">
				<jdoc:include type="modules" name="showcase-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showShowcasee) : ?>
				<div class="<?php echo $mainmod5_width; ?>">
				<jdoc:include type="modules" name="showcase-e" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showShowcasef) : ?>		
				<div class="<?php echo $mainmod5_width; ?>">
				<jdoc:include type="modules" name="showcase-f" style="xhtml"/>
				</div>
				<?php endif; ?>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- SHOWCASE MODULE AREA END -->
<?php endif; ?>
<?php if ($showBreadcrumb) : ?>
<!-- BREADCRUMB MODULE AREA -->
<div id="breadcrumbwrap-outer" style="margin-left:<?php echo $breadouter_marginleft;?>;margin-top: <?php echo $breadouter_margintop;?>;margin-bottom:<?php echo $breadouter_marginbottom;?>;margin-right:<?php echo $breadouter_marginright;?>; max-width:<?php echo $breadouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $breadouter_background;?>;">
	<div id="breadcrumbwrap-inner" class="" style="background:<?php echo $breadmod_background;?>; margin-left:<?php echo $breadmod_marginleft;?>;margin-right:<?php echo $breadmod_marginright;?>; max-width:<?php echo $breadmod_maxwidth;?>;color:<?php echo $bread_Textcolor;?>;">
		<div style="padding:5px;">
			<div id="breadcrumbmodule-container" class="row clearfix">
			
			<div class="col-md-12">
				<div class="breadcrumbs-pad">
                    <jdoc:include type="modules" name="breadcrumb" />
                </div>
			</div>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- BREADCRUMB MODULE AREA END -->
<?php endif; ?>
<?php if ($showUtility) : ?>
<!-- UTILITY MODULE AREA -->
<div id="utilitywrap-outer" style="margin-left:<?php echo $utilityouter_marginleft;?>;margin-top: <?php echo $utilityouter_margintop;?>;margin-bottom:<?php echo $utilityouter_marginbottom;?>;margin-right:<?php echo $utilityouter_marginright;?>; max-width:<?php echo $utilityouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $utilityouter_background;?>;">
	<div id="utilitywrap-inner" class="" style="background:<?php echo $utilitymod_background;?>; margin-left:<?php echo $utilitymod_marginleft;?>;margin-right:<?php echo $utilitymod_marginright;?>; max-width:<?php echo $utilitymod_maxwidth;?>;color:<?php echo $utility_Textcolor;?>;">
		
		<div class="" style="padding:5px;">
			<div id="utilitymodule-container" class="row clearfix">
				<?php if ($showUtilitya) : ?>
				<div class="<?php echo $mainmod6_width; ?>">
				<jdoc:include type="modules" name="utility-a" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showUtilityb) : ?>
				<div class="<?php echo $mainmod6_width; ?>">
				<jdoc:include type="modules" name="utility-b" style="xhtml"/>
				</div>
				<?php endif; ?>	
				<?php if ($showUtilityc) : ?>
				<div class="<?php echo $mainmod6_width; ?>">
				<jdoc:include type="modules" name="utility-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showUtilityd) : ?>
				<div class="<?php echo $mainmod6_width; ?>">
				<jdoc:include type="modules" name="utility-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showUtilitye) : ?>
				<div class="<?php echo $mainmod6_width; ?>">
				<jdoc:include type="modules" name="utility-e" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showUtilityf) : ?>		
				<div class="<?php echo $mainmod6_width; ?>">
				<jdoc:include type="modules" name="utility-f" style="xhtml"/>
				</div>
				<?php endif; ?>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- UTILITY MODULE AREA END -->
<?php endif; ?>
<?php if ($showFeature) : ?>
<!-- FEATURE MODULE AREA -->
<div id="featurewrap-outer" style="margin-left:<?php echo $featureouter_marginleft;?>;margin-top: <?php echo $featureouter_margintop;?>;margin-bottom:<?php echo $featureouter_marginbottom;?>;margin-right:<?php echo $featureouter_marginright;?>; max-width:<?php echo $featureouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $featureouter_background;?>;">
	<div id="featurewrap-inner" class="" style="background:<?php echo $featuremod_background;?>; margin-left:<?php echo $featuremod_marginleft;?>;margin-right:<?php echo $featuremod_marginright;?>; max-width:<?php echo $featuremod_maxwidth;?>;color:<?php echo $feature_Textcolor;?>;">
		<div class="" style="padding:5px;">
			<div id="drawermodule-container" class="row clearfix">
			
			<?php if ($showFeaturea) : ?>
				<div class="<?php echo $mainmod7_width; ?>">
				<jdoc:include type="modules" name="feature-a" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showFeatureb) : ?>
				<div class="<?php echo $mainmod7_width; ?>">
				<jdoc:include type="modules" name="feature-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showFeaturec) : ?>
				<div class="<?php echo $mainmod7_width; ?>">
				<jdoc:include type="modules" name="feature-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showFeatured) : ?>
				<div class="<?php echo $mainmod7_width; ?>">
				<jdoc:include type="modules" name="feature-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showFeaturee) : ?>
				<div class="<?php echo $mainmod7_width; ?>">
				<jdoc:include type="modules" name="feature-e" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showFeaturef) : ?>
				<div class="<?php echo $mainmod7_width; ?>">
				<jdoc:include type="modules" name="feature-f" style="xhtml"/>
				</div>
				<?php endif; ?>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- FEATURE MODULE AREA END -->
<?php endif; ?>
<?php if ($showMaintop) : ?>
<!-- MAINTOP MODULE AREA -->
<div id="maintopwrap-outer" style="margin-left:<?php echo $mtopouter_marginleft;?>;margin-top: <?php echo $mtopouter_margintop;?>;margin-bottom:<?php echo $mtopouter_marginbottom;?>;margin-right:<?php echo $mtopouter_marginright;?>; max-width:<?php echo $mtopouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $mtopouter_background;?>;">
	<div id="maintopwrap-inner" class="" style="background:<?php echo $mtopmod_background;?>; margin-left:<?php echo $mtopmod_marginleft;?>;margin-right:<?php echo $mtopmod_marginright;?>; max-width:<?php echo $mtopmod_maxwidth;?>;color:<?php echo $mtop_Textcolor;?>;">
		<div class="" style="padding:5px;">
			<div id="drawermodule-container" class="row clearfix">
			
				<?php if ($showMtopa) : ?>
				<div class="<?php echo $mainmod8_width; ?>">
				<jdoc:include type="modules" name="maintop-a" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMtopb) : ?>
				<div class="<?php echo $mainmod8_width; ?>">
				<jdoc:include type="modules" name="maintop-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMtopc) : ?>
				<div class="<?php echo $mainmod8_width; ?>">
				<jdoc:include type="modules" name="maintop-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMtopd) : ?>
				<div class="<?php echo $mainmod8_width; ?>">
				<jdoc:include type="modules" name="maintop-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMtope) : ?>
				<div class="<?php echo $mainmod8_width; ?>">
				<jdoc:include type="modules" name="maintop-e" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMtopf) : ?>
				<div class="<?php echo $mainmod8_width; ?>">
				<jdoc:include type="modules" name="maintop-f" style="xhtml"/>
				</div>
				<?php endif; ?>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- MAINTOP MODULE AREA END -->
<?php endif; ?>
<!-- MAINCONTENT AREA -->
<style type="text/css">

.dp20,.dp25,.dp33,.dp50,.dp100 {float:left;margin-top:15px;}
.dp20 {width:20%;}
.dp25 {width:25%;}
.dp33 {width:33.33%;}
.dp50 {width:50%;}
.dp100 {width:100%;margin-top:0;}
.clr {clear:both;font-size:0;}
#colmask {clear:both;overflow:hidden;position:relative;width:100%;}
#maincol, #wrapper {position:relative;}
.s-c-s #colmid, .s-c-x #colright {float:left;position:relative;width:200%;background: <?php echo $this->params->get('maincontentColor');?>;}
.s-c-s #colright {float:left;left:50%;position:relative;width:100%;}
.s-c-s #col1wrap {float:right;position:relative;right:100%;width:50%;}
.s-c-s #col1pad, .x-c-s #col1, .x-c-s #colmid {overflow:hidden;}
.s-c-s #col1 {overflow:hidden;width:100%;}
.s-c-s #col2 {float:left;position:relative;overflow:hidden;margin-left:-50%;}
.s-c-s #col3 {float:left;position:relative;overflow:hidden;left:0;}
.s-c-x #col1wrap {float:right;position:relative;width:50%;}
.s-c-x #col1 {overflow:hidden;position:relative;right:100%;}
.s-c-x #col2 {float:left;position:relative;}
.x-c-s #colright {float:left;position:relative;right:100%;width:200%;}
.x-c-s #col1wrap {float:left;left:50%;position:relative;width:50%;}
.x-c-s #col3 {float:right;position:relative;}

.colmid{}
.s-c-s .ctr-color1, .s-c-s .ckl-color1, .s-c-x .ckl-color1, .x-c-s .cdr-color1 {background:<?php echo $leftcolumn_color; ?>;}
.s-c-s .ctr-color2, .s-c-s .ckl-color2, .s-c-x .ckl-color2, .x-c-s .cdr-color2 {background:<?php echo $rightcolumn_color; ?>}
.s-c-s #col1pad, .s-c-x #colright, .x-c-s #colright, #wrapper, body {}
.cols-1 .item {display:block;float:none;margin:0;width:100%;}
.cols-2 .item {width:49%;overflow:hidden;}
.cols-3 .item {width:30%;}
.column-1, .column-2 {position:relative;float:left;margin:0;}
.colpad {padding:0 10px;position:relative;}
.column-2 {float:right;width:49%;}
.article_row {overflow:hidden;margin:0 -10px 15px -10px;}
.spacer .module {float:left;}
.spacer.w99 .module {width:100%;}
.spacer.w49 .module {width:49.2%;}
.spacer.w33 .module {width:32.8%;}
#col3{padding:10px;}
#col2{padding:10px;}
#col1{padding:10px;}
</style>
<script type="text/javascript">
$(window).resize(function(){
   console.log('resize called');
   var width = $(window).width();
   if(width >= 0 && width <= 600){
       $('#main-content').removeClass('<?php echo $col_mode; ?>').addClass('x-c-x');
   }
   else{
       $('#main-content').removeClass('x-c-x').addClass('<?php echo $col_mode; ?>');
   }
})
.resize();//trigger the resize event on page load.
</script>
<div id="mcwrap-outer" style="margin-left:<?php echo $this->params->get('maincontent_marginleft');?>;margin-right:<?php echo $this->params->get('maincontent_marginright');?>;margin-top:<?php echo $this->params->get('maincontentouter_margintop');?>;margin-bottom:<?php echo $this->params->get('maincontentouter_marginbottom');?>; max-width:<?php echo $this->params->get('maincontentouter_maxwidth');?>;color:<?php echo $this->params->get('maincontent_Textcolor');?>;">
	<div class="strip" style="background:<?php echo $this->params->get('mainouterColor');?>;padding-top:<?php echo $this->params->get('maincontentouter_paddingtop');?>;padding-bottom:<?php echo $this->params->get('maincontentouter_paddingbottom');?>;">
		<div id="mcwrap-inner" class="" style="margin-left:<?php echo $this->params->get('maincontentmod_marginleft');?>;margin-right:<?php echo $this->params->get('maincontentmod_marginright');?>; max-width:<?php echo $this->params->get('maincontentmod_maxwidth');?>;">
		<!-- MAINCONT START -->
			<div id="main-content" class="<?php echo $col_mode; ?>"style="">
            <div id="colmask" class="ckl-color1" style="">
                <div id="colmid" class="cdr-<?php echo $rightcolumn_color; ?>">
                    <div id="colright" class="ctr-color2" style="">
                        <div id="col1wrap">
							<div id="col1pad">
                            	<div id="col1" style="">
									
									<?php if ($this->countModules('content-top-a or content-top-b or content-top-c')) : ?>
									<div id="mainmods" class="row spacer clearfix">
										<?php if ($showContentTopa) : ?>
										<div class="<?php echo $mainmod_width; ?>">
										<jdoc:include type="modules" name="content-top-a" style="xhtml"/>
										</div>
										<?php endif?>
										<?php if ($showContentTopb) : ?>
										<div class="<?php echo $mainmod_width; ?>">
										<jdoc:include type="modules" name="content-top-b" style="xhtml"/>
										</div>
										<?php endif?>
										<?php if ($showContentTopc) : ?>
										<div class="<?php echo $mainmod_width; ?>">
										<jdoc:include type="modules" name="content-top-c" style="xhtml"/>
										</div>
										<?php endif?>
									</div>
									<?php endif; ?>
                                    <div id="loader" class="component-pad">
                                    <!-- SYSTEM MESSAGES -->
										<div id="message">
		   								 <jdoc:include type="message" />
										</div>
									<!-- SYSTEM MESSAGES END -->
                                        <jdoc:include type="component" />
                                    </div>
									<?php if ($this->countModules('content-bottom-a or content-bottom-b or content-bottom-c')) : ?>
									<div id="mainmods2" class="row spacer clearfix">
									<?php if ($showContentBottoma) : ?>
										<div class="<?php echo $mainmod2_width; ?>">
										<jdoc:include type="modules" name="content-bottom-a" style="xhtml"/>
										</div>
									<?php endif?>
									<?php if ($showContentBottomb) : ?>
										<div class="<?php echo $mainmod2_width; ?>">
										<jdoc:include type="modules" name="content-bottom-b" style="xhtml"/>
										</div>
									<?php endif?>
									<?php if ($showContentBottomc) : ?>
										<div class="<?php echo $mainmod2_width; ?>">
										<jdoc:include type="modules" name="content-bottom-c" style="xhtml"/>
										</div>
									<?php endif?>	
									</div>
									<?php endif; ?>
	                            </div>
							</div>
                        </div>
						<?php if ($leftcolumn_width != 0) : ?>
                        <div id="col2" class="<?php echo $leftcolumn_color; ?>">
                       	 
							
								
                        	<jdoc:include type="modules" name="sidebar-a" style="xhtml"/>
                        	
                        </div>
						<?php endif; ?>
						<?php if ($rightcolumn_width != 0) : ?>
                        <div id="col3" class="<?php echo $rightcolumn_color; ?>">
                        	<jdoc:include type="modules" name="sidebar-b" style="xhtml"/>
                        </div>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
		<!-- MAINCONT END -->
		</div>
	</div>
</div>
<!-- MAINCONTENT AREA END -->

<?php if ($showFullwidth) : ?>
<!-- FULLWIDTH MODULE AREA -->
<div id="fullwidthwrap-outer" style="margin-left:<?php echo $fwidthouter_marginleft;?>;margin-top: <?php echo $fwidthouter_margintop;?>;margin-bottom:<?php echo $fwidthouter_marginbottom;?>;margin-right:<?php echo $fwidthouter_marginright;?>; max-width:<?php echo $fwidthouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $fwidthouter_background;?>;">
	<div id="fullwidthwrap-inner" class="" style="background:<?php echo $fwidthmod_background;?>; margin-left:<?php echo $fwidthmod_marginleft;?>;margin-right:<?php echo $fwidthmod_marginright;?>; max-width:<?php echo $fwidthmod_maxwidth;?>;color:<?php echo $fwidth_Textcolor;?>;">
		<div class="" style="padding:5px;">
			<div id="fullwidthmodule-container" class="row clearfix">
			
				<div class="col-md-12">
				<jdoc:include type="modules" name="fullwidth" style="xhtml"/>
				</div>				
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- FULLWIDTH MODULE AREA END -->
<?php endif; ?>
<?php if ($showMainbottom) : ?>
<!-- MAINBOTTOM MODULE AREA -->
<div id="mbottomwrap-outer" style="margin-left:<?php echo $mbottomouter_marginleft;?>;margin-top: <?php echo $mbottomouter_margintop;?>;margin-bottom:<?php echo $mbottomouter_marginbottom;?>;margin-right:<?php echo $mbottomouter_marginright;?>; max-width:<?php echo $mbottomouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $mbottomouter_background;?>;">
	<div id="mbottomwrap-inner" class="" style="background:<?php echo $mbottommod_background;?>; margin-left:<?php echo $mbottommod_marginleft;?>;margin-right:<?php echo $mbottommod_marginright;?>; max-width:<?php echo $mbottommod_maxwidth;?>;color:<?php echo $mbottom_Textcolor;?>;">
		
			<div id="mbottommodule-container" >
			<div class="" style="padding:5px;">
			<div class="row clearfix">
				<?php if ($showMbottoma) : ?>
				<div class="<?php echo $mainmod10_width; ?>">
				<jdoc:include type="modules" name="mainbottom-a" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMbottomb) : ?>
				<div class="<?php echo $mainmod10_width; ?>">
				<jdoc:include type="modules" name="mainbottom-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMbottomc) : ?>
				<div class="<?php echo $mainmod10_width; ?>">
				<jdoc:include type="modules" name="mainbottom-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMbottomd) : ?>
				<div class="<?php echo $mainmod10_width; ?>">
				<jdoc:include type="modules" name="mainbottom-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showMbottome) : ?>
				<div class="<?php echo $mainmod10_width; ?>">
				<jdoc:include type="modules" name="mainbottom-e" style="xhtml"/>
				</div>	
				<?php endif; ?>
				<?php if ($showMbottomf) : ?>
				<div class="<?php echo $mainmod10_width; ?>">
				<jdoc:include type="modules" name="mainbottom-f" style="xhtml"/>
				</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- MAINBOTTOM MODULE AREA END -->
<?php endif; ?>
<?php if ($showBottom) : ?>
<!-- BOTTOM MODULE AREA -->
<div id="bottomwrap-outer" style="margin-left:<?php echo $bottomouter_marginleft;?>;margin-top: <?php echo $bottomouter_margintop;?>;margin-bottom:<?php echo $bottomouter_marginbottom;?>;margin-right:<?php echo $bottomouter_marginright;?>; max-width:<?php echo $bottomouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $bottomouter_background;?>;">
	<div id="bottomwrap-inner" class="" style="background:<?php echo $bottommod_background;?>; margin-left:<?php echo $bottommod_marginleft;?>;margin-right:<?php echo $bottommod_marginright;?>; max-width:<?php echo $bottommod_maxwidth;?>;color:<?php echo $bottom_Textcolor;?>;">
		<div class="" style="padding:5px;">
			<div id="bottommodule-container" class="row clearfix">
			
				<?php if ($showBottoma) : ?>
				<div class="<?php echo $mainmod11_width; ?>">
				<jdoc:include type="modules" name="bottom-a" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showBottomb) : ?>
				<div class="<?php echo $mainmod11_width; ?>">
				<jdoc:include type="modules" name="bottom-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showBottomc) : ?>
				<div class="<?php echo $mainmod11_width; ?>">
				<jdoc:include type="modules" name="bottom-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showBottomd) : ?>
				<div class="<?php echo $mainmod11_width; ?>">
				<jdoc:include type="modules" name="bottom-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showBottome) : ?>
				<div class="<?php echo $mainmod11_width; ?>">
				<jdoc:include type="modules" name="bottom-e" style="xhtml"/>
				</div>	
				<?php endif; ?>
				<?php if ($showBottomf) : ?>
				<div class="<?php echo $mainmod11_width; ?>">
				<jdoc:include type="modules" name="bottom-f" style="xhtml"/>
				</div>
				<?php endif; ?>
			</div>
		</div>
	
	</div>
</div>
</div>
<!-- BOTTOM MODULE AREA END -->
<?php endif; ?>
<!-- This is the end of the Comet Development area -->


	    
 
 