<?php

use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
	$events->listen(ConfigureClientView::class, function(ConfigureClientView $event) {
		if ($event->isForum()) {
			$event->addAssets([
        		__DIR__ . '/less/forum/rtl.less'
      		]);
    	}
	});
};

?>
