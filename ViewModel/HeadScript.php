<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\ViewModel;

/**
 * Class HeadScript
 *
 * @package   Didomi\ConsentManagement\ViewModel
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class HeadScript extends AbstractScript
{
    /**
     * Description retrieveHeadScript function
     *
     * @return string|null
     */
    public function retrieveHeadScript(): ?string
    {
        return $this->configProvider->getDidomiHeadScript();
    }
}
