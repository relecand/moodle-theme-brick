<?php

$hasheading = ($PAGE->heading);
$hasnavbar = (empty($PAGE->layout_options['nonavbar']) && $PAGE->has_navbar());
$hasfooter = (empty($PAGE->layout_options['nofooter']));
$hassidepost = $PAGE->blocks->region_has_content('side-post', $OUTPUT);
$showsidepost = ($hassidepost && !$PAGE->blocks->region_completely_docked('side-post', $OUTPUT));

$custommenu = $OUTPUT->custom_menu();
$hascustommenu = (empty($PAGE->layout_options['nocustommenu']) && !empty($custommenu));


$bodyclasses = array();
if ($showsidepost) {
    $bodyclasses[] = 'side-post-only';
} else if (!$showsidepost) {
    $bodyclasses[] = 'content-only';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <link href='https://fonts.googleapis.com/css?family=Signika:300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!--link rel="shortcut icon" href="<?php echo $OUTPUT->pix_url('favicon', 'theme')?>" /-->
    <style type="text/css">
        .link {display: none;} /*Thema diskutieren rausnehmen*/
    </style>
    <?php echo $OUTPUT->standard_head_html() ?>
</head>

<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses.' '.join(' ', $bodyclasses)) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>

<!-- START OF HEADER -->

<div id="page-header">
	<div id="header">

                <div style="float:left">
                    <a title="Zur Moodle-Startseite" href="<?php echo $CFG->wwwroot ?>"><img style="height:94px" alt="Zur Moodle-Startseite" src="<?php echo $CFG->wwwroot ?>/theme/image.php?theme=htw&component=theme&image=logohtwmoodle" /></a>
                </div>


		<div id="loggedinas">
			<?php if ($hasheading) {
   	        	echo $OUTPUT->lang_menu();
                echo '<a title="Zur HTW Berlin Webseite" href="https://www.htw-berlin.de"><img alt="HTW Logo" style="margin-right: 26px;" src="'.$CFG->wwwroot.'/theme/image.php?theme=htw&component=theme&image=htw" /></a>';
                /*echo $OUTPUT->login_info();
                echo $PAGE->headingmenu;*/
            } ?>
		</div>

		<div id="headerbottom">

			<div id="menu">
				<?php if ($hascustommenu) { ?>
 					<div id="custommenu"><?php echo $custommenu; ?></div>
				<?php } ?>
			</div>

		</div>

	</div>
</div>

<!-- END OF HEADER -->




<div id="mypagewrapper">
	<div id="page">
		<div id="wrapper" class="clearfix">

<!-- START OF CONTENT -->

			<div id="page-content-wrapper" class="wrapper clearfix">
		    	<div id="page-content">
    		    	<div id="region-main-box">
        		    	<div id="region-post-box">

	            	    	<div id="region-main-wrap">
    	            	    	<div id="region-main">

        	            	    	<div class="region-content">

            	            	    	<?php echo $OUTPUT->main_content() ?>
	                	        	</div>
    	                		</div>
	    	            	</div>





		                	<?php if ($hassidepost) { ?>
    		            	<div id="region-post" class="block-region">
        		            	<div class="region-content">

<div class="block_course_summary block">
<div class="header">
  <h2>Login</h2>
</div>

<div class="content">

<form action="<?php echo $CFG->wwwroot ?>/login/index.php" method="post" id="login">
          <div class="loginform">
            <div class="form-label"><label for="username">Loginname</label></div>
            <div class="form-input">
              <input name="username" id="username" size="20" type="text">
            </div>
            <div class="clearer"><!-- --></div>
            <div class="form-label"><label for="password">Passwort</label></div>
            <div class="form-input">
              <input name="password" id="password" size="20" value="" type="password">
              <input id="loginbtn" value="Login" type="submit">
            </div>
          </div>
            <div class="clearer"><!-- --></div>
        </form>
    </div>
</div>

<div class="block_course_summary block">

<div class="header">
  <h2>Kurse anlegen</h2>
</div>

<div class="content">

<p>Als Dozent/-in legen Sie Ihre Kurse inklusive der eingeschriebenen Studierenden über den LSF-Moodle-Connector mit wenigen Klicks selber an. </p>
<!--p><a style="font-weight:300;color:#77B900" href="https://moodle.htw-berlin.de/lmc/">Moodle-LSF-Connector aufrufen</a></p-->
<input type="button" value="LSF-Moodle-Connector" onClick="location.href = 'https://moodle.htw-berlin.de/lmc/'" /> 

</div>
</div>

<?php echo $OUTPUT->blocks_for_region('side-post') ?>

                		    	</div>
	                		</div>
	    	            	<?php } ?>

    	    	    	</div>
	    	    	</div>
	    		</div>
    		</div>

<!-- END OF CONTENT -->


		</div>
	</div>
	
<!-- START OF CONTENT 2-->
<!--div id="page">
 <div id="wrapper" class="clearfix">



   <div id="page-content-wrapper" class="wrapper clearfix">
    <div id="page-content" style="
text-align: center;">

        <h2>About</h2>


         <a href="#">
            <!--img style="margin-left: 20px;vertical-align: middle;" src="#" alt="" title=""-->
         </a>

<p style="margin-top:20px"></p>

  </div>
</div>
</div>

</div-->

<!-- START OF FOOTER -->

<?php if ($hasfooter) { ?>
	<div id="page-footer" class="wrapper">
		<p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
		<?php
        echo $OUTPUT->login_info();
		echo $OUTPUT->home_link();
        echo $OUTPUT->standard_footer_html();
		?>
	</div>
<?php } ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>
