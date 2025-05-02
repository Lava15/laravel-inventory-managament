<?php

declare(strict_types=1);

namespace Modules\Product\Providers;

use Illuminate\Support\ServiceProvider;

final class ProductServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
      $this->loadMigrationsFrom(paths: __DIR__.'/../Database/Migrations');
      $this->mergeConfigFrom(path:__DIR__.'/../config.php', key: 'product');
      $this->loadRoutesFrom(path: __DIR__.'/../Routes/web.php');
      $this->loadRoutesFrom(path: __DIR__.'/../Routes/api.php');
    }
}
