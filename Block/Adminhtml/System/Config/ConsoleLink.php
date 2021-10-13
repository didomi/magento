<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class ConsoleLink
 *
 * @package   Didomi\ConsentManagement\Block\Adminhtml\System\Config
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class ConsoleLink extends Field
{
    /**
     * Description CONSOLE_LINK constant
     *
     * @var string CONSOLE_LINK
     */
    public const CONSOLE_LINK = 'https://console.didomi.io';

    /**
     * Description _getElementHtml function
     *
     * @param AbstractElement $element
     *
     * @return string
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        /** @var string $html */
        $html = $element->getElementHtml();

        $html .= '<a target="_blank" href="' . self::CONSOLE_LINK . '" title="' . __('Console') . '">' . self::CONSOLE_LINK . '</a>';

        return $html;
    }
}
