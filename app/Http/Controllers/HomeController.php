<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Modules\Catalog\Models\Category;

class HomeController extends Controller
{
  /**
   * Home page controller.
   */
  public function __invoke(): View
  {
    $categories = Category::with('translations')->get();
    return view(
      view: 'home',
      data: [
        'categories' => $categories,
      ]
    );
  }
}
