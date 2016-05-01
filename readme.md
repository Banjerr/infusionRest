# InfusionRest

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

The idea is to make RESTful endpoints for various stuff for InfusionSoft

Feel free to add more endpoints for stuff you'd like to use, maybe. See Contributing section for info.

# Documentation

Will make this better eventually...

## Endpoints

### /webforms/

#### Endpoint

/webforms/access_token={access_token}&token_type={token_type}&expires_in={expires_in}&refresh_token={refresh_token}&scope={scope}

*required parameters*

- access_token
- token_type
- expires_in
- refresh_token
- scope

#### Returns

[{"form_id":"form_name","form_id":"form_name"}]

# Contributing

If there's an endpoint you need and don't see, make it yo self!

- Open a ticket with feature requests (and we might get to it, eventually)

*or*

- fork the repo
- make a feature branch (i.e. contact_tag_endpoint)
- make a pull request
