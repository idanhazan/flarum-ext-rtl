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
    	//$event->addAssets([__DIR__ . '/../../less/lib/direction.less']);
    	
        if ($event->isForum()) {
		//$event->addAssets([__DIR__ . '/../../less/forum/direction.less']);
		$event->addAssets([__DIR__ . '/../../less/forum/rtl.less']);
		
        }
        else if($event->isAdmin()) {
		$event->addAssets([__DIR__ . '/../../less/admin/direction.less']);
        }
    }
}
