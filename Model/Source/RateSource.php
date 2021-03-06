<?php

namespace Eniture\FedExSmallPackageQuotes\Model\Source;

/**
 * Class RateSource
 * @package Eniture\FedExSmallPackageQuotes\Model\Source
 */
class RateSource implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return  [
                    [
                        'value' => 'negotiate',
                        'label' => __('Use my negotiated rates.')
                    ],
                    [
                        'value' => 'retail',
                        'label' => __('Use retail (list) rates.')
                    ],
                ];
    }
}
