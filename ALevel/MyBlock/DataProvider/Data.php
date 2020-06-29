<?php

namespace ALevel\MyBlock\DataProvider;


/**
 * Class Data
 * @package ALevel\MyBlock\DataProvider
 */
class Data
{
    /**
     * @return string
     */
    public function getDataForBlock() : string
    {
        $html = 'The Magento_AdobeStockImageApi module module serves as application
         program interface (API) for the Adobe Stock image.';
        return $html;
    }

    public function getDataForBlockViewModel() : string
    {
        $html = 'VIEW MODEL !!!!';
        return $html;
    }

}
