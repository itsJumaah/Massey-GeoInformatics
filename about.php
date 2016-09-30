<?php
     include 'scripts/simple_html_dom.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free Flash Templates
http://www.flash-templates-today.com
Released for free under a Creative Commons Attribution 3.0 License
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Massey Geoinformatics Collaboratory</title>
<link href="http://fonts.googleapis.com/css?family=Abel|Arvo" rel="stylesheet" type="text/css" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/adamina:n4:default;alegreya:n4:default;bubbler-one:n4:default;josefin-sans:n4:default;raleway:n4:default.js" type="text/javascript"></script>
<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'/ >
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="scripts/navbar.js"></script>

</head>

<body>
<!-- begin #container -->
<div id="container">
    <!-- begin #header -->
    <div id="header">
    	<table width="959" border="0">
    	  <tr>
          
    	    <td width="776" height="176">
              <h1>
              <span id="h1title">Massey University</span>
              
              <br/> 
   	          <span id="h2title">Geoinformatics Collaboratory</span>
              </h1>
              
            </td>
              
              
              
    	    <td width="173"><img src="images/logo.png"  alt="" width="170" height="179" id="masseylogo"/></td>
  	    </tr>
  	  </table>
    	<div class="clearfloat"></div>
        <div id="navcontainer">
            <ul id="navlist">
                <li id="inactive"><a href="index.php">Home</a></li>
                <li id="active"><a href="about.php">Who are we?</a></li>
                <li id="inactive"><a href="themes.php">Research Themes</a></li>
                <li id="inactive"><a href="events.php">Events</a></li>
            </ul>
        </div>
        <div class="clearfloat"></div>
        <div><img src="images/wai-o-tapu.jpg" alt="" class="headerimg"/></div>
    </div>
    <!-- end #header -->
    <!-- begin #contentBody -->
    <div id="contentBody">
    	<div class="threeBoxes">
    	  <div class="clearfloat"></div>
        </div>
        <div class="solutions">
       	  <h3>About us!</h3>
         	<div class="staffcontainer">
             
			<?php
			//DR KRISTIN STOCK
                  $html = file_get_html('http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/engineering-technology/seat-computer-science--information-technology-staff.cfm?stref=993350');
    			  //name
                  foreach($html->find('div[class=pf_title]') as $element){
					  echo "<span id=staffname>";
                      echo $element->innertext;
					  echo "</span>";
                  }
				  //position
				  foreach($html->find('div[class=pf_details]//h2') as $element){
					  echo "<span id=stafftitle>";
					  echo $element->innertext;
					  echo "</span>";
				  } 
					//research interests
				  foreach($html->find('div[class=pf_section]//p', 7) as $element){
					
						if (is_object($element)) {
							echo "<br><br>";
							echo "<span id=staffjob>";
							
							//echo "<ul><li>";
							echo $element->innertext;
							//echo "</ul></li>";
							echo "</span>";
						}
					
				  }
             ?>
             <br />
             <hr />
        	 <br />
             <?php
			//Prof Russell Death
                  $html = file_get_html('http://www.massey.ac.nz/massey/expertise/profile.cfm?stref=978130');
    			  //name
                  foreach($html->find('div[class=pf_title]') as $element){
					  echo "<span id=staffname>";
                      echo $element->innertext;
					  echo "</span>";
                  }
				  //position
				  foreach($html->find('div[class=pf_details]//h2') as $element){
					  echo "<span id=stafftitle>";
					  echo $element->innertext;
					  echo "</span>";
				  } 
					//research interests
				  foreach($html->find('div[class=pf_section]//p', 1) as $element){
					
						if (is_object($element)) {
							echo "<br><br>";
							echo "<span id=staffjob>";
							
							//echo "<ul><li>";
							echo $element->innertext;
							//echo "</ul></li>";
							echo "</span>";
						}
					
				  }
             ?>
             <br />
             <hr />
        	 <br />
        
         <?php
			//prof hans guesgen
                  $html = file_get_html('http://www.massey.ac.nz/massey/expertise/profile.cfm?stref=298930');
    			  //name
                  foreach($html->find('div[class=pf_title]') as $element){
					  echo "<span id=staffname>";
                      echo $element->innertext;
					  echo "</span>";
                  }
				  //position
				  foreach($html->find('div[class=pf_details]//h2') as $element){
					  echo "<span id=stafftitle>";
					  echo $element->innertext;
					  echo "</span>";
				  } 
					//research interests
				  foreach($html->find('div[class=pf_section]//p', 1) as $element){
					
						if (is_object($element)) {
							echo "<br><br>";
							echo "<span id=staffjob>";
							
							//echo "<ul><li>";
							echo $element->innertext;
							//echo "</ul></li>";
							echo "</span>";
						}
					
				  }
             ?>
        
        </div>
		
        
          

        </div>
        <div class="links">
       	  <h3>Links</h3>
            <ul>
            	<li><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/natural-sciences/natural-mathematical-sciences_home.cfm">Institute of Natural and Mathematical Sciences</a></li>
<li><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/engineering-technology/engineering-and-advanced-technology-about.cfm">School of Engineering and Advanced Technology</a><a href=""></a></li>
                <li><a href="http://www.massey.ac.nz/massey/learning/departments/school-people-environment-planning/school-people-environment-planning.cfm">School of People, Environment and Planning</a><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/engineering-technology/engineering-and-advanced-technology-about.cfm"></a></li>
                <li><a href="http://www.massey.ac.nz/massey/learning/colleges/college-business/school-of-communication-journalism-and-marketing/school-of-communication-journalism-and-marketing_home.cfm">School of Communication, Journalism and Marketeing</a><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/natural-sciences/natural-mathematical-sciences_home.cfm"></a><a href=""></a></li>
                <li><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/agriculture-environment/agriculture-environment_home.cfm">Institute of Agriculture and Environment</a></li>
                <li><a href="http://www.massey.ac.nz/massey/learning/departments/school-of-psychology/research/disaster-research/disaster-research_home.cfm">Joint Centre for Disaster Research</a></li>
                <li><a href="http://www.massey.ac.nz/massey/learning/departments/centres-research/centre-for-information-technology/centre-for-information-technology_home.cfm">Centre for Information Technology</a><a href=""></a></li>
                <li><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/research/agriculture-environment-research/agriculture/centre-for-precision-agriculture/centre-for-precision-agriculture_home.cfm">Centre for Precision Agriculture</a><a href=""></a><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/engineering-technology/engineering-and-advanced-technology-about.cfm"></a></li>
                <li><a href="http://www.coastalmarineresearchgroup.com/">Coastal - Marine Research Group</a><a href="http://www.massey.ac.nz/massey/learning/colleges/college-of-sciences/about/natural-sciences/natural-mathematical-sciences_home.cfm"></a><a href=""></a></li>
            </ul>
        </div>
    </div>
    <!-- end #contentBody -->
    <br class="clearfloat" />
    <!-- begin #footer -->
    
    <div id="footercontainer">
		<table width="959" height="110" border="0">
    	  <tr>
          
    	    <td width="212" height="106">
            
            
            <p><img src="images/engine.png" id="engine" align="right"/></p>
            
              
              
            </td>
            <td width="87">
            </td>
    	    <td width="418">
            
            
          
    	      <div class="footerInfoInner">
           	<p>
           	<a href="http://www.massey.ac.nz">Massey University</a>, Private Bag 11 222
            <br>
            Palmerston North, 4442, New Zealand
            </p>
        <br />
            <p id="footerAddressLinks">
                <a href="http://www.massey.ac.nz/massey/sitemap.cfm">Site&nbsp;map</a>
                <span>&nbsp;| </span>
                <a href="http://www.massey.ac.nz/massey/a-z-listing.cfm">A-Z&nbsp;index</a>
                <span>&nbsp;| </span>
                <a href="http://www.massey.ac.nz/massey/disclaimer.cfm">Disclaimer</a>
                <span>&nbsp;| </span>
                <a href="http://www.massey.ac.nz/massey/privacy.cfm">Privacy</a>
                <span>&nbsp;| </span>
                <a href="http://www.definingnz.com">DefiningNZ</a>
                <br>
                <a href="http://www.massey.ac.nz/massey/copyright.cfm">Copyright © 1998 - 2016 Massey University</a>
                . All rights reserved
                <br>
            </p>
        </div>
              
              

            </td>
              
            <td width="224">
            
            <div class="footerContact">
    	      <p><a href="mailto:k.stock@massey.ac.nz">Contact us</a> if you would like to take part and join Massey University Geoinformatics Collaboratory</p>
    	      
  	        </p>
  	      </div>
            
            </td>
            
  	    </tr>
        
  	  </table>

	</div>
    <!-- end #footer -->
    
</div>
<!-- end #container -->
</body>
</html>
