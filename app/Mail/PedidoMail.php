<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class PedidoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $data , $file )
    {
        $this->data = $data;
        $this->file = $file;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $title = "Pedido";
        if( isset( $this->data[ "producto" ] ) )
            $title = "Consulta de producto";
        $mensaje = $this->replyTo( $this->data[ "email" ], $this->data[ "nombre" ] )->subject( $title )->view('form.contacto')->with( $this->data );
        if( !empty( $this->file ) ) {
            return $mensaje->attach($this->file->getRealPath(),
            [
                'as' => $this->file->getClientOriginalName(),
                'mime' => $this->file->getClientMimeType(),
            ]);
        }
        return $mensaje;
    }
}
