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
 * @copyright 2021 Agence Dn'D
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
}
