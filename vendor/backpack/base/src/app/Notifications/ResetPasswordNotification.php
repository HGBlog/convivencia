<?php

namespace Backpack\Base\app\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends ResetPassword
{
    /**
     * Build the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage())
            ->line([
                'Você está recebendo este email porque nós recebemos um pedido de troca de senha para sua conta no Sistema de Convivências do Caminho Neocatecumenal no Brasil',
                'Clique no botão abaixo para trocar a sua senha:',
            ])
            ->action('Trocar a senha', url(config('app.url').'/password/reset', $this->token))
            ->line('Se você não solicitou a troca de senha ou desconhece este Sistema de Convivências, não se preocupe. Apenas desconsidere esta mensagem.');
    }
}
