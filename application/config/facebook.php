<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Facebook App details
| -------------------------------------------------------------------
|
| To get an facebook app details you have to be a registered developer
| at http://developer.facebook.com and create an app for your project.
|
|  facebook_app_id               string  Your facebook app ID.
|  facebook_app_secret           string  Your facebook app secret.
|  facebook_login_type           string  Set login type. (web, js, canvas)
|  facebook_login_redirect_url   string  URL tor redirect back to after login. Do not include domain.
|  facebook_logout_redirect_url  string  URL tor redirect back to after login. Do not include domain.
|  facebook_permissions          array   The permissions you need.
*/

$config['facebook_app_id']              = '982619171795372';
$config['facebook_app_secret']          = '931fa886d5f379a5c485af855f692b14';
$config['facebook_login_type']          = 'web';
$config['facebook_login_redirect_url']  = 'localhost/login';
$config['facebook_logout_redirect_url'] = 'localhost/logout';
$config['facebook_permissions']         = array('public_profile');