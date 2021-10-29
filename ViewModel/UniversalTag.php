<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\ViewModel;

/**
 * ViewModel to manage UniversalTag
 *
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class UniversalTag extends AbstractScript
{
    /**
     * Didomi Vendor Id constant
     *
     * @var string DIDOMI_VENDOR_ID
     */
    public const DIDOMI_VENDOR_ID = 'c:googleana-4TXnJigR';

    /**
     * Description isDidomiConditionGa function
     *
     * @return bool
     */
    public function isDidomiConditionGa(): bool
    {
        return $this->configProvider->isConditionGa() && $this->isDidomiEnable();
    }

    /**
     * Description getVendorId function
     *
     * @return string
     */
    public function getVendorId(): string
    {
        return self::DIDOMI_VENDOR_ID;
    }
}
