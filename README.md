# Laravel Preset

A Laravel preset to scaffold new application used by Tribecloud.

### Installation

Add a new repository in your `composer.json` file:

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/tribecloud/laravel-preset"
    }
]
```

Next, run the following command to add the preset to your project:

```
composer require tribecloud/laravel-preset
```

Finally, apply the preset:

```
php artisan preset tribecloud-react
```

or

```
php artisan preset tribecloud-vue
```
