# Laravel NHSL template package
### v1.0.0 

This is a template package for Laravel based projects that integrates NHSUK frontend framework with Laravel package and extends the available component library, making it ready to be used with Blade and Livewire templates.  

## Installation
To install and use Laravel NHSL package - add the following to composer
```
"require-dev": {
    "nhsleadership/nhsl-laravel": "^1.0"
}
```
> Officially published versions will be available to install as follows:
> 
> ```composer install nhsleadership/nhsl-laravel```

For development, you will also need to fork and pull down the repository locally and alias the local path to laravel composer:
```
"repositories": [
    {
        "type": "path",
        "url": "../nhsl-laravel"
    }
],
```
    
#### Next you need to install the dependencies with 
```
composer install
```
   
#### Add NhslLaravelServiceProvider to Laravel app.php
```
'providers' => [
    ... 
    Nhsl\LaravelNhsl\NhslLaravelServiceProvider::class,
],
```

#### Publishing files for further development 
1. Publishing nhsl-config

    ```
    php artisan vendor:publish --tag=nhsl-config --force
    ```
   
2. Publishing nhsl-assets
    ```
    php artisan vendor:publish --tag=nhsl-assets --force
    ```
   
3. Publishing nhsl-views
    ```
    php artisan vendor:publish --tag=nhsl-views --force
    ```


4. Publish nhsl-styles
    ```
    php artisan vendor:publish --tag=nhsl-styles --force
    ```
   
5. Publish nhsl-translations
    ```
    php artisan vendor:publish --tag=nhsl-translations --force
    ```
      
6. Publish all
    ```
    php artisan vendor:publish --force
    ```
