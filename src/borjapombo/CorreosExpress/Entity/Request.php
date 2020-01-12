<?php

namespace borjapombo\CorreosExpress\Entity;


class Request
{
    private $order;
    private $addressee;
    private $sender;

    public function __construct(Order $order, Addressee $addressee, Sender $sender)
    {

        $this->order     = $order;
        $this->addressee = $addressee;
        $this->sender    = $sender;
    }

    public function build()
    {
        $requestBody = [
            'solicitante'               => $this->order->clientCode(),
            'fecha'                     => ($this->order->date())->format('dmY'),
            'codRte'                    => $this->sender->code(),
            'nomRte'                    => $this->sender->name(),
            'nifRte'                    => $this->sender->nif(),
            'dirRte'                    => $this->sender->address()->street(),
            'pobRte'                    => $this->sender->address()->city(),
            'codPosNacRte'              => $this->sender->address()->nationalPostalCode(),
            'paisISORte'                => $this->sender->address()->country(),
            'codPosIntRte'              => $this->sender->address()->internationalPostalCode(),
            'contacRte'                 => $this->sender->name(),
            'telefRte'                  => $this->sender->phone(),
            'emailRte'                  => $this->sender->email(),
            'codDest'                   => $this->addressee->code(),
            'nomDest'                   => $this->addressee->name(),
            'nifDest'                   => $this->addressee->nif(),
            'dirDest'                   => $this->addressee->address()->street(),
            'pobDest'                   => $this->addressee->address()->city(),
            'codPosNacDest'             => $this->addressee->address()->nationalPostalCode(),
            'paisISODest'               => $this->addressee->address()->country(),
            'codPosIntDest'             => $this->addressee->address()->internationalPostalCode(),
            'contacDest'                => $this->addressee->name(),
            'telefDest'                 => $this->addressee->phone(),
            'emailDest'                 => $this->addressee->email(),
            'observac'                  => $this->order->comments(),
            'numBultos'                 => $this->order->numberOfPackages(),
            'kilos'                     => $this->order->weight(),
            'producto'                  => $this->order->productCode(),
            'portes'                    => $this->order->shippingPaidStatus(),
            'reembolso'                 => $this->order->refund(),
            'refRecogida'               => $this->order->code(),
            'codDirecDestino'           => '',
            'password'                  => 'string',
            'listaInformacionAdicional' => [
                [
                    'tipoEtiqueta' => '1',
                    'etiquetaPDF'  => 'S',
                ],
            ],
        ];

        for ($x=1;$x<=$this->order->numberOfPackages();$x++) {
            $requestBody['listaBultos'][] = [
                [
                    'codBultoCli'   => null,
                    'codUnico'      => null,
                    'descripcion'   => null,
                    'kilos'         => 1,
                    'ancho'         => 0,
                    'largo'         => 0,
                    'volumen'       => 0,
                    'alto'          => 0,
                    'observaciones' => null,
                    'referencia'    => null,
                    'orden'         => $x,
                ],
            ];
        }

        return $requestBody;
    }
}
