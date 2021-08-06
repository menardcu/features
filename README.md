
# Host Domain 
Click here to test: [Features](https://lfeatures.herokuapp.com/)


# Technical Assessment 
## User story: 
As Product Manager, I would like to manage users’ accesses to new features via feature switches, i.e. enabling/disabling certain feature based on a user’s email and feature names). 

## Requirements: 

### Task 1 (GET Method)

#### Example Request:
```
GET /feature?email=XXX&featureName=XXX
```
This endpoint receives email (user’s email) and featureName as request parameters and returns the following response in JSON format. 

#### Example Response: 
```
{ 
    "canAccess": true|false (will be true if the user has access to the featureName 
} 
```

### Task 2 (POST Method)

#### Request endpoint:
```
POST /feature
```
This endpoint receives the following request in JSON format and returns an empty response with HTTP Status OK (200) when the database is updated successfully, otherwise returns Hp Status Not Modified (304). 

#### Example Request: 
```
{ 
"featureName": "xxx", (string) 
"email": "xxx", (string) (user's name) 
"enable": true|false (boolean) (uses true to enable a user's access, otherwise 
}
```


# Changes LOG

## Database migration
```
database/migrations/2021_08_06_124029_create_features_table.php
```

## Models: use for all db connection.
```
app/Models/Features.php
```

## Repositories: will be all the queries/eloquent
```
app/Repositories/FeaturesRepository.php
```

## Services: use for business logic
```
app/Services/FeaturesService.php
```

## Controller: use for validation.
```
app/Http/Controllers/FeatureController.php
```

## Setup Local
```
git clone git@github.com:menardcu/features.git
cd features
composer install
php artisan migrate
```


# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience t    o be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing,     and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
