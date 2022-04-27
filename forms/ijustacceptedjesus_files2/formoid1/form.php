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

	<div class="element-date"  <?frmd_add_class("date")?>><label class="title">Date of Acceptance</label><input class="large" placeholder="yyyy-mm-dd" type="date" name="date" /></div>
	
	<div class="element-name"  <?frmd_add_class("name")?>><span class="nameFirst"><input  type="text" size="8" name="name[first]" placeholder="FIRST" required="required"/></span><span class="nameLast"><input type="text" size="14" name="name[last]" placeholder="LAST" required="required"/></span></div>	
	
	<div class="element-email"  <?frmd_add_class("email")?>><input class="large" type="email" name="email" value="" placeholder="EMAIL" required="required"/></div>
	
	<div class="element-input"  <?frmd_add_class("input")?>><input class="large" type="text" name="input" placeholder="PHONE" required="required"/></div>

<div class="submit"><input type="submit" value="Submit"/></div>

</form>

<script type="text/javascript" src="<?=dirname($form_path)?>/formoid-metro-orange.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>