<?php
 
namespace App\Notifications;
 
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
 
class MyResetPassword extends ResetPassword
{
    public function toMail($notifiable)
    {
    return (new MailMessage)
        ->subject('Recuperar contraseña')
        ->greeting('Hola')
        ->line('Ha recibido este correo de acuerdo a la solicitud para la recuperacion de contraseña para su cuenta.')
        ->action('Recuperar contraseña', url('password/reset', $this->token))
        ->line('Si usted no realizo esta solicitud, favor de ignorar este correo electrónico.');
    }
}