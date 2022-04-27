<?php

define('EMAIL_FOR_REPORTS', 'tammyanderud@praisechurch.tv');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://praisechurch.tv/thanks');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>

<form class="formoid-metro-orange" method="post">

	<div class="element-date"  <?frmd_add_class("date")?>><label class="title">CHOOSE A SUNDAY</label><input class="large" placeholder="yyyy-mm-dd" type="date" name="date" required="required"/></div>
	
	<div class="element-select"  <?frmd_add_class("select")?>><label class="title">CHOOSE A SERVICE</label><div class="large"><span><select name="select" required="required">

		<option value="10:00 AM">10:00 AM</option><br/>
		<option value="11:30 AM">11:30 AM</option><br/></select><i></i></span></div></div>
		
		
	<div class="element-name"  <?frmd_add_class("name")?>><label class="shoutout-no-border"><h5>Tell Us About You</h5></label><span class="nameFirst"><input  type="text" size="8" name="name[first]" placeholder="FIRST" required="required"/></span><span class="nameLast"><input type="text" size="14" name="name[last]" placeholder="LAST" required="required"/></span></div>
	
	<div class="element-email"  <?frmd_add_class("email")?>><input class="large" placeholder="EMAIL" type="email" name="email" value="" required="required"/></div>
	
	<div class="element-number"  <?frmd_add_class("number")?>><label class="title">How many adults are in your group?</label><input class="large" type="text" min="0" max="100" name="number" required="required" value=""/></div>
	
	<div class="element-number"  <?frmd_add_class("number1")?>><label class="title">How many children (5th grade and under) are in your group?</label><input class="large" type="text" min="0" max="100" name="number1" required="required" value=""/></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>