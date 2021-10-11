<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\ViewModel;

use Didomi\ConsentManagement\Provider\Config;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class FooterScript
 *
 * @package   Didomi\ConsentManagement\ViewModel
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class FooterScript implements ArgumentInterface
{
    /**
     * ConfigProvider
     *
     * @var Config $configProvider
     */
    protected $configProvider;

    /**
     * HeadScript constructor
     *
     * @param Config $configProvider
     */
    public function __construct(
        Config $configProvider
    ) {
        $this->configProvider = $configProvider;
    }

    /**
     * Description isDidomiDisplayConsentLinkFooter function
     *
     * @return string
     */
    public function isDidomiDisplayConsentLinkFooter(): string
    {
        return $this->configProvider->isDisplayConsentLinkFooter();
    }

    /**
     * Description isDidomiEnable function
     *
     * @return string
     */
    public function isDidomiEnable(): string
    {
        return $this->configProvider->isEnableModule();
    }

    /**
     * Description retrieveConsentChoiceLinkLabel function
     *
     * @return string|null
     */
    public function retrieveConsentChoiceLinkLabel(): ?string
    {
        return $this->configProvider->getConsentChoiceLinkLabel();
    }

}
