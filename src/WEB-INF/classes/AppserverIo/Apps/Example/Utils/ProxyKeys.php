<?php

/**
 * AppserverIo\Apps\Example\Utils\ProxyKeys
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/example
 * @link      http://www.appserver.io
 */

namespace AppserverIo\Apps\Example\Utils;

/**
 * Context keys that are used to store data in a application context.
 *
 * @author    Tim Wagner <tw@appserver.io>
 * @copyright 2015 TechDivision GmbH <info@appserver.io>
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link      https://github.com/appserver-io-apps/example
 * @link      http://www.appserver.io
 */
class ProxyKeys
{

    /**
     * Private to constructor to avoid instancing this class.
     */
    private function __construct()
    {
    }

    /**
     * The naming directory key for the 'AppserverIo\Apps\Example\Services\SampleProcessor' session bean.
     *
     * @return string
     */
    const SAMPLE_PROCESSOR = 'SampleProcessor'; // 'php:global/example/SampleProcessor/remote' for remote access

    /**
     * The naming directory key for the 'AppserverIo\Apps\Example\Services\UserProcessor' session bean.
     *
     * @return string
     */
    const USER_PROCESSOR = 'UserProcessor'; // 'php:global/example/UserProcessor/remote' for remote access

    /**
     * The naming directory key for the 'AppserverIo\Apps\Example\Services\CartProcessor' session bean.
     *
     * @return string
     */
    const PRODUCT_PROCESSOR = 'ProductProcessor'; // 'php:global/example/ProductProcessor/remote' for remote access

    /**
     * The naming directory key for the 'AppserverIo\Apps\Example\Services\CartProcessor' session bean.
     *
     * @return string
     */
    const CART_PROCESSOR = 'CartProcessor'; // 'php:global/example/CartProcessor/remote' for remote access
}
