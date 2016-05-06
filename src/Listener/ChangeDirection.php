<?php

namespace Flagrow\RTL\Listener;

use Flarum\Event\ConfigureClientView;
use Illuminate\Contracts\Events\Dispatcher;

class ChangeDirection
{
    public function subscribe(Dispatcher $events)
    {
        $events->listen(ConfigureClientView::class, [$this, 'addAssets']);
    }
    
    public function addAssets(ConfigureClientView $event)
    {
        if ($event->isForum()) {
		$event->addAssets([__DIR__ . '/../../less/forum/rtl.less']);
        }
        else if($event->isAdmin()) {
		$event->addAssets([__DIR__ . '/../../less/admin/rtl.less']);
        }
    }
}
