<?php
namespace App\Traits;

trait InteractsWithBanner{
	public function banner(string $message, string $style = 'success')
    {
        $this->dispatchBrowserEvent('banner-message',[
        	'style' => $style,
        	'message' => $message
        ]);
    }
}
?>