### Command List

> Create a Model & Migration File
- php artisan make:model Article -m

> Create New Factory File
- php artisan make:factory ArticleFactory
```php
$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'content' => $faker->paragraph(3),
        'created_at' => now(),
        'updated_at' => now(),
    ];
});
```

> Generate Fake Data Using Tinker (By CMD)
```php
php artisan tinker
// Next, run below command to generate 100 rows of random Articles.
factory(App\Note::class,100)->create();
```

> Generate Fake Data Using Seeder
- php artisan make:seeder ArticleTableSeeder
```php
public function run()
{
    factory(App\Article::class, 100)->create();
}
```

Next step, we will declare ArticleTableSeeder inside the DatabaseSeeder. 
The file is DatabaseSeeder located app/database/seeds.
```php
public function run()
{
    $this->call(ArticleTableSeeder::class);
}
```

> Next PHP artisan command to generate 100 fake rows 
- php artisan db:seed



