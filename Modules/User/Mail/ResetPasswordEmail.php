<?php

namespace Modules\User\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Modules\User\Entities\User;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ResetPasswordEmail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * The user entity.
     *
     * @var \Modules\User\Entities\User
     */
    public $user;

    /**
     * Reset complete form url.
     *
     * @var string
     */
    public $url;

    /**
     * Create a new instance.
     *
     * @param \Modules\User\Entities\User $user
     * @param string $url
     *
     * @return void
     */
    public function __construct($user, $url)
    {
        $this->user = $user;
        $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.reset_password')
            ->subject(trans('user::email.reset_your_account_password'));
    }
}
