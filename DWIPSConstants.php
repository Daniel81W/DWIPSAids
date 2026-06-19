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
        public const int DWIPSVALLOX_MODE_PRESENT = 0;
        protected const int DWIPSVALLOX_MODE_ABSENT = 1;
        protected const int DWIPSVALLOX_MODE_BOOST = 2;
        
        
        
        public const int DWIPS_LENGTH_MM = 0;
        public const int DWIPS_LENGTH_CM = 1;
        public const int DWIPS_LENGTH_DM = 2;
        public const int DWIPS_LENGTH_M = 3;
        public const int DWIPS_LENGTH_KM = 4;
        public const int DWIPS_LENGTH_IN = 5;
        public const int DWIPS_LENGTH_FT = 6;
        public const int DWIPS_LENGTH_YD = 7;
        
        public const array TemperatureUnits = array(0 => '°C', 1 => '°F', 2 => 'K');
    }
    
    enum DWIPS_Length : int {
        case MM = 0;
        case CM = 1;
        case DM = 2;
        case M = 3;
        case KM = 4;
        case IN = 5;
        case FT = 6;
        case YD = 7;
    }
}
?>