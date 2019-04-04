<?php

namespace Modules\Checkout\Listeners;

use Swift_TransportException;
use Modules\Checkout\Mail\Invoice;
use Illuminate\Support\Facades\Mail;

class SendOrderInvoiceEmail
{
    /**
     * Handle the event.
     *
     * @param \App\Events\OrderPlaced $event
     * @return void
     */
    public function handle($event)
    {
        if (setting('send_order_invoice_email')) {
            try {
                Mail::to($event->order->customer_email)
                    ->send(new Invoice($event->order));
            } catch (Swift_TransportException $e) {
                //
            }
        }
    }
}
