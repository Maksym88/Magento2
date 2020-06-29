<?php

namespace ALevel\Overriding\Plugin\Block;

use ALevel\JavaScript\Block\Component;
use Magento\Checkout\Block\Onepage;
use Magento\Framework\Serialize\Serializer\Json;

/**
 * Class ComponentPlugin
 * @package ALevel\Overriding\Plugin\Block
 */
class ComponentPlugin
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
     *
     * @return string
     */
    public function afterGetJsLayout(
        Component $subject,
        $result
    ) {
        $resultArray = $this->json->unserialize($result);

        return $this->json->serialize($resultArray);
    }
}
