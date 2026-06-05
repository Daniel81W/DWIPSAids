<?php

/**
 * @package       DWIPS.Aids
 * @file          DWIPSVariablePresentationAids.php
 * @author        Daniel Weber <it@dan-web.de>
 * @copyright     2026 Daniel Weber
 * @license       https://creativecommons.org/licenses/by-nc-sa/4.0/ CC BY-NC-SA 4.0
 * @version       1.0
 */

namespace DWIPS\Aids {
	/**
	 * Aiding functions for the work with Variables.
	 */
	trait DWIPSVariablePresentationAids
	{

		protected static $datePresentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_DATE_TIME,
			'DATE' => 1,
			'DAY_OF_THE_WEEK' => false,
			'MONTH_TEXT' => false,
			'TIME' => 0
		];

		protected static $dateTimePresentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_DATE_TIME,
			'DATE' => 1,
			'DAY_OF_THE_WEEK' => false,
			'MONTH_TEXT' => false,
			'TIME' => 1
		];

		/**
		 * Summary of temp_presentation
		 * @var array
		 */
		protected static $temp_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
			'SUFFIX' => ' °C',
			'DIGITS' => 1
		];

		protected static $target_temp_slider_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_SLIDER,
			'MIN' => 5,
			'MAX' => 25,
			'STEP_SIZE' => 1,
			'GRADIENT_TYPE' => 0,
			'USAGE_TYPE' => 2,
			'DIGITS' => 0,
			'SUFFIX' => ' %'
		];

		protected static $fan_level_slider_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_SLIDER,
			'MIN' => 0,
			'MAX' => 100,
			'STEP_SIZE' => 1,
			'GRADIENT_TYPE' => 0,
			'USAGE_TYPE' => 2,
			'DIGITS' => 0,
			'SUFFIX' => ' %'
		];


		/**
		 * Summary of fan_level_presentation
		 * @var array
		 */
		protected static $fan_level_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
			'SUFFIX' => ' %'
		];

		protected static $kwl_target_temp_slider_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_SLIDER,
			'MIN' => 5,
			'MAX' => 25,
			'STEP_SIZE' => 1,
			'GRADIENT_TYPE' => 0,
			'USAGE_TYPE' => 0,
			'DIGITS' => 0,
			'SUFFIX' => ' °C'
		];

		protected static $kwl_mode_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"Anwesend\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"Abwesend\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":2,\"Caption\":\"Stoßlüftung\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];


		protected static $kwl_modepa_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":false,\"Caption\":\"Anwesend\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":true,\"Caption\":\"Abwesend\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 1
		];

		protected static $kwl_cellstate_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
			'MIN' => 0,
			'MAX' => 3,
			'INTERVALS_ACTIVE' => true,
			'INTERVALS' => "[
					{\"IntervalMinValue\":0,\"IntervalMaxValue\":0,\"ConstantActive\":true,\"ConstantValue\":\"WRG\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"IntervalMinValue\":1,\"IntervalMaxValue\":1,\"ConstantActive\":true,\"ConstantValue\":\"KRG\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"IntervalMinValue\":2,\"IntervalMaxValue\":2,\"ConstantActive\":true,\"ConstantValue\":\"Bypass\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"IntervalMinValue\":3,\"IntervalMaxValue\":3,\"ConstantActive\":true,\"ConstantValue\":\"Deicing\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 1
		];

		protected static $kwl_partialBypass_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"None\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"Summer\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":2,\"Caption\":\"Always\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];

		protected static $kwl_bypassLocked_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"open\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"locked\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];

		protected static $kwl_access_level_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"free\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"limited\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":2,\"Caption\":\"very limited\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];
	}
}
?>