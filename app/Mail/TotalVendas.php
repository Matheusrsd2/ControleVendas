<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Vendas;

class TotalVendas extends Mailable
{
    use Queueable, SerializesModels;

    public $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('teste@no-reply.com', 'teste')
            ->subject('Total de vendas do Dia')
            ->view('vendas_dia')
            ->with(['venda' => $this->venda]);
    }
}
