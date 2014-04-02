<?php
// no direct access
	defined('_JEXEC') or die;
?>
<?php if ($showFooter) : ?>
<!-- Footer -->
 <div id="footerwrap-outer" style="margin-left:<?php echo $footerouter_marginleft;?>;margin-top: <?php echo $footerouter_margintop;?>;margin-bottom:<?php echo $footerouter_marginbottom;?>;margin-right:<?php echo $footerouter_marginright;?>; max-width:<?php echo $footerouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $footerouter_background;?>;">
  <div id="footerwrap-inner" class="" style="background:<?php echo $footermod_background;?>; margin-left:<?php echo $footermod_marginleft;?>;margin-right:<?php echo $footermod_marginright;?>; max-width:<?php echo $footermod_maxwidth;?>;color:<?php echo $footer_Textcolor;?>;">
    
      <div id="footermodule-container" >
      <div class="" style="padding:5px;">
      <div class="fb-g-r">
      <?php if ($showFootera) : ?>
        <div class="<?php echo $mainmod12_width; ?>">
        <jdoc:include type="modules" name="footer-a" style="xhtml"/>
        </div>
        <?php endif; ?>
        <?php if ($showFooterb) : ?>
        <div class="<?php echo $mainmod12_width; ?>">
        <jdoc:include type="modules" name="footer-b" style="xhtml"/>
        </div>
        <?php endif; ?>
        <?php if ($showFooterc) : ?>
        <div class="<?php echo $mainmod12_width; ?>">
        <jdoc:include type="modules" name="footer-c" style="xhtml"/>
        </div>
        <?php endif; ?>
        <?php if ($showFooterd) : ?>
        <div class="<?php echo $mainmod12_width; ?>">
        <jdoc:include type="modules" name="footer-d" style="xhtml"/>
        </div>
        <?php endif; ?>
        <?php if ($showFootere) : ?>
        <div class="<?php echo $mainmod12_width; ?>">
        <jdoc:include type="modules" name="footer-e" style="xhtml"/>
        </div>    
        <?php endif; ?>
        <?php if ($showFooterf) : ?>
        <div class="<?php echo $mainmod12_width; ?>">
        <jdoc:include type="modules" name="footer-f" style="xhtml"/>
        </div>
        <?php endif; ?>
        </div>
      </div>
    </div>
  
  </div>
</div>
</div> 
<!-- FOOTER MODULE AREA END -->
<?php endif; ?>
<!-- COPYRIGHT AREA -->
<div id="copywrap-outer" style="margin-left:<?php echo $copyouter_marginleft;?>;margin-top: <?php echo $copyouter_margintop;?>;margin-bottom:<?php echo $copyouter_marginbottom;?>;margin-right:<?php echo $copyouter_marginright;?>; max-width:<?php echo $copyouter_maxwidth;?>;">
<div class="strip" style="background:<?php echo $copyouter_background;?>;">
  <div id="copywrap-inner" class="" style="background:<?php echo $copymod_background;?>; margin-left:<?php echo $copymod_marginleft;?>;margin-right:<?php echo $copymod_marginright;?>; max-width:<?php echo $copymod_maxwidth;?>;color:<?php echo $copy_Textcolor;?>;">
    <div class="clearfix leading-3 mb1 fb accent white dark">
    <div class="left px1 leading-3"><a class="left px1 p bold leading-3"href="<?php echo JURI::base(true) ?>">
            Findborg
            <!-- <span>findborg</span> -->
            </a></div>
            <div class="left">
               <?php if ($this->params->get('showCopy') == '1'):?>
          &copy; <?php echo $this->params->get('sitetitle');?>  <?php echo date('Y');?>
        <?php endif; ?>
            </div>
        <div class="right px1 fb accent green lighter">
          <?php if ($this->params->get('showtop') == '1'):?>   
       <span class="button button-small button-clear pull-right">  <a href="#">To the Top</a></span>
     <?php endif; ?>
          <a href="#!" class=""><i class="icon ion-star" style="color:orange;"></i></a>
        </div>
        <div class="right px1">
         <!-- Right Nav Content -->
    <jdoc:include type="modules" name="navsearch-right" style="html" />
      <!-- Right Nav Content End -->
      </div>
        <div class="oh"><!--Search or Middle Content in Bar -->
     <?php if ($this->params->get('showpagetime') == '1'):?> 
        <?php  $endtime = getmicrotime(); echo"Load Time: ", number_format($endtime-$starttime, 4, ",", "."), " seconds."; ?>
           <?php endif; ?>
      <!--End of Middle Content in Bar --></div>
        
      </div>
      <div id="copymodule-container" >
      <div class="" style="padding:5px;">
      <div class="row">
        <div class="col-md-4">
        
        </div>
        <div class="col-md-4">
       
        </div>

        <div class="col-md-4">
    
        </div>
        </div>
      </div>
    </div>
  
  </div>
</div>
</div> 
 <div id="bj"></div> 

 
  <!-- COPYRIGHT AREA END -->
<div><jdoc:include type="modules" name="debug" style="none" /></div>