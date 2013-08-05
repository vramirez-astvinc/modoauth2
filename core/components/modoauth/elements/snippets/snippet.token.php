<?php
// include our OAuth2 Server object
require_once $modx->getOption('modoauth.core_path',null,$defaultCorePath.'components/oauth2/').'elements/snippets/snippet.server.php';

// Handle a request for an OAuth2.0 Access Token and send the response to the client
$server->handleTokenRequest(OAuth2\Request::createFromGlobals())->send();