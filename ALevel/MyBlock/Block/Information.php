<?php

namespace ALevel\MyBlock\Block;

use ALevel\MyBlock\DataProvider\Data;
use Magento\Framework\View\Element\Template;

/**
 * Class Information
 * @package ALevel\MyBlock\Block
 */
class Information extends Template
{
    /**
     * @var Data
     */
    private $dataprovider;

    /**
     * Information constructor.
     * @param Template\Context $context
     * @param Data $dataprovider
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Data $dataprovider,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->dataprovider = $dataprovider;
    }

    /**
     * @return string
     */
    public function getInformationFromBlock() :string
    {
        return $this->dataprovider->getDataForBlock();
    }
}


