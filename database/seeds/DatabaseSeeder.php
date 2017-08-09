<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $toTruncate = ['users', 'posts', 'tags', 'categories', 'post_tag', 'category_post'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        foreach ($this->toTruncate as $table) {
            DB::table($table)->truncate();
        }
        $this->call('UsersTableSeeder');
        $this->call('PostsTableSeeder');
        $this->call('TagsTableSeeder');
        $this->call('CategoriesTableSeeder');
        $this->call('PostsPivotTableSeeder');
    }
}
