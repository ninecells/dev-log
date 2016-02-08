<?php

namespace NineCells\Dev\Log;

use Illuminate\Support\ServiceProvider;

class LogServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        /**
         * @param string      $token                  Slack API token
         * @param string      $channel                Slack channel (encoded ID or name)
         * @param string      $username               Name of a bot
         * @param bool        $useAttachment          Whether the message should be added to Slack as attachment (plain text otherwise)
         * @param string|null $iconEmoji              The emoji name to use (or null)
         * @param int         $level                  The minimum logging level at which this handler will be triggered
         * @param bool        $bubble                 Whether the messages that are handled can bubble up the stack or not
         * @param bool        $useShortAttachment     Whether the the context/extra messages added to Slack as attachments are in a short style
         * @param bool        $includeContextAndExtra Whether the attachment should include context and extra data
         */
    }
}
