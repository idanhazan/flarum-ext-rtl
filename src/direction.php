<?php

namespace Hazan;

use Flarum\Events\BuildClientView;
use Flarum\Support\Extension as BaseExtension;
use Illuminate\Events\Dispatcher;

class Extension extends BaseExtension
{
    public function listen(Dispatcher $events) {
		$events->listen(BuildClientView::class, [$this, 'addAssets']);
    }
	
	public function addAssets(BuildClientView $event){
		 $event->forumAssets([
			__DIR__.'/../less/forum/rtl.less'
		]);
	}
}

?>
