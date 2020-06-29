<?php

namespace ALevel\Overriding\Plugin\CustomerData;


class CartPlugin
{
    /**
     * @var \Magento\Framework\View\LayoutInterface
     */
    private $layout;

    public function __construct(
        \Magento\Framework\View\LayoutInterface $layout
    ) {
        $this->layout = $layout;
    }

    /**
     * @param \Magento\Checkout\CustomerData\Cart $subject
     *
     * @param $result
     *
     * @return array
     */
    public function afterGetSectionData(
        \Magento\Checkout\CustomerData\Cart $subject,
        $result) : array {

        $html = $this->layout->createBlock('Magento\Cms\Block\Block')->setBlockId('alevel_conent')->toHtml();
        $html .= ' '.microtime();

        $result['alevel_content'] = strip_tags($html);

        return $result;
    }
}
