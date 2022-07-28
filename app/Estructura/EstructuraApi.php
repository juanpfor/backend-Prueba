<?php

 namespace App\Estructura;

 use App\Estructura\EstructuraApi;


    class myclass
{
    private $status = ' successful';
    private $action = ' next';
    private $show = true;
    private $message = '';
    private $delay = null;
    private $code = 'SUC-001';
    private $result = null;
    private $debug = '';


//para pasa a la base de datos
public function __contruc ()
    {
        //logic
    }

    public function setEstado($codigo , $estado ,$mensaje)
    {
        $this->code =$codigo;
        $this->status =$estado;
        $this-> message =$mensaje;
    }

    public function  serResutadao ($reseultado)
    {
        $this->result = $reseultado;
    }

    public function toRespose($request)
    {


switch ($this->status){
    case 'error':
        {
            $this->action = 'stop';
            break;
        }

    case 'info':
        {
            $this->action = 'stop';
            break;
        }
}
        return
        [
            "status" => $this->status,
            "acccion" => $this->action,
            "show" => $this->show,
            "message" => $this->message,
            "delay" => $this->delay,
            "code" => $this->code,
            "result" => $this->result,
        ];
    }



}
