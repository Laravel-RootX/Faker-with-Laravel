### Basic Terminology
> Laravel Tinker:

Laravel includes a powerful REPL(REPL stands for Read—Eval—Print—Loop, which is a type of interactive shell that takes in single user inputs, evaluates them, and returns the result to the user.), called Tinker, powered by the PsySH console by Justin Hileman under the hood. The tinker console allows you to interact with your Laravel application from the command line in an interactive shell.
Tinker used to be part of the laravel/framework package, but with the release of Laravel 5.4 is extracted into separate package.

> Laravel Seed:

Laravel offers a tool to include dummy data to the database automatically. This process is called seeding. Developers can add simply testing data to their database table using the database seeder. It is extremely useful as testing with various data types allows developers to detect bugs and optimize performance.

> Model Factories In Laravel:

Laravel has a feature called model factories that allows you to build fake data for your models. It is very useful for testing and seeding fake data into your database to see your code in action before any real user data comes in.



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
- php artisan db:seed --class=UsersTableSeeder(Specific Seeder)



