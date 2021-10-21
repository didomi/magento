<?php

declare(strict_types=1);

namespace Didomi\ConsentManagement\ViewModel;

/**
 * ViewModel to manage FooterLink
 *
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
class FooterLink extends AbstractScript
{
    /**
     * Description isDidomiDisplayConsentLinkFooter function
     *
     * @return bool
     */
    public function isDidomiDisplayConsentLinkFooter(): bool
    {
        return $this->configProvider->isDisplayConsentLinkFooter();
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
