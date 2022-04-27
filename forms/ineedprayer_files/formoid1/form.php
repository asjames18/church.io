<?php

define('EMAIL_FOR_REPORTS', 'tammyanderud@praisechurch.tv');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://praisechurch.tv/thanks');
define('FINISH_ACTION', 'redirect');
define('FINISH_MESSAGE', 'Thanks for filling out my form!');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

require_once str_replace('\\', '/', __DIR__) . '/handler.php';

?>

<?php if (frmd1_message()): ?>
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<span class="alert alert-success"><?=FINISH_MESSAGE;?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?=dirname($form_path)?>/formoid-metro-orange.css" type="text/css" />
<script type="text/javascript" src="<?=dirname($form_path)?>/jquery.min.js"></script>

<form class="formoid-metro-orange" method="post">

	<div class="element-name"  <?frmd1_add_class("name")?>><span class="nameFirst"><input  type="text" size="8" name="name[first]" placeholder="FIRST" required="required"/></span><span class="nameLast"><input type="text" size="14" name="name[last]" placeholder="LAST" required="required"/></span></div>
	
	<div class="element-email"  <?frmd1_add_class("email")?>><input class="large" type="email" name="email" value="" placeholder="EMAIL" required="required"/></div>
	
	<div class="element-number"  <?frmd1_add_class("number")?>><input class="large" type="text" min="0" max="100" name="number" placeholder="PHONE" required="required" value=""/></div>
	
	<div class="element-textarea"  <?frmd1_add_class("textarea")?>><textarea class="medium" name="textarea" cols="20" rows="5" placeholder="MESSAGE" required="required"></textarea></div>

<div class="submit"><input type="submit" value="Submit"/></div></form>

<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd1_end_form(); ?>