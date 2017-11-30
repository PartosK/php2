<?php

namespace App;



use \Psr\Log\AbstractLogger;
use \Psr\Log\LoggerInterface;


/**
 * Class Logger
 */
class Logger extends AbstractLogger implements LoggerInterface
{
    /**
     * @inheritdoc
     */
    public function log($level, $message, array $context = [])
    {
        $errors =  'time: '. date('h-i-s : d-m-Y') . " ERROR_MESSAGE:" . $message ." " . $context['context'] . "\r\n";
        file_put_contents(__DIR__ . '/../log_file.log', $errors, FILE_APPEND);
    }
}