<?php

declare(strict_types=1);
/*
 * This file is part of the Yasumi package.
 *
 * Copyright (c) 2015 - 2021 AzuyaLabs
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Sacha Telgenhof <me@sachatelgenhof.com>
 */

namespace Yasumi\tests\Australia\WesternAustralia;

use Yasumi\tests\Australia\AustraliaBaseTestCase;
use Yasumi\tests\YasumiBase;

/**
 * Base class for test cases of the Queensland holiday provider.
 */
abstract class WesternAustraliaBaseTestCase extends AustraliaBaseTestCase
{
    use YasumiBase;

    /**
     * Name of the region (e.g. country / state) to be tested.
     */
    public $region = 'Australia\WesternAustralia';

    /**
     * Timezone in which this provider has holidays defined.
     */
    public $timezone = 'Australia/West';
}
