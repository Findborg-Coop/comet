
<?php
// no direct access
	defined('_JEXEC') or die;
?>

<?php if ($showTop) : ?>
	<?php if ($this->countModules('top-a or top-b or top-c or top-d or top-e or top-f')) : ?>
<div class="has-subheader" id="topwrap-outer" style="margin-left:<?php echo $topouter_marginleft;?>; margin-top: <?php echo $topouter_margintop;?>; margin-bottom:<?php echo $topouter_marginbottom;?>; margin-right:<?php echo $topouter_marginright;?>;max-width:<?php echo $topouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $topouter_background;?>;">
	<div id="topwrap-inner" class="" style="position:relative;background:<?php echo $topmod_background;?>; margin-left:<?php echo $topmod_marginleft;?>;  margin-right:<?php echo $topmod_marginright;?>; max-width:<?php echo $topmod_maxwidth;?>;color:<?php echo $top_Textcolor;?>;">
		
			<div id="topmodule-container" >
			<div class="" style="padding:5px;">
			<div class="row clearfix " >
			<?php if ($showTopa) : ?>
				<div class="<?php echo $mainmod3_width; ?>">
				<jdoc:include type="modules" name="top-a" style="xhtml"/>
				</div>
				<?php endif; ?>
			<?php if ($showTopb) : ?>
				<div class="<?php echo $mainmod3_width; ?>">
				<jdoc:include type="modules" name="top-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showTopc) : ?>
				<div class="<?php echo $mainmod3_width; ?>">
				<jdoc:include type="modules" name="top-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showTopd) : ?>
				<div class="<?php echo $mainmod3_width; ?>">
				<jdoc:include type="modules" name="top-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showTope) : ?>
				<div class="<?php echo $mainmod3_width; ?>">
				<jdoc:include type="modules" name="top-e" style="xhtml"/>
				</div>
				<?php endif; ?>	
				<?php if ($showTopf) : ?>	
				<div class="<?php echo $mainmod3_width; ?>">
				<jdoc:include type="modules" name="top-f" style="xhtml"/>
				</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	
	</div>
</div>
</div>
<?php endif; ?>
<?php endif; ?>
<?php if ($this->params->get('showHeadernav') == '1'):?> 
<div id="nav-outer" style="margin-left:<?php echo $this->params->get('navouter_marginleft');?>;margin-top: <?php echo $this->params->get('navouter_margintop');?>;margin-bottom:<?php echo $this->params->get('navouter_marginbottom');?>;margin-right:<?php echo $this->params->get('navouter_marginright');?>; max-width:<?php echo $this->params->get('navouter_maxwidth');?>;" class="">
	<div id="headernav-strip"class="strip" style="background:<?php echo $this->params->get('navouter_background');?>;">
		<div id="navwrap-inner" class="" style="background:<?php echo $this->params->get('navmod_background');?>; margin-left:<?php echo $this->params->get('navmod_marginleft');?>;margin-right:<?php echo $this->params->get('navmod_marginright');?>; max-width:<?php echo $this->params->get('navmod_maxwidth');?>;color:<?php echo $this->params->get('nav_Textcolor');?>;">
		<div class="clearfix leading-3 mb1 fb accent white dark">
		<div class="left px1 leading-3"><a class="left px1 p bold leading-3"href="<?php echo JURI::base(true) ?>"style="color:black">
						Findborg
						<!-- <span>findborg</span> -->
						</a></div>
						<div class="left">
							 <!-- Left Nav Content -->
      <jdoc:include type="modules" name="navsearch-left" style="html" />
      <!-- End of Left Nav Content -->
						</div>
        <div class="right px1 fb accent green lighter">
         
          <a href="#!" class=""><i class="ion-ios7-plus-outline" style="color:orange;"></i></a>
        </div>
        <div class="right px1">
         <!-- Right Nav Content -->
		<jdoc:include type="modules" name="navsearch-right" style="html" />
      <!-- Right Nav Content End -->
      </div>
        <div class="oh"><!--Search or Middle Content in Bar -->
		<jdoc:include type="modules" name="navsearch" style="html" />
      <!--End of Middle Content in Bar --></div>
        
      </div>

		</div>
	</div>
</div>
<?php endif; ?>
<!-- SEARCH BAR -->
<div class="">
  <div id="subnavwrap-outer" style="min-height: 35px;box-shadow: 0 1px #F5F5F5;margin-left:<?php echo $subnavouter_marginleft;?>;margin-top: <?php echo $subnavouter_margintop;?>;margin-bottom:<?php echo $subnavouter_marginbottom;?>;margin-right:<?php echo $subnavouter_marginright;?>; max-width:<?php echo $subnavouter_maxwidth;?>;">
	<div class="strip" style="background:<?php echo $subnavouter_background;?>;">
		<div id="subnavwrap-inner" class="" style="position:relative; background:<?php echo $subnavmod_background;?>; margin-left:<?php echo $subnavmod_marginleft;?>;margin-right:<?php echo $subnavmod_marginright;?>; max-width:<?php echo $subnavmod_maxwidth;?>;color:<?php echo $subnav_Textcolor;?>;">
		
		<div class="row clearfix " >
			<div class="grid grid-12">
				<jdoc:include type="modules" name="subnav" style="html" />

					
      
				</div>
			</div>
		</div>

<!-- SEARCH BAR END -->  
				
		</div>
	
	</div>
</div>
</div>
</div>   


<?php if ($showHeader) : ?>
<div id="headerwrap-outer" style="margin-left:<?php echo $headouter_marginleft;?>;margin-top: <?php echo $headouter_margintop;?>;margin-bottom:<?php echo $headouter_marginbottom;?>;margin-right:<?php echo $headouter_marginright;?>; max-width:<?php echo $headouter_maxwidth;?>;" class="">
<div class="strip" style="background:<?php echo $headouter_background;?>;">
	<div id="headerwrap-inner" class="" style="background:<?php echo $headmod_background;?>; margin-left:<?php echo $headmod_marginleft;?>;margin-right:<?php echo $headmod_marginright;?>; max-width:<?php echo $headmod_maxwidth;?>;color:<?php echo $head_Textcolor;?>;">
		
			<div id="headermodule-container" >
			<div class="" style="padding:5px;">
			<div class="row clearfix">
				<?php if ($showHeadera) : ?>
				<div class="<?php echo $mainmod4_width; ?>">
					<div class="content"><jdoc:include type="modules" name="header-a" style="xhtml"/></div>
				</div>
				<?php endif; ?>
				<?php if ($showHeaderb) : ?>
				<div class="<?php echo $mainmod4_width; ?>">
				<jdoc:include type="modules" name="header-b" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showHeaderc) : ?>
				<div class="<?php echo $mainmod4_width; ?>">
				<jdoc:include type="modules" name="header-c" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showHeaderd) : ?>
				<div class="<?php echo $mainmod4_width; ?>">
				<jdoc:include type="modules" name="header-d" style="xhtml"/>
				</div>
				<?php endif; ?>
				<?php if ($showHeadere) : ?>
				<div class="<?php echo $mainmod4_width; ?>">
				<jdoc:include type="modules" name="header-e" style="xhtml"/>
				</div>	
				<?php endif; ?>	
				<?php if ($showHeaderf) : ?>
				<div class="<?php echo $mainmod4_width; ?>">
				<jdoc:include type="modules" name="header-f" style="xhtml"/>
				</div>
				<?php endif; ?>
				</div>
			</div>
		</div>
	
	</div>
</div>
</div>
<?php endif; ?>

 <section>  
 <div class="">
  <div id="subnavwrap-outer" style="margin-left:<?php echo $subnavouter_marginleft;?>;margin-top: <?php echo $subnavouter_margintop;?>;margin-bottom:<?php echo $subnavouter_marginbottom;?>;margin-right:<?php echo $subnavouter_marginright;?>; max-width:<?php echo $subnavouter_maxwidth;?>;">
	<div class="strip" style="background:<?php echo $subnavouter_background;?>;">
		<div id="subnavwrap-inner" class="" style="position:relative; background:<?php echo $subnavmod_background;?>; margin-left:<?php echo $subnavmod_marginleft;?>;margin-right:<?php echo $subnavmod_marginright;?>; max-width:<?php echo $subnavmod_maxwidth;?>;color:<?php echo $subnav_Textcolor;?>;">
		
				<!-- <div id="subnavmodule-container" class="fb-g-r">
					<div class="" style="">
						<div class="">
							<div class="fb-u-1" style="">
							
    						<a href="#" class="fb-menu-heading"><i class='icon-reorder'></i><?php echo $submenu_title; ?></a>
    							<?php echo $submenu; ?> 
							</div>    
			
					</div>
				</div> -->
		</div>
	
	</div>
</div>
</div>
</div>   
</section>
