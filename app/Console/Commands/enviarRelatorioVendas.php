<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class enviarRelatorioVendas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:enviar-relatorio-vendas';
    protected $descriptiom = "Envia Relatorio de Vendas";
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $defineTempoAtual = Carbon::today()->format('Y-m-d');
        $emails = VendaModel::distinct()->pluck('email');

        foreach ($emails as $email) {

            $buscarVendas = (new VendaModel())->buscaValorTotalVendas($email, $defineTempoAtual);

            // Envia email somente se houver vendas
            if ($buscarVendas > 0) {

                Mail::to($email)->send(new relatorioEmail($buscarVendas));
            }
        }

        $this->info('Relatórios de vendas diários enviados com sucesso!');
    }
}
