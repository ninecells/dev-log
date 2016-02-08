<?php

namespace NineCells\Dev\Log;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/resources/config/ninecells/log.php' => config_path('ninecells/log.php'),
        ]);

        if (config('ninecells.log.useSlack', false)) {
            with(\Log::getMonolog())->pushHandler(new \Monolog\Handler\SlackHandler(
                config('ninecells.log.slack.token'),
                config('ninecells.log.slack.channel'),
                config('ninecells.log.slack.username'),
                config('ninecells.log.slack.useAttachment'),
                config('ninecells.log.slack.iconEmoji'),
                config('ninecells.log.slack.level')
            ));
        }
    }

    public function register()
    {
    }
}
