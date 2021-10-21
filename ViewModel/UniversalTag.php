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
     * Description isDidomiConditionGa function
     *
     * @return bool
     */
    public function isDidomiConditionGa(): bool
    {
        return $this->configProvider->isConditionGa() && $this->isDidomiEnable();
    }

    /**
     * Description retrieveVendorId function
     *
     * @return string|null
     */
    public function retrieveVendorId(): ?string
    {
        return $this->configProvider->getVendorId();
    }
}
