<?php

date_default_timezone_set('Asia/Seoul');
class Log
{
    private $handle;

    /**
     * 인스턴스 호출시 실행
     */
    public function __construct($fileName)
    {
        $this->handle = fopen('logs/' . $fileName, 'a');
    }

    public function write($message)
    {
        fwrite($this->handle, date('Y-m-d G:i:s') . ' - ' . print_r($message, true) . "\n");
    }

    /**
     * 인스턴스를 더 이상 참조하지 않을 때
     */
    public function __destruct()
    {
        fclose($this->handle);
    }
}
