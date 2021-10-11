<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\Block\Adminhtml\System\Config;

use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

/**
 * Class SupportLink
 *
 * @package   Didomi\ConsentManagement\Block\Adminhtml\System\Config
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class SupportLink extends Field
{
    /**
     * Description SUPPORT_LINK constant
     *
     * @var string SUPPORT_LINK
     */
    public const SUPPORT_LINK = "https://support.didomi.io";

    /**
     * DocumentationLink constructor
     *
     * @param Context $context
     * @param array   $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

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

        $html .= '<a target="_blank" href="' . self::SUPPORT_LINK . '" title="' . __('Support') . '">' .  self::SUPPORT_LINK . '</a>';

        return $html;
    }
}
