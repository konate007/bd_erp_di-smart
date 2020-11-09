<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DemandeController ;
use App\Models\Projet;

class AddDemandeNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $projet_id = DemandeController::$id_projet ;
        $demande_id = DemandeController::$id_demande ;

        $nom_projet = Projet::find($projet_id)->nom_projet ;
        return (new MailMessage)
                    ->line(' Nouvelle demande crée pour le projet : ' .$nom_projet)
                    ->action('Show Détails', url('/demandes/'.$demande_id))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toDatabase($notifiable) {
        //This will be stored in Database, You'll fetch this notification later to display in application
        return [
            
        ];
    }
}
