<?php
/**
 * Solwin Infotech
 * Solwin Contact Form Widget Extension
 *
 * @category   Solwin
 * @package    Solwin_Contactwidget
 * @copyright  Copyright © 2006-2016 Solwin (https://www.solwininfotech.com)
 * @license    https://www.solwininfotech.com/magento-extension-license/
 */

namespace Solwin\Contactwidget\Model\Config\Source;

class Education implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('SSC')],
            ['value' => '2', 'label' => __('HSC')],
            ['value' => '3', 'label' => __('Bachelor Degree')],
            ['value' => '4', 'label' => __('Master Degree')]
        ];
    }
}
