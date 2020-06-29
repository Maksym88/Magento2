<?php
namespace Logger\Logger\Logger;

use Magento\Framework\Logger\Handler\Base;
use Monolog\Logger;

class Handler extends Base
{
    protected $loggerType = Logger::INFO;

    /**
     * Set file for logging logged customers.
     *
     * @var string
     */
    protected $fileName = '/var/log/logged.log';
}
