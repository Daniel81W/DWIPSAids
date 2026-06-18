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
    trait DWIPSMiscAids {
        
        /**
         * CSends Debug messages, if selected Debug level is higher or same height as message.
         * *
         * * @param string $Message
         * * @param string $Data
         * * @param int $Format
         * * @param int $DebugLevel Debug level of the message.
         */
        protected function DWSendDebug ( string $Message, string $Data, int $Format, int $DebugLevel ) : bool {
            $debug = $this->ReadPropertyInteger ( "DebugLevel" );
            if ( $DebugLevel <= $debug ) {
                return parent::SendDebug ( $Message, $Data, $Format );
            }
            else {
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
        
        protected function convertTemperatureFtoC ( float $tempIn ) : float {
            return ( $tempIn - 32 ) / 1.8;
        }
        
        protected function convertTemperatureCtoF ( float $tempIn ) : float {
            return $tempIn * 1.8 + 32;
        }
        
        protected function convertTemperatureCtoK ( float $tempIn ) : float {
            return $tempIn + 273.15;
        }
        
        protected function convertTemperatureKtoC ( float $tempIn ) : float {
            return $tempIn - 273.15;
        }
        
        protected function convertTemperatureFtoK ( float $tempIn ) : float {
            return ( $tempIn - 32 ) / 1.8 + 273.15;
        }
        
        protected function convertTemperatureKtoF ( float $tempIn ) : float {
            return ( $tempIn - 273.15 ) * 1.8 + 32;
        }
        
        protected function convertVelocityMPH2KMH ( float $MilesPerHour ) : float {
            return $MilesPerHour * 1.609344;
        }
        
        protected function convertVelocityMPH2MS ( float $MilesPerHour ) : float {
            return $MilesPerHour * 1.609344 / 3.6;
        }
        
        protected function convertVelocityMPH2KT ( float $MilesPerHour ) : float {
            return $MilesPerHour * 1.609344 / 1.852;
        }
        
        protected function convertPressureINHG2MBAR ( float $Pressure ) : float {
            return $Pressure / 0.02952998751;
        }
        
        protected function convertPressureINHG2MMHG ( float $Pressure ) : float {
            return $Pressure * 25.4;
        }
        
        protected function convertLengthIN2MM ( float $Length ) : float {
            return $Length * 25.4;
        }
        
        protected function convertLength ( float $Length, DWIPS_Length $InUnit, DWIPS_Length $OutUnit ) : float {
            $factor = 0;
            switch ( $InUnit ) {
                case DWIPS_Length::MM:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 1;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 0.1;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 0.01;
                            break;
                        case DWIPS_Length::M:
                            $factor = 0.001;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 0.000001;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 1 / 25.4;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 1 / ( 12 * 25.4 );
                            break;
                        case DWIPS_Length::YD:
                            $factor = 1 / ( 3 * 12 * 25.4 );
                            break;
                    }
                    break;
                case DWIPS_Length::CM:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 10;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 1;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 0.1;
                            break;
                        case DWIPS_Length::M:
                            $factor = 0.01;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 0.00001;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 1 / 2.54;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 1 / ( 12 * 2.54 );
                            break;
                        case DWIPS_Length::YD:
                            $factor = 1 / ( 3 * 12 * 2.54 );
                            break;
                    }
                    break;
                case DWIPS_Length::DM:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 100;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 10;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 1;
                            break;
                        case DWIPS_Length::M:
                            $factor = 0.1;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 0.0001;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 10 / 2.54;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 10 / ( 12 * 2.54 );
                            break;
                        case DWIPS_Length::YD:
                            $factor = 10 / ( 3 * 12 * 2.54 );
                            break;
                    }
                    break;
                case DWIPS_Length::M:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 1000;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 100;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 10;
                            break;
                        case DWIPS_Length::M:
                            $factor = 1;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 0.001;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 100 / 2.54;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 100 / ( 12 * 2.54 );
                            break;
                        case DWIPS_Length::YD:
                            $factor = 100 / ( 3 * 12 * 2.54 );
                            break;
                    }
                    break;
                case DWIPS_Length::KM:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 1000000;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 100000;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 10000;
                            break;
                        case DWIPS_Length::M:
                            $factor = 1000;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 1;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 100000 / 2.54;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 100000 / ( 12 * 2.54 );
                            break;
                        case DWIPS_Length::YD:
                            $factor = 100000 / ( 3 * 12 * 2.54 );
                            break;
                    }
                    break;
                case DWIPS_Length::IN:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 25.4;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 2.54;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 2.54 / 10;
                            break;
                        case DWIPS_Length::M:
                            $factor = 2.54 / 100;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 2.54 / 100000;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 1;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 1 / 12;
                            break;
                        case DWIPS_Length::YD:
                            $factor = 1 / ( 3 * 12 );
                            break;
                    }
                    break;
                case DWIPS_Length::FT:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 12 * 25.4;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 12 * 2.54;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 12 * 2.54 / 10;
                            break;
                        case DWIPS_Length::M:
                            $factor = 12 * 2.54 / 100;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 12 * 2.54 / 100000;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 12;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 1;
                            break;
                        case DWIPS_Length::YD:
                            $factor = 1 / 3;
                            break;
                    }
                    break;
                case DWIPS_Length::YD:
                    switch ( $OutUnit ) {
                        case DWIPS_Length::MM:
                            $factor = 3 * 12 * 25.4;
                            break;
                        case DWIPS_Length::CM:
                            $factor = 3 * 12 * 2.54;
                            break;
                        case DWIPS_Length::DM:
                            $factor = 3 * 12 * 2.54 / 10;
                            break;
                        case DWIPS_Length::M:
                            $factor = 3 * 12 * 2.54 / 100;
                            break;
                        case DWIPS_Length::KM:
                            $factor = 3 * 12 * 2.54 / 100000;
                            break;
                        case DWIPS_Length::IN:
                            $factor = 3 * 12;
                            break;
                        case DWIPS_Length::FT:
                            $factor = 3;
                            break;
                        case DWIPS_Length::YD:
                            $factor = 1;
                            break;
                    }
                    break;
            }
            return $Length * $factor;
        }
    }
}
