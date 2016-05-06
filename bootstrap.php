<?php

use Flagrow\RTL\Listener;
use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
	$events->subscribe(Listener\ChangeDirection::class);
};
