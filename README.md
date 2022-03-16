# NHS Laravel Starter Kit
### v1.0.0 

NHS Laravel Starter Kit integrates NHSUK frontend framework with Laravel package and extends the available component library, making it ready to be used with Blade and Livewire templates.  

## Installation
To install and use NHS Laravel Starter Kit - add the following to composer
```
"require-dev": {
    "nhsleadership/nhsl-laravel": "^1.0"
}
```

> There is no officially published version of NHS Laravel Kit at the moment, so you will not be able to use composer discovery yet:
> 
> ~~composer install nhsleadership/nhsl-laravel~~

But no worries, instead you will need to explicitly alias the official GIT repository in your Laravel project composer:
```
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/NHSLeadership/nhsl-laravel.git",
    }
],
"config": {
    "allow-plugins": {
        "nhsleadership/nhsl-laravel": true
    }
}
```

For the extensive NHS Laravel Kit development, you will need fork and pull down the repository locally 
```
git clone https://github.com/NHSLeadership/nhsl-laravel.git ../nhsl-laravel
```
... and alias the local path in your Laravel project composer:
```
"repositories": [
    {
        "type": "path",
        "url": "../nhsl-laravel"
    }
],
"config": {
    "allow-plugins": {
        "nhsleadership/nhsl-laravel": true
    }
}
```
If you are a developer in some cases you need to use dev-main or dev-master version instead to get the latest code in development 
```
"require-dev": {
    "nhsleadership/nhsl-laravel": "dev-master"
},
```
    
Next you need to install the dependencies with composer install or update respectively 
 
```
composer install or composer update
```
   
#### Further integration

Add NhslLaravelServiceProvider to Laravel app.php
```
'providers' => [
    ... 
    Nhsl\LaravelNhsl\NhslLaravelServiceProvider::class,
],
```

#### Publishing starter kit files locally
1. Publishing selective nhsl components (all will be listed with nhsl- prefix)
    ```
    php artisan vendor:publish
    ```
   
1. Re-publishing latest nhsl-public content with override (mvp assets)
    ```
    php artisan vendor:publish --tag=nhsl-public --force
    ```
   
1. Re-publishing latest nhsl-views content with override (optional)
    ```
    php artisan vendor:publish --tag=nhsl-views --force
    ```

1. Re-publishing latest nhsl-config with override (optional)
    ```
    php artisan vendor:publish --tag=nhsl-config --force
    ```
      
1. Re-publish latest nhsl-styles content with override (optional)
    ```
    php artisan vendor:publish --tag=nhsl-styles --force
    ```
   
1. Re-publish latest nhsl-translations content with override (optional)
    ```
    php artisan vendor:publish --tag=nhsl-translations --force
    ```
      

