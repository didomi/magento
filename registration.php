<?php

declare(strict_types=1);

use Magento\Framework\Component\ComponentRegistrar;

/**
 * @package   Didomi\ConsentManagement
 * @author    Agence Dn'D <contact@dnd.fr>
 * @copyright 2004-present Agence Dn'D
 * @license   https://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @link      https://www.dnd.fr/
 */
ComponentRegistrar::register(
    ComponentRegistrar::MODULE,
    'Didomi_ConsentManagement',
    __DIR__
);
