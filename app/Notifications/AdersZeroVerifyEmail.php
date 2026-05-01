<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdersZeroVerifyEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->subject('Verifica tu cuenta en Aders-Zero') // El asunto del correo
        ->greeting('¡Hola, ' . $notifiable->name . '!') // El saludo 
        ->line('Gracias por unirte a la Aders-Zero-API.') // Primera línea de texto
        ->action('Verificar Correo', url('/tu-link-de-verificacion')) // El botón de acción
        ->line('Si no creaste esta cuenta, ignora este mensaje.') // Línea final
        ->salutation('Atentamente, el equipo de Aders-Zero'); // Despedida personalizada
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
