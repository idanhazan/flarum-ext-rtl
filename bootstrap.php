<?php

namespace Flagrow\RTL;

use Illuminate\Contracts\Events\Dispatcher;

return function (Dispatcher $events) {
	$events->subscribe(Listener\RTLClientView::class);
};
