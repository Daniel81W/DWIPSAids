<?php

/**
 * @package       DWIPS.Aids
 * @file          DWIPSVariableAids.php
 * @author        Daniel Weber <it@dan-web.de>
 * @copyright     2026 Daniel Weber
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       1.0
 */

namespace DWIPS\Aids {
    /**
     * Aiding functions for the work with Variables.
     */
    trait DWIPSConstants
    {

        static $variableCount = 1;

        protected const DWIPSVALLOX_MODE_PRESENT = 0;
        protected const DWIPSVALLOX_MODE_ABSENT = 1;
        protected const DWIPSVALLOX_MODE_BOOST = 2;
    }
}
?>