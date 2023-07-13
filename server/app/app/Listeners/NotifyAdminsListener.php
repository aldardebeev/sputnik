<?php

namespace App\Listeners;

use App\Events\UserCreatedEvent;
use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use App\Notifications\AdminNotification;

class NotifyAdminsListener
{
    public function handle(UserCreatedEvent $event)
    {
        $adminRole = Role::where('name', 'Администратор')->first();

        if ($adminRole) {
            $adminUsers = User::where('id', $adminRole->user_id)->get();

            foreach ($adminUsers as $admin) {
                Notification::create([
                    'message' => 'Новый пользователь зарегистрирован: ' . $event->user->username,
                    'user_id' => $admin->id,
                ]);
            }
        }
    }
}
