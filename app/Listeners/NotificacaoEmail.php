<?php

namespace App\Listeners;

use App\Events\EnviaRelatorio;
use App\Mail\relatorioEmail;
use App\Models\VendaModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotificacaoEmail
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(EnviaRelatorio $event): void
    {
        $vendas = VendaModel::query()->orderBy('id')->get();
        foreach($vendas as $index => $venda){

            $envioEmail = new relatorioEmail(

                $event->valorVendas,
                $event->email
            );

            $when = now()->addSecond($index * 5);
            Mail::to($venda->email)->later($when, $envioEmail);
        }
    }
}
