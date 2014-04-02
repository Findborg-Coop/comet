<?php if ($this->params->get('showpagetime') == '1'):?> 
<?php
  function getmicrotime() {
  list($usec, $sec) = explode(" ", microtime());
  return ((float)$usec + (float)$sec); }
  $starttime = getmicrotime();
?>
<?php endif; ?>
<!doctype html>
<!-- The DOCTYPE declaration above will set the     -->
<!-- browser's rendering engine into                -->
<!-- "Standards Mode". Replacing this declaration   -->
<!-- with a "Quirks Mode" doctype is not supported. -->
<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;
$app = JFactory::getApplication();
$doc = JFactory::getDocument();
// Add current user information
$user = JFactory::getUser();
//Getting Variables
$templateWidth = $this->params->get( 'templateWidth');


// Check modules
$showTop        = ($this->countModules('top-a') or $this->countModules('top-b') or $this->countModules('top-c') or $this->countModules('top-d') or $this->countModules('top-e') or $this->countModules('top-f'));
$showHeader     = ($this->countModules('header-a') or $this->countModules('header-b') or $this->countModules('header-c') or $this->countModules('header-d') or $this->countModules('header-e') or $this->countModules('header-f'));
$showDrawer     = ($this->countModules('drawer'));
$showBreadcrumb = ($this->countModules('breadcrumb') or $this->countModules('breadcrumb-b') or $this->countModules('breadcrumb-c') or $this->countModules('breadcrumb-d') or $this->countModules('breadcrumb-e') or $this->countModules('breadcrumb-f'));
$showUtility    = ($this->countModules('utility-a') or $this->countModules('utility-b') or $this->countModules('utility-c') or $this->countModules('utility-d') or $this->countModules('utility-e') or $this->countModules('utility-f'));
$showFeature    = ($this->countModules('feature-a') or $this->countModules('feature-b') or $this->countModules('feature-c') or $this->countModules('feature-d') or $this->countModules('feature-e') or $this->countModules('feature-f'));
$showMaintop    = ($this->countModules('maintop-a') or $this->countModules('maintop-b') or $this->countModules('maintop-c') or $this->countModules('maintop-d') or $this->countModules('maintop-e') or $this->countModules('maintop-f'));
$showFullwidth     = ($this->countModules('fullwidth'));
$showShowcase   = ($this->countModules('showcase-a') or $this->countModules('shocase-b') or $this->countModules('showcase-c') or $this->countModules('showcase-d') or $this->countModules('showcase-e') or $this->countModules('showcase-f'));
$showMainbottom = ($this->countModules('mainbottom-a') or $this->countModules('mainbottom-b') or $this->countModules('mainbottom-c') or $this->countModules('mainbottom-d') or $this->countModules('mainbottom-e') or $this->countModules('mainbottom-f'));
$showBottom = ($this->countModules('bottom-a') or $this->countModules('bottom-b') or $this->countModules('bottom-c') or $this->countModules('bottom-d') or $this->countModules('bottom-e') or $this->countModules('bottom-f'));
$showFooter = ($this->countModules('footer-a') or $this->countModules('footer-b') or $this->countModules('footer-c') or $this->countModules('footer-d') or $this->countModules('footer-e') or $this->countModules('footer-f'));
$showContentTopa     = ($this->countModules('content-top-a'));
$showContentTopb     = ($this->countModules('content-top-b'));
$showContentTopc     = ($this->countModules('content-top-c'));
$showContentBottoma     = ($this->countModules('content-bottom-a'));
$showContentBottomb     = ($this->countModules('content-bottom-b'));
$showContentBottomc     = ($this->countModules('content-bottom-c'));
/*SHOW-HIDE TOP MODULES*/
$showTopa     = ($this->countModules('top-a'));
$showTopb     = ($this->countModules('top-b'));
$showTopc     = ($this->countModules('top-c'));
$showTopd     = ($this->countModules('top-d'));
$showTope     = ($this->countModules('top-e'));
$showTopf     = ($this->countModules('top-f'));
/*END SHOW-HIDE TOP MODULES*/
/*SHOW-HIDE HEADER MODULES*/
$showHeadera     = ($this->countModules('header-a'));
$showHeaderb     = ($this->countModules('header-b'));
$showHeaderc     = ($this->countModules('header-c'));
$showHeaderd     = ($this->countModules('header-d'));
$showHeadere     = ($this->countModules('header-e'));
$showHeaderf     = ($this->countModules('header-f'));
/*END SHOW-HIDE HEADER MODULES*/
/*SHOW-HIDE SHOWCASE MODULES*/
$showShowcasea     = ($this->countModules('showcase-a'));
$showShowcaseb     = ($this->countModules('showcase-b'));
$showShowcasec     = ($this->countModules('showcase-c'));
$showShowcased     = ($this->countModules('showcase-d'));
$showShowcasee     = ($this->countModules('showcase-e'));
$showShowcasef     = ($this->countModules('showcase-f'));
/*END SHOW-HIDE SHOWCASE MODULES*/
/*SHOW-HIDE UTILITY MODULES*/
$showUtilitya     = ($this->countModules('utility-a'));
$showUtilityb     = ($this->countModules('utility-b'));
$showUtilityc     = ($this->countModules('utility-c'));
$showUtilityd     = ($this->countModules('utility-d'));
$showUtilitye     = ($this->countModules('utility-e'));
$showUtilityf     = ($this->countModules('utility-f'));
/*END SHOW-HIDE UTILITY MODULES*/
/*SHOW-HIDE   FEATURE MODULES*/
$showFeaturea     = ($this->countModules('feature-a'));
$showFeatureb     = ($this->countModules('feature-b'));
$showFeaturec     = ($this->countModules('feature-c'));
$showFeatured     = ($this->countModules('feature-d'));
$showFeaturee     = ($this->countModules('feature-e'));
$showFeaturef     = ($this->countModules('feature-f'));
/*END SHOW-HIDE FEATURE MODULES*/
/*SHOW-HIDE   MAINTOP MODULES*/
$showMtopa     = ($this->countModules('maintop-a'));
$showMtopb     = ($this->countModules('maintop-b'));
$showMtopc     = ($this->countModules('maintop-c'));
$showMtopd     = ($this->countModules('maintop-d'));
$showMtope     = ($this->countModules('maintop-e'));
$showMtopf     = ($this->countModules('maintop-f'));
/*END SHOW-HIDE MAINTOP MODULES*/
/*SHOW-HIDE   FULLWIDTH MODULES*/
$showFwidth     = ($this->countModules('fullwidth'));
//*END SHOW-HIDE FULLWIDTH MODULES*/
/*SHOW-HIDE   MAINBOTTOM MODULES*/
$showMbottoma     = ($this->countModules('mainbottom-a'));
$showMbottomb     = ($this->countModules('mainbottom-b'));
$showMbottomc     = ($this->countModules('mainbottom-c'));
$showMbottomd     = ($this->countModules('mainbottom-d'));
$showMbottome     = ($this->countModules('mainbottom-e'));
$showMbottomf     = ($this->countModules('mainbottom-f'));
/*END SHOW-HIDE MAINBOTTOM MODULES*/
/*SHOW-HIDE   BOTTOM MODULES*/
$showBottoma     = ($this->countModules('bottom-a'));
$showBottomb     = ($this->countModules('bottom-b'));
$showBottomc     = ($this->countModules('bottom-c'));
$showBottomd     = ($this->countModules('bottom-d'));
$showBottome     = ($this->countModules('bottom-e'));
$showBottomf     = ($this->countModules('bottom-f'));
/*END SHOW-HIDE BOTTOM MODULES*/
/*SHOW-HIDE   FOOTER MODULES*/
$showFootera     = ($this->countModules('footer-a'));
$showFooterb     = ($this->countModules('footer-b'));
$showFooterc     = ($this->countModules('footer-c'));
$showFooterd     = ($this->countModules('footer-d'));
$showFootere     = ($this->countModules('footer-e'));
$showFooterf     = ($this->countModules('footer-f'));
/*END SHOW-HIDE FOOTER MODULES*/
// Top Section Variables
$topouter_background = $this->params->get( 'topouter_background' );
$topmod_background = $this->params->get( 'topmod_background');
$topouter_marginleft = $this->params->get( 'topouter_marginleft');
$topouter_marginright = $this->params->get( 'topouter_marginright');
$topouter_margintop = $this->params->get( 'topouter_margintop');
$topouter_marginbottom = $this->params->get( 'topouter_marginbottom');
$topouter_maxwidth = $this->params->get( 'topouter_maxwidth');
$topmod_maxwidth = $this->params->get( 'topmod_maxwidth');
$top_Textcolor = $this->params->get( 'top_Textcolor');
$topmod_marginleft = $this->params->get( 'topmod_marginleft');
$topmod_marginright = $this->params->get( 'topmod_marginright');
//Top Section Variables End
// Header Section Variables
$headouter_background = $this->params->get( 'headouter_background' );
$headmod_background = $this->params->get( 'headmod_background');
$headouter_marginleft = $this->params->get( 'headouter_marginleft');
$headouter_marginright = $this->params->get( 'headouter_marginright');
$headouter_margintop = $this->params->get( 'headouter_margintop');
$headouter_marginbottom = $this->params->get( 'headouter_marginbottom');
$headouter_maxwidth = $this->params->get( 'headouter_maxwidth');
$headmod_maxwidth = $this->params->get( 'headmod_maxwidth');
$head_Textcolor = $this->params->get( 'head_Textcolor');
$headmod_marginleft = $this->params->get( 'headmod_marginleft');
$headmod_marginright = $this->params->get( 'headmod_marginright');
//Header Section Variables End
// Subnav Section Variables
$subnavouter_background = $this->params->get( 'subnavouter_background' );
$subnavmod_background = $this->params->get( 'subnavmod_background');
$subnavouter_marginleft = $this->params->get( 'subnavouter_marginleft');
$subnavouter_marginright = $this->params->get( 'subnavouter_marginright');
$subnavouter_margintop = $this->params->get( 'subnavouter_margintop');
$subnavouter_marginbottom = $this->params->get( 'subnavouter_marginbottom');
$subnavouter_maxwidth = $this->params->get( 'subnavouter_maxwidth');
$subnavmod_maxwidth = $this->params->get( 'subnavmod_maxwidth');
$subnav_Textcolor = $this->params->get( 'subnav_Textcolor');
$subnavmod_marginleft = $this->params->get( 'subnavmod_marginleft');
$subnavmod_marginright = $this->params->get( 'subnavmod_marginright');
//Subnav Section Variables End
// Drawer Section Variables
$drawerouter_background = $this->params->get( 'drawerouter_background' );
$drawermod_background = $this->params->get( 'drawermod_background');
$drawerouter_marginleft = $this->params->get( 'drawerouter_marginleft');
$drawerouter_marginright = $this->params->get( 'drawerouter_marginright');
$drawerouter_margintop = $this->params->get( 'drawerouter_margintop');
$drawerouter_marginbottom = $this->params->get( 'drawerouter_marginbottom');
$drawerouter_maxwidth = $this->params->get( 'drawerouter_maxwidth');
$drawermod_maxwidth = $this->params->get( 'drawermod_maxwidth');
$drawer_Textcolor = $this->params->get( 'drawer_Textcolor');
$drawermod_marginleft = $this->params->get( 'drawermod_marginleft');
$drawermod_marginright = $this->params->get( 'drawermod_marginright');
//Drawer Section Variables End
// Showcase Section Variables
$showouter_background = $this->params->get( 'showouter_background' );
$showmod_background = $this->params->get( 'showmod_background');
$showouter_marginleft = $this->params->get( 'showouter_marginleft');
$showouter_marginright = $this->params->get( 'showouter_marginright');
$showouter_margintop = $this->params->get( 'showouter_margintop');
$showouter_marginbottom = $this->params->get( 'showouter_marginbottom');
$showouter_maxwidth = $this->params->get( 'showouter_maxwidth');
$showmod_maxwidth = $this->params->get( 'showmod_maxwidth');
$show_Textcolor = $this->params->get( 'show_Textcolor');
$showmod_marginleft = $this->params->get( 'showmod_marginleft');
$showmod_marginright = $this->params->get( 'showmod_marginright');
//Showcase Section Variables End
// Utility Section Variables
$utilityouter_background = $this->params->get( 'utilityouter_background' );
$utilitymod_background = $this->params->get( 'utilitymod_background');
$utilityouter_marginleft = $this->params->get( 'utilityouter_marginleft');
$utilityouter_marginright = $this->params->get( 'utilityouter_marginright');
$utilityouter_margintop = $this->params->get( 'utilityouter_margintop');
$utilityouter_marginbottom = $this->params->get( 'utilityouter_marginbottom');
$utilityouter_maxwidth = $this->params->get( 'utilityouter_maxwidth');
$utilitymod_maxwidth = $this->params->get( 'utilitymod_maxwidth');
$utility_Textcolor = $this->params->get( 'utility_Textcolor');
$utilitymod_marginleft = $this->params->get( 'utilitymod_marginleft');
$utilitymod_marginright = $this->params->get( 'utilitymod_marginright');
//Utility Section Variables End
// Feature Section Variables
$featureouter_background = $this->params->get( 'featureouter_background' );
$featuremod_background = $this->params->get( 'featuremod_background');
$featureouter_marginleft = $this->params->get( 'featureouter_marginleft');
$featureouter_marginright = $this->params->get( 'featureouter_marginright');
$featureouter_margintop = $this->params->get( 'featureouter_margintop');
$featureouter_marginbottom = $this->params->get( 'featureouter_marginbottom');
$featureouter_maxwidth = $this->params->get( 'featureouter_maxwidth');
$featuremod_maxwidth = $this->params->get( 'featuremod_maxwidth');
$feature_Textcolor = $this->params->get( 'feature_Textcolor');
$featuremod_marginleft = $this->params->get( 'featuremod_marginleft');
$featuremod_marginright = $this->params->get( 'featuremod_marginright');
//Feature Section Variables End
// Maintop Section Variables
$mtopouter_background = $this->params->get( 'mtopouter_background' );
$mtopmod_background = $this->params->get( 'mtopmod_background');
$mtopouter_marginleft = $this->params->get( 'mtopouter_marginleft');
$mtopouter_marginright = $this->params->get( 'mtopouter_marginright');
$mtopouter_margintop = $this->params->get( 'mtopouter_margintop');
$mtopouter_marginbottom = $this->params->get( 'mtopouter_marginbottom');
$mtopouter_maxwidth = $this->params->get( 'mtopouter_maxwidth');
$mtopmod_maxwidth = $this->params->get( 'mtopmod_maxwidth');
$mtop_Textcolor = $this->params->get( 'mtop_Textcolor');
$mtopmod_marginleft = $this->params->get( 'mtopmod_marginleft');
$mtopmod_marginright = $this->params->get( 'mtopmod_marginright');
//Maintop Section Variables End
// Fullwidth Section Variables
$fwidthouter_background = $this->params->get( 'fwidthouter_background' );
$fwidthmod_background = $this->params->get( 'fwidthmod_background');
$fwidthouter_marginleft = $this->params->get( 'fwidthouter_marginleft');
$fwidthouter_marginright = $this->params->get( 'fwidthouter_marginright');
$fwidthouter_margintop = $this->params->get( 'fwidthouter_margintop');
$fwidthouter_marginbottom = $this->params->get( 'fwidthouter_marginbottom');
$fwidthouter_maxwidth = $this->params->get( 'fwidthouter_maxwidth');
$fwidthmod_maxwidth = $this->params->get( 'fwidthmod_maxwidth');
$fwidth_Textcolor = $this->params->get( 'fwidth_Textcolor');
$fwidthmod_marginleft = $this->params->get( 'fwidthmod_marginleft');
$fwidthmod_marginright = $this->params->get( 'fwidthmod_marginright');
//Fullwidth Section Variables End
// Mainbottom Section Variables
$mbottomouter_background = $this->params->get( 'mbottomouter_background' );
$mbottommod_background = $this->params->get( 'mbottommod_background');
$mbottomouter_marginleft = $this->params->get( 'mbottomouter_marginleft');
$mbottomouter_marginright = $this->params->get( 'mbottomouter_marginright');
$mbottomouter_margintop = $this->params->get( 'mbottomouter_margintop');
$mbottomouter_marginbottom = $this->params->get( 'mbottomouter_marginbottom');
$mbottomouter_maxwidth = $this->params->get( 'mbottomouter_maxwidth');
$mbottommod_maxwidth = $this->params->get( 'mbottommod_maxwidth');
$mbottom_Textcolor = $this->params->get( 'mbottom_Textcolor');
$mbottommod_marginleft = $this->params->get( 'mbottommod_marginleft');
$mbottommod_marginright = $this->params->get( 'mbottommod_marginright');
//Mainbottom Section Variables End
// Bottom Section Variables
$bottomouter_background = $this->params->get( 'bottomouter_background' );
$bottommod_background = $this->params->get( 'bottommod_background');
$bottomouter_marginleft = $this->params->get( 'bottomouter_marginleft');
$bottomouter_marginright = $this->params->get( 'bottomouter_marginright');
$bottomouter_margintop = $this->params->get( 'bottomouter_margintop');
$bottomouter_marginbottom = $this->params->get( 'bottomouter_marginbottom');
$bottomouter_maxwidth = $this->params->get( 'bottomouter_maxwidth');
$bottommod_maxwidth = $this->params->get( 'bottommod_maxwidth');
$bottom_Textcolor = $this->params->get( 'bottom_Textcolor');
$bottommod_marginleft = $this->params->get( 'bottommod_marginleft');
$bottommod_marginright = $this->params->get( 'bottommod_marginright');
//Bottom Section Variables End
// Footer Section Variables
$footerouter_background = $this->params->get( 'footerouter_background' );
$footermod_background = $this->params->get( 'footermod_background');
$footerouter_marginleft = $this->params->get( 'footerouter_marginleft');
$footerouter_marginright = $this->params->get( 'footerouter_marginright');
$footerouter_margintop = $this->params->get( 'footerouter_margintop');
$footerouter_marginbottom = $this->params->get( 'footerouter_marginbottom');
$footerouter_maxwidth = $this->params->get( 'footerouter_maxwidth');
$footermod_maxwidth = $this->params->get( 'footermod_maxwidth');
$footer_Textcolor = $this->params->get( 'footer_Textcolor');
$footermod_marginleft = $this->params->get( 'footermod_marginleft');
$footermod_marginright = $this->params->get( 'footermod_marginright');
//Footer Section Variables End
// Copyright Section Variables
$copyouter_background = $this->params->get( 'copyouter_background' );
$copymod_background = $this->params->get( 'copymod_background');
$copyouter_marginleft = $this->params->get( 'copyouter_marginleft');
$copyouter_marginright = $this->params->get( 'copyouter_marginright');
$copyouter_margintop = $this->params->get( 'copyouter_margintop');
$copyouter_marginbottom = $this->params->get( 'copyouter_marginbottom');
$copyouter_maxwidth = $this->params->get( 'copyouter_maxwidth');
$copymod_maxwidth = $this->params->get( 'copymod_maxwidth');
$copy_Textcolor = $this->params->get( 'copy_Textcolor');
$copymod_marginleft = $this->params->get( 'copymod_marginleft');
$copymod_marginright = $this->params->get( 'copymod_marginright');
//Copyright Section Variables End
// Breadcrumb Section Variables
$breadouter_background = $this->params->get( 'breadouter_background' );
$breadmod_background = $this->params->get( 'breadmod_background');
$breadouter_marginleft = $this->params->get( 'breadouter_marginleft');
$breadouter_marginright = $this->params->get( 'breadouter_marginright');
$breadouter_margintop = $this->params->get( 'breadouter_margintop');
$breadouter_marginbottom = $this->params->get( 'breadouter_marginbottom');
$breadouter_maxwidth = $this->params->get( 'breadouter_maxwidth');
$breadmod_maxwidth = $this->params->get( 'breadmod_maxwidth');
$bread_Textcolor = $this->params->get( 'bread_Textcolor');
$breadmod_marginleft = $this->params->get( 'breadmod_marginleft');
$breadmod_marginright = $this->params->get( 'breadmod_marginright');
//Breadcrumb Section Variables End
// Mainbody Variables
$leftcolumn_width   = $this->params->get("leftcolumnWidth", "210");
$rightcolumn_width    = $this->params->get("rightcolumnWidth", "210");
//Are we in edit mode
$editmode = false;
if (JRequest::getCmd('task') == 'edit' ) :
  $editmode = true;
endif;

$leftcolumn_width = ($this->countModules('sidebar-a')>0) ? $leftcolumn_width : 0;
$rightcolumn_width = (!$editmode and $this->countModules('sidebar-b')>0) ? $rightcolumn_width : 0;
$leftcolumn_color   = $this->params->get("leftcolumnColor", "");
$rightcolumn_color    = $this->params->get("rightcolumnColor", "");

$col_mode = "s-c-s";
if ($leftcolumn_width==0 and $rightcolumn_width>0) $col_mode = "x-c-s";
if ($leftcolumn_width>0 and $rightcolumn_width==0) $col_mode = "s-c-x";
if ($leftcolumn_width==0 and $rightcolumn_width==0) $col_mode = "x-c-x";



$mainmod_count = ($this->countModules('content-top-a')>0) + ($this->countModules('content-top-b')>0) + ($this->countModules('content-top-c')>0);
if ($mainmod_count == 3) $mainmod_width = "fb-4-tablet";
if ($mainmod_count == 2) $mainmod_width = "fb-6-tablet"; 
if ($mainmod_count == 1) $mainmod_width = "fb-12-phone"; 
$mainmod2_count = ($this->countModules('content-bottom-a')>0) + ($this->countModules('content-bottom-b')>0) + ($this->countModules('content-bottom-c')>0);
if ($mainmod2_count == 3) $mainmod2_width = "fb-4-tablet";
if ($mainmod2_count == 2) $mainmod2_width = "fb-6-tablet"; 
if ($mainmod2_count == 1) $mainmod2_width = "fb-12-phone"; 
/*TOP SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod3_count = ($this->countModules('top-a')>0) + ($this->countModules('top-b')>0) + ($this->countModules('top-c')>0) + ($this->countModules('top-d')>0) + ($this->countModules('top-e')>0) + ($this->countModules('top-f')>0);
if ($mainmod3_count == 6) $mainmod3_width = "fb-6-phone fb-4-tablet fb-2-laptop fb-2-desktop";
if ($mainmod3_count == 5) $mainmod3_width = "grid grid-1-5";
if ($mainmod3_count == 4) $mainmod3_width = "fb-12-phone fb-3-tablet";
if ($mainmod3_count == 3) $mainmod3_width = "fb-12-phone fb-4-tablet fb-4-desktop";
if ($mainmod3_count == 2) $mainmod3_width = "fb-12-phone fb-6-desktop"; 
if ($mainmod3_count == 1) $mainmod3_width = "fb-12-mobile"; 
/*TOP SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*HEADER SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod4_count = ($this->countModules('header-a')>0) + ($this->countModules('header-b')>0) + ($this->countModules('header-c')>0) + ($this->countModules('header-d')>0) + ($this->countModules('header-e')>0) + ($this->countModules('header-f')>0);
if ($mainmod4_count == 6) $mainmod4_width = "fb-12-phone  fb-2-tablet";
if ($mainmod4_count == 5) $mainmod4_width = "col-md-1-5";
if ($mainmod4_count == 4) $mainmod4_width = "fb-12-phone fb-3-tablet";
if ($mainmod4_count == 3) $mainmod4_width = "fb-12-phone fb-4-tablet";
if ($mainmod4_count == 2) $mainmod4_width = "fb-12-phone fb-6-tablet"; 
if ($mainmod4_count == 1) $mainmod4_width = "fb-12-phone"; 
/*HEADER SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*SHOWCASE SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod5_count = ($this->countModules('showcase-a')>0) + ($this->countModules('showcase-b')>0) + ($this->countModules('showcase-c')>0) + ($this->countModules('showcase-d')>0) + ($this->countModules('showcase-e')>0) + ($this->countModules('showcase-f')>0);
if ($mainmod5_count == 6) $mainmod5_width = "fb-12-phone fb-2-tablet";
if ($mainmod5_count == 5) $mainmod5_width = "fb-12-phone col-md-1-5";
if ($mainmod5_count == 4) $mainmod5_width = "fb-12-phone fb-3-tablet";
if ($mainmod5_count == 3) $mainmod5_width = "fb-12-phone fb-4-tablet";
if ($mainmod5_count == 2) $mainmod5_width = "fb-12-phone fb-6-tablet"; 
if ($mainmod5_count == 1) $mainmod5_width = "fb-12-phone"; 
/*SHOWCASE SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*UTILITY SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod6_count = ($this->countModules('utility-a')>0) + ($this->countModules('utility-b')>0) + ($this->countModules('utility-c')>0) + ($this->countModules('utility-d')>0) + ($this->countModules('utility-e')>0) + ($this->countModules('utility-f')>0);
if ($mainmod6_count == 6) $mainmod6_width = "fb-12-phone fb-2-tablet";
if ($mainmod6_count == 5) $mainmod6_width = "fb-12-phone col-md-1-5";
if ($mainmod6_count == 4) $mainmod6_width = "fb-12-phone fb-3-tablet";
if ($mainmod6_count == 3) $mainmod6_width = "fb-12-phone fb-4-tablet";
if ($mainmod6_count == 2) $mainmod6_width = "fb-12-phone fb-6-tablet"; 
if ($mainmod6_count == 1) $mainmod6_width = "fb-12-phone"; 
/*UTILITY SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*FEATURE SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod7_count = ($this->countModules('feature-a')>0) + ($this->countModules('feature-b')>0) + ($this->countModules('feature-c')>0) + ($this->countModules('feature-d')>0) + ($this->countModules('feature-e')>0) + ($this->countModules('feature-f')>0);
if ($mainmod7_count == 6) $mainmod7_width = "fb-12-phone fb-2-tablet";
if ($mainmod7_count == 5) $mainmod7_width = "fb-12-phone col-md-1-5";
if ($mainmod7_count == 4) $mainmod7_width = "fb-12-phone fb-3-tablet";
if ($mainmod7_count == 3) $mainmod7_width = "fb-12-phone fb-4-tablet";
if ($mainmod7_count == 2) $mainmod7_width = "fb-12-phone fb-6-tablet"; 
if ($mainmod7_count == 1) $mainmod7_width = "fb-12-phone"; 
/*FEATURE SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*MAINTOP SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod8_count = ($this->countModules('maintop-a')>0) + ($this->countModules('maintop-b')>0) + ($this->countModules('maintop-c')>0) + ($this->countModules('maintop-d')>0) + ($this->countModules('maintop-e')>0) + ($this->countModules('maintop-f')>0);
if ($mainmod8_count == 6) $mainmod8_width = "fb-12-phone fb-2-tablet";
if ($mainmod8_count == 5) $mainmod8_width = "fb-12-phone col-md-1-5";
if ($mainmod8_count == 4) $mainmod8_width = "fb-12-phone fb-3-tablet";
if ($mainmod8_count == 3) $mainmod8_width = "fb-12-phone fb-4-tablet";
if ($mainmod8_count == 2) $mainmod8_width = "fb-12-phone fb-6-tablet"; 
if ($mainmod8_count == 1) $mainmod8_width = "fb-12-phone"; 
/*MAINTOP SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*FULLWIDTH SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod9_count = ($this->countModules('fullwidth')>0);
if ($mainmod9_count == 1) $mainmod9_width = "fb-12-phone"; 
/*FULLWIDTH SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*MAINBOTTOM SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod10_count = ($this->countModules('mainbottom-a')>0) + ($this->countModules('mainbottom-b')>0) + ($this->countModules('mainbottom-c')>0) + ($this->countModules('mainbottom-d')>0) + ($this->countModules('mainbottom-e')>0) + ($this->countModules('mainbottom-f')>0);
if ($mainmod10_count == 6) $mainmod10_width = "grid fb-2-tablet";
if ($mainmod10_count == 5) $mainmod10_width = "col-md-1-5";
if ($mainmod10_count == 4) $mainmod10_width = "fb-3-tablet";
if ($mainmod10_count == 3) $mainmod10_width = "fb-4-tablet";
if ($mainmod10_count == 2) $mainmod10_width = "fb-6-tablet"; 
if ($mainmod10_count == 1) $mainmod10_width = "fb-12-phone"; 
/*MAINBOTTOM SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*BOTTOM SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod11_count = ($this->countModules('bottom-a')>0) + ($this->countModules('bottom-b')>0) + ($this->countModules('bottom-c')>0) + ($this->countModules('bottom-d')>0) + ($this->countModules('bottom-e')>0) + ($this->countModules('bottom-f')>0);
if ($mainmod11_count == 6) $mainmod11_width = "grid fb-2-tablet";
if ($mainmod11_count == 5) $mainmod11_width = "col-md-1-5";
if ($mainmod11_count == 4) $mainmod11_width = "fb-3-tablet";
if ($mainmod11_count == 3) $mainmod11_width = "fb-4-tablet";
if ($mainmod11_count == 2) $mainmod11_width = "fb-6-tablet"; 
if ($mainmod11_count == 1) $mainmod11_width = "fb-12-phone"; 
/*BOTTOM SECTION MODULE COUNTS EQUAL WIDTHS END*/
/*FOOTER SECTION MODULE COUNTS EQUAL WIDTHS*/
$mainmod12_count = ($this->countModules('footer-a')>0) + ($this->countModules('footer-b')>0) + ($this->countModules('footer-c')>0) + ($this->countModules('footer-d')>0) + ($this->countModules('footer-e')>0) + ($this->countModules('footer-f')>0);
if ($mainmod12_count == 6) $mainmod12_width = "grid fb-2-tablet";
if ($mainmod12_count == 5) $mainmod12_width = "col-md-1-5";
if ($mainmod12_count == 4) $mainmod12_width = "fb-3-tablet";
if ($mainmod12_count == 3) $mainmod12_width = "fb-4-tablet";
if ($mainmod12_count == 2) $mainmod12_width = "fb-6-tablet"; 
if ($mainmod12_count == 1) $mainmod12_width = "fb-12-phone"; 
/*FOOTER SECTION MODULE COUNTS EQUAL WIDTHS END*/
$inlinestyle = "
  #wrapper { ".$templateWidth."padding:0;}
  .s-c-s #colmid { left:".$leftcolumn_width."px;background:#fffff;}
  .s-c-s #colright { margin-left:-".($leftcolumn_width + $rightcolumn_width)."px;}
  .s-c-s #col1pad { margin-left:".($leftcolumn_width + $rightcolumn_width)."px;}
  .s-c-s #col2 { left:".$rightcolumn_width."px;width:".$leftcolumn_width."px;}
  .s-c-s #col3 { width:".$rightcolumn_width."px;}
  
  .s-c-x #colright { left:".$leftcolumn_width."px;}
  .s-c-x #col1wrap { right:".$leftcolumn_width."px;}
  .s-c-x #col1 { margin-left:".$leftcolumn_width."px;}
  .s-c-x #col2 { right:".$leftcolumn_width."px;width:".$leftcolumn_width."px;}
  
  .x-c-s #colright { margin-left:-".$rightcolumn_width."px;}
  .x-c-s #col1 { margin-left:".$rightcolumn_width."px;}
  .x-c-s #col3 { left:".$rightcolumn_width."px;width:".$rightcolumn_width."px;}";
$this->addStyleDeclaration($inlinestyle);


?>
<html>
  <head>
 <!-- Load Compadibility Script for Old Browsers -->    
 
 

 
<!-- PAGE CLASS CONTROLL -->
<?php // Include the library itself
$app = JFactory::getApplication();
$menu = $app->getMenu();
$active = $menu->getActive();
  $pageclass = '';
  if (is_object($active)
    && isset($active->params)
    && $active->params instanceof JRegistry) {
    $pageclass = $active->params->get('pageclass_sfx', '');
  }

// END OF PAGE CLASS CONTROL ?>
 

<meta name="viewport" content="width=device-width, initial-scale=1">

<jdoc:include type="head" />
<link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/galaxy.css">
 <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/icons/css/ionicons.min.css">
 <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/fusion.css">
 
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/modernizr-2.6.2.min.js"></script>
 
 <script src="<?php echo $this->baseurl ?>/media/jui/js/jquery.min.js"></script>
  </head>  
 
    
<!-- EDIT EVERYTHING ABOVE THIS TAG -->


 <body class="<?php echo !empty($pageclass) ? $pageclass : ''; ?>"  style="background:<?php echo $this->params->get('templateBackgroundColor');?>;">
 
          
 <?php include('layouts/header.php'); ?>
 <div id="gogo">
 <?php include('layouts/mainbody.php'); ?>
 <?php include('layouts/footer.php'); ?>
  </div>     
   
  

 
 
  

           

  

<!-- lOAD ALL JAVASCRIPT LAST --> 
 
 
 <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jkit/jquery.jkit.autoload.1.2.9.js"></script>
 <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jkit/jquery.easing.1.3.js"></script>
 <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/libs/jkit/jquery.jkit.1.2.9.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/bootstrap.min.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/modules/pagetransitions.js"></script>





     <script type="text/javascript">
     
    
 $(document).ready(function(){
          $('body').jKit();
          
         });

     </script>   


<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://www.findborg.com/redeye/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "1"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
</script>
<!-- End Piwik Code -->
<!-- END OF LOADING JAVASCRIPT -->
  </body>
</html>
