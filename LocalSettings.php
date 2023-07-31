<?php

/*******************************/
/* Enable Federated properties */
/*******************************/
#$wgWBRepoSettings['federatedPropertiesEnabled'] = true;

/*******************************/
/* Enables ConfirmEdit Captcha */
/*******************************/
#wfLoadExtension( 'ConfirmEdit/QuestyCaptcha' );
#$wgCaptchaQuestions = [
#  'What animal' => 'dog',
#];

#$wgCaptchaTriggers['edit']          = true;
#$wgCaptchaTriggers['create']        = true;
#$wgCaptchaTriggers['createtalk']    = true;
#$wgCaptchaTriggers['addurl']        = true;
#$wgCaptchaTriggers['createaccount'] = true;
#$wgCaptchaTriggers['badlogin']      = true;

/*******************************/
/* Disable UI error-reporting  */
/*******************************/
#ini_set( 'display_errors', 0 );

$wgGroupPermissions['*']['edit'] = false;
$wgGroupPermissions['user']['edit'] = false;
$wgGroupPermissions['editor']['edit'] = true;
$wgGroupPermissions['sysop']['edit'] = true;

$wgGroupPermissions['*']['createaccount'] = false;
$wgGroupPermissions['sysop']['createaccount'] = true;

$wgGroupPermissions['sysop']['deletelogentry'] = true;
$wgGroupPermissions['sysop']['deleterevision'] = true;

#Open external links in new tab
$wgExternalLinkTarget = '_blank';

#Enable BatchIngestion
wfLoadExtension( 'BatchIngestion' );