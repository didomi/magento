<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\Provider;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 *
 * @package   Didomi\ConsentManagement\Provider
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class Config
{
    /**
     * Didomi head script config path
     *
     * @var string XML_PATH_DIDOMI_HEAD_SCRIPT
     */
    public const XML_PATH_DIDOMI_HEAD_SCRIPT = 'didomi_consent_management/consent_management/consent_notice';
    /**
     * Didomi enable module config path
     *
     * @var string XML_PATH_DIDOMI_ENABLE_MODULE
     */
    public const XML_PATH_DIDOMI_ENABLE_MODULE = 'didomi_consent_management/consent_management/enable_module';
    /**
     * Didomi display consent link footer config path
     *
     * @var string XML_PATH_DIDOMI_DISPLAY_CONSENT_LINK_FOOTER
     */
    public const XML_PATH_DIDOMI_DISPLAY_CONSENT_LINK_FOOTER = 'didomi_consent_management/consent_management/display_consent_link_footer';
    /**
     * Didomi consent choice link label config path
     *
     * @var string XML_PATH_DIDOMI_C0NSENT_CHOICE_LINK_LABEL
     */
    public const XML_PATH_DIDOMI_C0NSENT_CHOICE_LINK_LABEL = 'didomi_consent_management/consent_management/consent_choice_link_label';

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
     * Description getDidomiHeadScript function
     *
     * @param null $website
     *
     * @return string|null
     */
    public function getDidomiHeadScript($website = null): ?string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_HEAD_SCRIPT,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }

    /**
     * Description isEnableModule function
     *
     * @param null $website
     *
     * @return string
     */
    public function isEnableModule($website = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_ENABLE_MODULE,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }

    /**
     * Description isDisplayConsentLinkFooter function
     *
     * @param null $website
     *
     * @return string
     */
    public function isDisplayConsentLinkFooter($website = null): string
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_DIDOMI_DISPLAY_CONSENT_LINK_FOOTER,
            ScopeInterface::SCOPE_WEBSITES,
            $website
        );
    }

    /**
     * Description getConsentChoiceLinkLabel function
     *
     * @param null $store
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
}
