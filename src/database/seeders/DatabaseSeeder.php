<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Accesslink;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        // UserFactory を使用してユーザーを生成
        $users = User::factory()->count(3)->create();

        foreach($users as $user){
            Category::factory()->count(3)->create([
                'user_id' => $user->id
            ])->each(function($category){
                Subcategory::factory()->count(3)->create([
                    'category_id' => $category->id
                ])->each(function($subcategory){
                    Accesslink::factory()->count(5)->create([
                        'subcategory_id' => $subcategory->id,
                        'user_id' => $subcategory->category->user_id
                    ]);
                });
            });
        }

    }
}
