<?php


namespace Clases;
use Exception as ExcepcionPHP;
use Throwable;

class Exception extends ExcepcionPHP
{
    private $log;
    private $errors;

    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        $this->log = parse_ini_file("config_local.ini")["logs"];
        $this->errors = parse_ini_file("config_local.ini")["display_errors"];

        parent::__construct($message, $code, $previous);
    }

    /*
     final public function getMessage()
     */
    public function getMensaje($bg = "#000", $color = "#fff"){

        $mensaje =  "<div style='background: $bg; color: $color; padding:15px;font-family: Consolas;width:100%;'>";

        $mensaje .= "ERROR!!!" . $this->message . " en el archivo " . $this->file . " en la línea " . $this->line;

        $trace = $this->getTrace(); // array

        $mensaje .= "<ul>";

        foreach($trace as $posicion => $data):
            $mensaje .= "<li> #$posicion " . $data["file"] . " en la linea ". $data["line"] . " con el método ". $data["function"] . " de la clase ". $data["class"] ."</li>";
        endforeach;

        $mensaje .= "</ul></div>";


        if($this->log)
            $this->logs();

        return $this->errors ? $mensaje : null;
    }


    public function logs(){

        if(!is_dir("logs"))
            mkdir("logs");

        $log = date("d/m/Y H:i:s")."hs -  $_SERVER[REQUEST_METHOD] - $_SERVER[REMOTE_ADDR]:$_SERVER[SERVER_PORT]: " . $this->message . " en el archivo " . $this->file . " en la línea " . $this->line . ". TRACE: " . $this->getTraceAsString() . "\n\n";

        file_put_contents("logs/error_logs.txt",$log,FILE_APPEND);
    }

}