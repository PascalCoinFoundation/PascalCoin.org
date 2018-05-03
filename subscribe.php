<?php
	require_once 'MCAPI.class.php';
	$api = new MCAPI('708e72e1f6f966a06df7922ad8777094-us18');
	$merge_vars = array('FNAME'=>'', 'LNAME'=>'');

	// Submit subscriber data to MailChimp
	// For parameters doc, refer to: http://apidocs.mailchimp.com/api/1.3/listsubscribe.func.php
	$retval = $api->listSubscribe( '03de23a61f', $_POST["email"], $merge_vars, 'html', false, true );

	if ($api->errorCode){
		echo "0";
	} else {
		echo "1";
	}
?>
