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
         * * @param int $Message
         * * @param string $Data
         * * @param int $Format
         * * @param mixed $DebugLevel Debug level of the message.
         */
        protected function DWSendDebug(string $Message, string $Data, int $Format, $DebugLevel): bool {
            $debug = $this->ReadPropertyInteger ( "DebugLevel" );
            if($DebugLevel <= $debug){
                return parent::SendDebug ($Message, $Data, $Format);
            }else{
                return false;
            }
        }
        
        /**
         * @param string $dataString
         * @param string $seperator
         * @param string $keySeperator
         * @return array
         */
        protected function explodeWithKeys ( string $dataString, string $seperator, string $keySeperator ) : array {
            $data = array ();
            foreach ( explode ( $seperator, $dataString ) as $cLine ) {
                list ( $cKey, $cValue ) = explode ( $keySeperator, $cLine, 2 );
                $data[ $cKey ] = $cValue;
            }
            return $data;
        }
    }
}
?>