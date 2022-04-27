<?php

define('EMAIL_FOR_REPORTS', 'tammyanderud@praisechurch.tv');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://praisechurch.tv/thanks');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd4_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>
<form class="formoid-metro-orange" style="background-color:#FFFFFF;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color:#666666;max-width:480px;min-width:150px" method="post"><div class="title"><h2>I'm New To Praise</h2></div>
	<div class="element-name"  <?frmd4_add_class("name")?>><label class="title">Name<span class="required">*</span></label><span class="nameFirst"><input  type="text" size="8" name="name[first]" required="required"/><label class="subtitle">First</label></span><span class="nameLast"><input type="text" size="14" name="name[last]" required="required"/><label class="subtitle">Last</label></span></div>
	<div class="element-number"  <?frmd4_add_class("number")?>><label class="title">Age<span class="required">*</span></label><input class="large" type="text" min="0" max="100" name="number" required="required" value=""/></div>
	<div class="element-email"  <?frmd4_add_class("email")?>><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-number"  <?frmd4_add_class("number1")?>><label class="title">Phone<span class="required">*</span></label><input class="large" type="text" min="0" max="100" name="number1" required="required" value=""/></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>
<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd4_end_form(); ?>