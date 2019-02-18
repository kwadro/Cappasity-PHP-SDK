<?php
/**
 * NOTICE OF LICENSE
 *
 * This file is licensed only to registered users of the Cappasity platform.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 * @author    Cappasity Inc <info@cappasity.com>
 * @copyright 2019 Cappasity Inc.
 */

namespace CappasitySDK\Client\Validator;

use CappasitySDK\ValidatorTypeInterface;

interface TypeInterface extends ValidatorTypeInterface
{

    /**
     * TODO Check in ValidatorWrapper that all required rule namespaces are appended to factory
     * @return array
     */
    public static function getRequiredRuleNamespaces();
}
