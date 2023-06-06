<?php

namespace Rjorel\LaravelSpacelessBlade;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('spaceless', function () {
            return '<?php ob_start() ?>';
        });

        Blade::directive('endspaceless', function () {
            return "<?php echo minify_html(ob_get_clean()); ?>";
        });
    }
}
