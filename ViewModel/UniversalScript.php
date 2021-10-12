<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\ViewModel;

/**
 * Class UniversalScript
 *
 * @package   Didomi\ConsentManagement\ViewModel
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class UniversalScript extends AbstractScript
{
    /**
     * Description isDidomiConditionGa function
     *
     * @return string
     */
    public function isDidomiConditionGa(): string
    {
        return $this->configProvider->isConditionGa();
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
