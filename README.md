# NHS Laravel Starter Kit
### v1.0.0 

NHS Laravel Starter Kit integrates NHSUK frontend framework with Laravel package and extends the available component library, making it ready to be used with Blade and Livewire templates.  

## Installation
There is no officially published version of NHS Laravel Kit for v1.0.0 RC, so you will not be able to use composer discovery yet.
In order to install and use NHS Laravel Starter Kit please add the following git path to your project composer file.
```
"repositories": [
    {
        "type": "git",
        "url": "https://github.com/NHSLeadership/nhsl-laravel.git",
    }
]
```
And then install normally with 
```
composer require nhsleadership/nhsl-laravel
```

> DEV NOTE: For the extensive NHS Laravel Kit development, you will need fork and pull down the repository locally: 
> ```
> git clone https://github.com/NHSLeadership/nhsl-laravel.git ../nhsl-laravel
> ```
> ... and alias the local path in your Laravel project composer:
> ```
> "repositories": [
>     {
>         "type": "path",
>         "url": "../nhsl-laravel"
>     }
> ],
> "config": {
>     "allow-plugins": {
>         "nhsleadership/nhsl-laravel": true
>     }
> }
> ```
> In some cases you may need to use your local branch dev-main or dev-master instead to make it work: 
> ```
> "require-dev": {
>     "nhsleadership/nhsl-laravel": "dev-master"
> },
> ```
   
#### Integration with Laravel

To get it all working with Laravel you need to add the integration in the provider configuration: 
To integrate and publish all components (those listed with nhsl- prefix) simply run:
```
php artisan vendor:publish
```
and choose `Nhsl\LaravelNhsl\NhslLaravelServiceProvider`. 
At this stage all controllers, resources and assets should be published for you and available to extend in the respective directories.

And that's really it! Enjoy...

#### Re-publishing individual starter kit files locally
   
1. Re-publishing nhsl-assets public content (required)
    ```
    php artisan vendor:publish --tag=nhsl-assets
    ```
    or ... 
    ```
    php artisan vendor:publish --tag=nhsl-assets --force
    ```
   
1. Re-publishing latest nhsl-views content (optional)
    ```
    php artisan vendor:publish --tag=nhsl-views
    ```
   or ... 
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
      
## Testing
If you want to run tests alongside your other Laravel tests, you need to add the following to your `phpunit.xml` config:
```
<testsuites>
    <testsuite name="Nhsl Laravel Test Suite">
        <directory suffix="Test.php">./vendor/nhsleadership/nhsl-laravel/tests</directory>
    </testsuite>
</testsuites>
```


