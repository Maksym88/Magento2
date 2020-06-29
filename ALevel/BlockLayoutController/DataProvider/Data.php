<?php

namespace ALevel\BlockLayoutController\DataProvider;

use Magento\Framework\App\Config\ScopeConfigInterface;

/**
 * Class Data.
 *
 * @package ALevel\BlockLayoutController\DataProvider
 */
class Data
{
    const CONFIG_PATH_ALEVEL = 'alevel/alevel_group/default';

    const CONFIG_PATH_ALEVEL_ENABLE = 'alevel/alevel_group/enable';

    const CONFIG_PATH_ALEVEL_COUNTRIES = 'alevel/alevel_group/atom_eu_countries';
    /**
     * @var ScopeConfigInterface
     */
    private $scopeConfig;

    /**
     * Data constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return string
     */
    public function getDataForBlock(): string
    {
        $enable = $this->scopeConfig->getValue(
            static::CONFIG_PATH_ALEVEL_ENABLE,
            ScopeConfigInterface::SCOPE_TYPE_DEFAULT
        );

        if ($enable) {
            $html = 'The Magento_AdobeStockImageApi module module serves as application program interface (API) for the Adobe Stock image.';
        } else {
            $html = 'This functionality is disable';
        }

        return $html;
    }

    public function getDataForBlockViewModel(): string
    {
        $html = 'VIEW MODEL !!!!';

        return $html;
    }
}
