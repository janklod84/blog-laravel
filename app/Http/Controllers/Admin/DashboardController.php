<?php
namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    
    /**
     * Dasboard
     * 
     * @return void
    */
    public function dashboard()
    {
       return view('admin.dashboard', [
          'categories' => Category::lastCategories(5), // вернуть 5 запись
          'articles'   => Article::lastArticles(5),
          'count_categories' => Category::count(), 
          'count_articles' => Article::count()
       ]);
    }
}
