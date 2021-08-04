<?php

namespace App\Http\Livewire\Notifications;

use Illuminate\Notifications\DatabaseNotification;
use Livewire\Component;

class Show extends Component
{
    public $notifications;

    public function mount()
    {
        $this->notifications=auth()->user()->unreadNotifications;
    }
    public function get_description($notification)
    {
        switch ($notification->type) {
            case 'App\Notifications\stockLevel':
                return "<span class='uppercase text-xs font-bold'>
                    Nivel de stock ".$notification->data['level']."
                </span><span class='text-xs'>
                    El producto ".$notification->data['product']." se está agotando.
                </span>";
                break;
        }
    }
    public function get_icon($type)
    {
        switch ($type) {
            case 'App\Notifications\stockLevel':
                return '<i class="fas fa-boxes text-3xl"></i>';
                break;
        }
    }
    public function go_url($id)
    {
        $notify=DatabaseNotification::find($id);
        $notify->markAsRead();
        return redirect()->away($notify->data['resource']);
    }
    public function render()
    {
        return view('livewire.notifications.show');
    }
}
