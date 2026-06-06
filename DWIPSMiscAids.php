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
    trait DWIPSMiscAids
    {
        
        /**
         * CSends Debug messages, if selected Debug level is higher or same height as message.
         * *
         * * @param string $Message
         * * @param string $Data
         * * @param int $Format
         * * @param int $DebugLevel Debug level of the message.
         */
        protected function DWSendDebug(string $Message, string $Data, int $Format, int $DebugLevel): bool {
            $debug = $this->ReadPropertyInteger ( "DebugLevel" );
            if($DebugLevel <= $debug){
                return parent::SendDebug ($Message, $Data, $Format);
            }else{
                return false;
            }
        }
        
        /**
         * @param string $dataString
         * @param string $separator
         * @param string $keySeparator
         * @return array
         */
        protected function explodeWithKeys ( string $dataString, string $separator, string $keySeparator ) : array {
            $data = array ();
            foreach ( explode ( $separator, $dataString ) as $cLine ) {
                list ( $cKey, $cValue ) = explode ( $keySeparator, $cLine, 2 );
                $data[ $cKey ] = $cValue;
            }
            return $data;
        }
        
        protected function convertTempFtoC(float $tempIn) : float{
            return ( $tempIn - 32 ) / 1.8;
        }
        
        protected function convertTempCtoF(float $tempIn) : float{
            return $tempIn * 1.8 + 32;
        }
        
        protected function convertTempCtoK(float $tempIn) : float{
            return $tempIn + 273.15;
        }
        
        protected function convertTempKtoC(float $tempIn) : float{
            return $tempIn - 273.15;
        }
        
        protected function convertTempFtoK(float $tempIn) : float{
            return ( $tempIn - 32 ) / 1.8 + 273.15;
        }
        
        protected function convertTempKtoF(float $tempIn) : float{
            return ($tempIn - 273.15) * 1.8 + 32;
        }
        
        protected function convertMPH2KMH(float $MilesPerHour): float{
            return $MilesPerHour * 1.609344;
        }
        
        protected function convertMPH2MS(float $MilesPerHour): float{
            return $MilesPerHour * 1.609344 / 3.6;
        }
        
        protected function convertMPH2KT(float $MilesPerHour): float{
            return $MilesPerHour * 1.609344 / 1.852;
        }
        
        protected function convertINHG2MBAR(float $Pressure):float{
            return $Pressure  / 0.02952998751;
        }
        
        protected function convertINHG2MMHG(float $Pressure):float{
            return $Pressure  * 25.4;
        }
    }
}
