# Learn Laravel 8 API CRUD 
| Tutorial Video https://youtu.be/3Uy0KRPHQik

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
php artisan migrate
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