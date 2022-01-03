# Learn Laravel 8 API CRUD with Surfside Media
| Tutorial Video https://youtu.be/3Uy0KRPHQik

# TODOS

<ul>
    <li>OK --- Creating laravel project</li>
    <li>OK --- Post API CRUD</li>
    <li>OK --- Gallery API CRUD</li>
    <li>NOT YET --- Deploy to the internet</li>
</ul>

## Folder Setup
<ul>
    <li>App/Http/Controllers</li>
    <li>App/Http/Resources</li>
    <li>App/Models</li>
    <li>Database/factories</li>
    <li>Database/migrations</li>
    <li>Database/seeders</li>
</ul>

### Creating Project
```
composer create-project laravel/laravel project-name
```

### Creating Model with Migration
```
php artisan make:model Post -m
```

### Migrating Database
```
php artisan migrate
```

### Creating Migration
```
php artisan make:migration create_posts_table
```

### Creating Factory
```
php artisan make:factory NameFactory
```

### Creating Seeds
```
php artisan db:seed
```

### Creating Controller with Resourse
```
php artisan make:controller NameController -r
```

### Creating Resourse
```
php artisan make:resource NameController
```

# NOTES
### Adding "str_slug()" function
```
composer require laravel/helpers

use Illuminate\Support\Str;

str_slug($request->title)
```
