<?php
namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Module;

class BaseComposer
{
	protected $__module;

	public function __construct(Module $m)
	{
        $this->__module = $m;
	}

	public function compose(View $view)
	{
		$view->with('modules',$this->__module->get());
	}
}