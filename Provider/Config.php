<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\Provider;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Provider to manage Config
 *
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class Config
{
    /**
     * Didomi consent notice config path
     *
     * @var string XML_PATH_DIDOMI_CONSENT_NOTICE
     */
    public const XML_PATH_DIDOMI_CONSENT_NOTICE = 'didomi/consent_management/consent_notice';
    /**
     * Didomi enable module config path
     *
     * @var string XML_PATH_DIDOMI_ENABLE_MODULE
     */
    public const XML_PATH_DIDOMI_ENABLE_MODULE = 'didomi/consent_management/enable_module';
    /**
     * Didomi display consent link footer config path
     *
     * @var string XML_PATH_DIDOMI_DISPLAY_CONSENT_LINK_FOOTER
     */
    public const XML_PATH_DIDOMI_DISPLAY_CONSENT_LINK_FOOTER = 'didomi/consent_management/display_consent_link_footer';
    /**
     * Didomi consent choice link label config path
     *
     * @var string XML_PATH_DIDOMI_C0NSENT_CHOICE_LINK_LABEL
     */
    public const XML_PATH_DIDOMI_C0NSENT_CHOICE_LINK_LABEL = 'didomi/consent_management/consent_choice_link_label';
    /**
     * Didomi condition google analytics config path
     *
     * @var string XML_PATH_DIDOMI_CONDITION_GA
     */
    public const XML_PATH_DIDOMI_CONDITION_GA = 'didomi/consent_management/condition_ga';
    /**
     * Description $scopeConfig field
     *
     * @var ScopeConfigInterface $scopeConfig
     */
    protected $scopeConfig;

    /**
     * Config constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * Description getConsentNotice function
     *
     * @param string|null $website
     *
     * @return string|null
     */
    public function getConsentNotice($website = null): ?string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_CONSENT_NOTICE,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }

    /**
     * Description isEnableModule function
     *
     * @param string|null $website
     *
     * @return bool
     */
    public function isEnableModule($website = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_ENABLE_MODULE,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }

    /**
     * Description isDisplayConsentLinkFooter function
     *
     * @param string|null $website
     *
     * @return bool
     */
    public function isDisplayConsentLinkFooter($website = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_DISPLAY_CONSENT_LINK_FOOTER,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }

    /**
     * Description getConsentChoiceLinkLabel function
     *
     * @param string|null $store
     *
     * @return string|null
     */
    public function getConsentChoiceLinkLabel($store = null): ?string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_C0NSENT_CHOICE_LINK_LABEL,
            ScopeInterface::SCOPE_STORE,
            $store
        );
    }

    /**
     * Description isConditionGa function
     *
     * @param string|null $website
     *
     * @return bool
     */
    public function isConditionGa($website = null): bool
    {
        return (bool)$this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_CONDITION_GA,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }
}
