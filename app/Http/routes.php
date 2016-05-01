<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
| get dem webforms
*/

Route::get('/webforms/access_token={access_token}&token_type={token_type}&expires_in={expires_in}&refresh_token={refresh_token}&scope={scope}', function ($access_token, $token_type, $expires_in, $refresh_token, $scope) {
    // Setup a new Infusionsoft SDK object
	$infusionsoft = new \Infusionsoft\Infusionsoft(array(
		'clientId'     => getenv('INFUSIONSOFT_CLIENT_ID'),
		'clientSecret' => getenv('INFUSIONSOFT_CLIENT_SECRET'),
		'redirectUri'  => getenv('INFUSIONSOFT_REDIRECT_URL'),
	));

    // make the token object
    $token_object = [
        'access_token'=>$access_token,
        'token_type'=>$token_type,
        'expires_in'=>$expires_in,
        'refresh_token'=>$refresh_token,
        'scope'=>$scope
    ];

    $infusionsoft->setToken($token_object);

    $newToken = new Infusionsoft\Token($token_object);
    
    $infusionsoft->setToken($newToken);

    $webforms = $infusionsoft->webForms()->getMap();

    return array($webforms);
});
