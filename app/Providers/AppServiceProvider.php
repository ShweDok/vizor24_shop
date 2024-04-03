<?php

namespace App\Providers;

use App\Http\Kernel;
use Carbon\CarbonInterval;
use Illuminate\Database\Connection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Предупреждение об неправильной загрузке из базы - не до конца понял
        Model::preventLazyLoading(!app()->isProduction());
        // Предупреждение, если insert и update полей, которых нет в свойстве fillable модели
        Model::preventSilentlyDiscardingAttributes(!app()->isProduction());
        // Предупреждение, если какой-то из запросов к базе данных выполняется больше, чем 5 секунд
        DB::whenQueryingForLongerThan(500, function (Connection $connection) {
            logger()
                ->channel('telegram')
                ->debug('whenQueryingForLongerThan:' . $connection->query()->toSql());
        });
        // TODO: В 3 уроке что-то будем делать с request cycle
        $kernel = app(Kernel::class);
        $kernel->whenRequestLifecycleIsLongerThan(
            CarbonInterval::seconds(4),
            function () {
                logger()
                    ->channel('telegram')
                    ->debug('whenRequestLifecycleIsLongerThan:' . request()->url());
            }
        );
    }
}
