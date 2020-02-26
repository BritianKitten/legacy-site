<?php

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet($this->baseurl . '/templates/deeno/css/bootstrap.css');
$doc->addStyleSheet($this->baseurl . '/templates/deeno/css/bootstrap-responsive.css');
$doc->addStyleSheet($this->baseurl . '/templates/deeno/css/navbar.css');
$doc->addStyleSheet($this->baseurl . '/templates/deeno/css/dropdown-menu.css');
$doc->addStyleSheet($this->baseurl . '/templates/deeno/css/nav-tabs-pills.css');

$doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
$doc->addScript($this->baseurl . '/media/jui/js/bootstrap.min.js', 'text/javascript');
?>

<!DOCTYPE html>
<html >
<head>
  
<script src="https://use.typekit.net/unh4lda.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>  
  
  
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>--> <!--  POSSIBLE JQUERY LIBARY INCLUSION HERE   -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->    <!--  ICON LIBRARY   --> 

<jdoc:include type="head" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">  

</head>

<body style="background: url('images/222.jpg'); background-repeat:repeat;">

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -- - - - - -->
<!-- NAVBAR NAVBAR NAVBAR START-->
<!-- NAVBAR NAVBAR NAVBAR START-->
<div class="row">
    
    
<?php if ($this->countModules('position-3')): ?>
   <div class="navbar nav-pills" >
     <div class="navbar-inner">
        <div class="container"> 
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span id="mobile-menu-indicator">MENU</span>
                </a>
          
            <div class="nav-collapse collapse">
            <jdoc:include type="modules" name="position-3" style="none" />
            </div><!--NAV-COLLAPSE COLLAPSE END -->
      
        </div> <!--CONTAINER INNER END -->
     </div><!--NAVBAR INNER END -->   
   </div>  <!--NAVBAR NAV PILLS END -->
 <?php endif; ?>
 
 </div>  <!--ROW END -->
<!-- NAVBAR NAVBAR NAVBAR END-->
<!-- NAVBAR NAVBAR NAVBAR END-->
  
  
  <jdoc:include type="modules" name="NAVIGATION" style="xhtml"/>
  <jdoc:include type="modules" name="position-1" style="xhtml"/>
  

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -- - - - - -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -- - - - - -->

<!-- MAIN ARTICLE AND POSSIBLE SIDEBARS-->
<!--  ON THE FRONT PAGE THE MAIN ARTICLE CONTENT DOES NOT APPEAR. ONLY MODULES TO BE USED.  -->     
     

 <div class='row' style="position:relative;">
 
 <?php
$app = JFactory::getApplication();
$menu = $app->getMenu();
if ($menu->getActive() == $menu->getDefault()) {
  echo '';     //IF THIS IS THE FRONT PAGE DISPLAY THIS
}

else {    //IF THIS IS NOT THE FRONT PAGE DISPLAY THIS
  
  echo '<div class="">';
  echo '<jdoc:include type="modules" name="ARTICLE" style="xhtml"/>';
  echo '<jdoc:include type="message" />';
  echo '<jdoc:include type="component" />';
  echo '</div>';
  //SIDEBAR ON RIGHT HAND SIDE
  //echo '<div class="span0">';
  //echo '<jdoc:include type="modules" name="SIDEBAR1" style="well"/>';
  //echo '</div>';

}
?>        

<!--  ON THE FRONT PAGE THE MAIN ARTICLE CONTENT DOES NOT APPEAR. ONLY MODULES TO BE USED.  -->                   
<!--  ON THE FRONT PAGE THE MAIN ARTICLE CONTENT DOES NOT APPEAR. ONLY MODULES TO BE USED.  -->     
 </div><!--ROW END -->            
             
            
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -- - - - - -->
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -- - - - - -->       
<!-- FOOTER-->
 <div >
 <jdoc:include type="modules" name="FOOTER" style="xhtml"/>          
 </div>
 <!-- FOOTER END -->
    
</body>
</html>