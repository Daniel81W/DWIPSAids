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
    trait DWIPSVariableAids
    {
        static $variableCount = 1;

        /**
         * Deletes a Variable.
         *
         * @param string $Ident Ident of the Variable to delete.
         */
        protected function DeleteVariable(string $Ident): void
        {
            $this->MaintainVariable($Ident, "", 0, "", 0, false);
        }
        
        /**
         * Creates a Variable and configures it.
         * *
         * * @param int $Ident Ident for the Variable.
         * * @param string $Name Name of the variable.
         * * @param int $VarType Taype of the variable.
         * * @param mixed $Presentation Presentation of the variable.
         */
        protected function CreateVariable(string $Ident, string $Name, int $VarType, mixed $Presentation, int $Position, bool $ActionEnabled = false): bool {
            $ret = $this->MaintainVariable($Ident, $this->Translate($Name), $VarType, $Presentation, $Position, true);
            if($ActionEnabled){
                $this->EnableAction($Ident);
            }else{
                $this->DisableAction($Ident);
            }
            return $ret;
        }

        /**
         * Creates or updates a Variable and configures it.
         * *
         * * @param int $Ident Ident for the Variable.
         * * @param string $Name Name of the variable.
         * * @param int $VarType Taype of the variable.
         * * @param mixed $Presentation Presentation of the variable.
         */
        protected function CreateOrUpdateVariable(string $Ident, string $Name, int $VarType, mixed $Presentation, bool $ActionEnabled = false): bool {
            $ret = $this->MaintainVariable($Ident, $this->Translate($Name), $VarType, $Presentation, DWIPSVariableAids::$variableCount, true);
            if($ActionEnabled){
                $this->EnableAction($Ident);
            }else{
                $this->DisableAction($Ident);
            }
            IPS_SetPosition(IPS_GetObjectIDByIdent ($Ident,  $this->InstanceID) , DWIPSVariableAids::$variableCount);
            DWIPSVariableAids::$variableCount++;
            return $ret;
        }

        /**
         * Creates or updates a Variable and configures it.
         * *
         * * @param mixed $PropertyName Name of the Property holding the KNX instance id.
         */
        protected function KNXVariableUpdateMessageRegistration(string $PropertyName): bool {
       		$ret = false;
            if ($this->ReadPropertyInteger($PropertyName) > 1) {
			    $ret = $this->RegisterMessage(IPS_GetObjectIDByIdent("Value", $this->ReadPropertyInteger($PropertyName)), VM_UPDATE);
		    }
            return $ret;
        }
        
    }
}
