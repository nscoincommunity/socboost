<?php
/**
 * Copyright. "Hyipium" engine. All rights reserved.
 * Any questions? Please, visit https://hyipium.com
 */

namespace App\Jobs\TaskCheck\Youtube;

use App\Jobs\TaskCheck\TaskCheckTrait;
use App\Modules\SocialNetworks\YoutubeModule;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class YoutubeVideoLikeJob
 * @package App\Jobs\TaskCheck\Youtube
 */
class YoutubeVideoLikeJob implements ShouldQueue
{
    use TaskCheckTrait;

    /**
     * @return void
     */
    public function handle()
    {
        $this->prepare();

        try {
            $result = YoutubeModule::checkVideoLike($this->user, $this->taskAction->source_address);
        } catch (\Exception $e) {
            $this->fail((new \Exception($e->getMessage())));
            return;
        }

        $this->checkResult($result);
    }
}