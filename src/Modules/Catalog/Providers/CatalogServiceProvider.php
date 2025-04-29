<?php

declare(strict_types=1);

namespace Modules\Catalog\Providers;

use Illuminate\Support\ServiceProvider;

final class CatalogServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
      $this->loadMigrationsFrom(paths: __DIR__.'/../Database/Migrations');
      $this->mergeConfigFrom(path:__DIR__.'/../config.php', key: 'catalog');
      $this->loadRoutesFrom(path: __DIR__.'/../Routes/web.php');
    }
}
