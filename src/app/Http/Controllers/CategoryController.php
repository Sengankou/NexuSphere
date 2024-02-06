<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Livewire\Attributes\Title;


class CategoryController extends Controller
{
    #[Title('{{ $category->name }}')]
    public function showByName($categoryName)
    {
        // カテゴリ名でカテゴリを検索
        $category = Category::where('name', $categoryName)->first();

        // カテゴリが見つからない場合は404エラーを返す
        if (!$category) {
            abort(404);
        }

        // カテゴリに関連するビューを返す
        return view('livewire.categories.show', compact('category'));
    }
}
