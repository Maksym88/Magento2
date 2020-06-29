<?php

namespace ALevel\Overriding\Plugin\Block;

use Magento\Checkout\Block\Onepage;
use Magento\Framework\Serialize\Serializer\Json;

/**
 * Class OnepagePlugin.
 *
 * @package ALevel\Overriding\Block
 */
class OnepagePlugin
{
    /**
     * @var Json
     */
    private $json;

    /**
     * OnepagePlugin constructor.
     *
     * @param Json $json
     */
    public function __construct(
        Json $json
    ) {
        $this->json = $json;
    }


    /**
     * @param Onepage $subject
     * @param $result
     * @return string
     */
    public function afterGetJsLayout(
        Onepage $subject,
        $result
    ) {
        $resultArray = $this->json->unserialize($result);

        return $this->json->serialize($resultArray);
    }
}
