<?php
// Mandatory parameter that should be set to the registered application's 
// 'API Key' value.
$api_key = "";
 
// Mandatory parameter that should be set to the registered application's
// 'Secret Key' value.
$secret_key = "";

// Fully Qualified Domain Name. Mandatory parameter that points to the location
// of AT&T's API.
$FQDN = "https://api.att.com";

// Mandatory parameter that points to AT&T's Speech API. 
$endpoint = $FQDN . "/speech/v3/speechToTextCustom";

// Mandatory parameter. Scope to use when requesting access token.
$scope = "STTC";

// Mandtory parameter. File to save access token after request. File/folder 
// must have write permissions.
$oauth_file = "oauthtoken.php";

// Optional xarg parameter. Format is comma-seperated key-value pairs. 
$x_arg = "GrammarPenaltyPrefix=1.1,GrammarPenaltyGeneric=2.0,GrammarPenaltyAltgram=4.1";

// Mandatory. Directory where files to be uploaded are stored.
$audioFolder = "audio";

// URL Link for this sample app's source code.
$linkSource = '#';

// URL link for this sample app's download.
$linkDownload = '#';

// URL link for this sample app's help page.
$linkHelp = '#';

// Mandatory. Array of speech contexts to use when sending API request.
$speech_context_config = array('GenericHints', 'GrammarList');

?>
