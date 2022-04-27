<?php

define('EMAIL_FOR_REPORTS', 'tammyanderud@praisechurch.tv');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://praisechurch.tv/thanks');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd3_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>

<form class="formoid-metro-orange" method="post">

	<div class="element-name"  <?frmd3_add_class("name")?>><label class="title">Person being baptized</label><span class="nameFirst"><input  type="text" size="8" name="name[first]" required="required"/><label class="subtitle">First</label></span><span class="nameLast"><input type="text" size="14" name="name[last]" required="required"/><label class="subtitle">Last</label></span></div>
	
	<div class="element-select"  <?frmd3_add_class("select")?>><label class="title">Service<span class="required">*</span></label><div class="large"><span><select name="select" required="required">

		<option value="">Select Service</option><br/>
		<option value="10:00 AM">10:00 AM</option><br/>
		<option value="11:30 AM">11:30 AM</option><br/></select><i></i></span></div></div>
		
	<div class="element-text"  <?frmd3_add_class("text")?>><label class="title">DOB</label><input class="large" type="text" min="0" max="100" name="number" required="required" value=""/></div>
	
	<div class="element-email"  <?frmd3_add_class("email")?>><label class="title">Email</label><input class="large" type="email" name="email" value="" required="required"/></div>
	
	<div class="element-text"  <?frmd3_add_class("text1")?>><label class="title">Phone<span class="required">*</span></label><input class="large" type="text" min="0" max="100" name="number1" required="required" value=""/></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>

<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd3_end_form(); ?>