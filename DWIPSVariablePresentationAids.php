<?php /** @noinspection PhpUndefinedConstantInspection */

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
        
        
        protected static array $length_presentation_mm = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' mm'
        ];
        
        protected static array $length_presentation_in = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' in'
        ];
        
        protected static array $light_w_m2_presentation = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' W/m²'
        ];
        protected static array $light_lx_presentation = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' lx'
        ];
        protected static array $light_fc_presentation = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' fc'
        ];
        
		protected static array $datePresentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_DATE_TIME,
			'DATE' => 1,
			'DAY_OF_THE_WEEK' => false,
			'MONTH_TEXT' => false,
			'TIME' => 0
		];

		protected static array $dateTimePresentation = [
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
		protected static array $temp_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
			'SUFFIX' => ' °C',
			'DIGITS' => 1
		];
        
        protected static array $temp_presentation_f = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' °F',
            'DIGITS' => 1
        ];
        
        protected static array $temp_presentation_k = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' K',
            'DIGITS' => 1
        ];
        
        /**
         * Summary of temp_presentation
         * @var array
         */
        protected static array $weather_temp_presentation = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' °C',
            'DIGITS' => 1,
            'MIN' => -20,
            'MAX' => 40
        ];
        
        protected static array $weather_temp_presentation_f = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' °F',
            'DIGITS' => 1,
            'MIN' => -4,
            'MAX' => 104
        ];
        
        protected static array $weather_temp_presentation_k = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' K',
            'DIGITS' => 1,
            'MIN' => 253,
            'MAX' => 314
        ];
        
        /**
         * Summary of humidityAbs_presentation
         * @var array
         */
        protected static array $humidityAbs_presentation = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' g/m³',
            'DIGITS' => 1
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $humidityRel_presentation = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' %',
            'DIGITS' => 0
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $airpressure_presentation_inhg = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' inHg',
            'DIGITS' => 2,
            'MIN' => 25,
            'MAX' => 33
        ];
        
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $airpressure_presentation_mmhg = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' mmHg',
            'DIGITS' => 0,
            'MIN' => 640,
            'MAX' => 850
        ];
        
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $airpressure_presentation_mbar = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' mbar',
            'DIGITS' => 0,
            'MIN' => 850,
            'MAX' => 1100
        ];
        
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $airpressure_presentation_hpa = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' hPa',
            'DIGITS' => 0,
            'MIN' => 850,
            'MAX' => 1100
        ];
        
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $wind_velocity_presentation_kmh = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' km/h',
            'DIGITS' => 1,
            'MIN' => 0,
            'MAX' => 180
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $wind_velocity_presentation_mph = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' mph',
            'DIGITS' => 1,
            'MIN' => 0,
            'MAX' => 110
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $wind_velocity_presentation_kn = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' kn',
            'DIGITS' => 1,
            'MIN' => 0,
            'MAX' => 100
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $wind_velocity_presentation_ms = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' m/s',
            'DIGITS' => 1,
            'MIN' => 0,
            'MAX' => 50
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        
        protected static array $wind_direction_presentation_deg = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' °',
            'DIGITS' => 0,
            'MIN' => 0,
            'MAX' => 360
        ];
        
        /**
         * Summary of humidityRel_presentation
         * @var array
         */
        protected static array $wind_direction_presentation_card = [
            'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
            'SUFFIX' => ' °',
            'DIGITS' => 0,
            'MIN' => 0,
            'MAX' => 360,
			'INTERVALS_ACTIVE' => true,
			'INTERVALS' => "[
					{\"IntervalMinValue\":0,\"IntervalMaxValue\":11,\"ConstantActive\":true,\"ConstantValue\":\"N\"},
					{\"IntervalMinValue\":12,\"IntervalMaxValue\":33,\"ConstantActive\":true,\"ConstantValue\":\"NNE\"},
					{\"IntervalMinValue\":34,\"IntervalMaxValue\":56,\"ConstantActive\":true,\"ConstantValue\":\"NE\"},
					{\"IntervalMinValue\":57,\"IntervalMaxValue\":78,\"ConstantActive\":true,\"ConstantValue\":\"ENE\"},
					{\"IntervalMinValue\":79,\"IntervalMaxValue\":101,\"ConstantActive\":true,\"ConstantValue\":\"E\"},
					{\"IntervalMinValue\":102,\"IntervalMaxValue\":123,\"ConstantActive\":true,\"ConstantValue\":\"ESE\"},
					{\"IntervalMinValue\":124,\"IntervalMaxValue\":146,\"ConstantActive\":true,\"ConstantValue\":\"SE\"},
					{\"IntervalMinValue\":147,\"IntervalMaxValue\":168,\"ConstantActive\":true,\"ConstantValue\":\"SSE\"},
					{\"IntervalMinValue\":169,\"IntervalMaxValue\":191,\"ConstantActive\":true,\"ConstantValue\":\"S\"},
					{\"IntervalMinValue\":192,\"IntervalMaxValue\":213,\"ConstantActive\":true,\"ConstantValue\":\"SSW\"},
					{\"IntervalMinValue\":214,\"IntervalMaxValue\":236,\"ConstantActive\":true,\"ConstantValue\":\"SW\"},
					{\"IntervalMinValue\":237,\"IntervalMaxValue\":258,\"ConstantActive\":true,\"ConstantValue\":\"WSW\"},
					{\"IntervalMinValue\":259,\"IntervalMaxValue\":281,\"ConstantActive\":true,\"ConstantValue\":\"W\"},
					{\"IntervalMinValue\":282,\"IntervalMaxValue\":303,\"ConstantActive\":true,\"ConstantValue\":\"WNW\"},
					{\"IntervalMinValue\":304,\"IntervalMaxValue\":326,\"ConstantActive\":true,\"ConstantValue\":\"NW\"},
					{\"IntervalMinValue\":327,\"IntervalMaxValue\":348,\"ConstantActive\":true,\"ConstantValue\":\"NNW\"},
					{\"IntervalMinValue\":349,\"IntervalMaxValue\":360,\"ConstantActive\":true,\"ConstantValue\":\"N\"}
				]",
        ];
        
		protected static array $target_temp_slider_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_SLIDER,
			'MIN' => 5,
			'MAX' => 25,
			'STEP_SIZE' => 1,
			'GRADIENT_TYPE' => 0,
			'USAGE_TYPE' => 2,
			'DIGITS' => 0,
			'SUFFIX' => ' %'
		];

		protected static array $fan_level_slider_presentation = [
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
		protected static array $fan_level_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_VALUE_PRESENTATION,
			'SUFFIX' => ' %'
		];

		protected static array $kwl_target_temp_slider_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_SLIDER,
			'MIN' => 5,
			'MAX' => 25,
			'STEP_SIZE' => 1,
			'GRADIENT_TYPE' => 0,
			'USAGE_TYPE' => 0,
			'DIGITS' => 0,
			'SUFFIX' => ' °C'
		];

		protected static array $kwl_mode_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"Anwesend\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"Abwesend\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":2,\"Caption\":\"Stoßlüftung\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];


		protected static array $kwl_modepa_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":false,\"Caption\":\"Anwesend\",\"IconValue\":\"building-user\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":true,\"Caption\":\"Abwesend\",\"IconValue\":\"building-circle-xmark\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 1
		];

		protected static array $kwl_cellstate_presentation = [
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
			'DIGITS' => 0
		];

		protected static array $kwl_partialBypass_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"None\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"Summer\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":2,\"Caption\":\"Always\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];

		protected static array $kwl_bypassLocked_presentation = [
			'PRESENTATION' => VARIABLE_PRESENTATION_ENUMERATION,
			'OPTIONS' => "[
					{\"Value\":0,\"Caption\":\"open\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680},
					{\"Value\":1,\"Caption\":\"locked\",\"IconValue\":\"\",\"IconActive\":true,\"Color\":16711680}
				]",
			'DIGITS' => 0
		];

		protected static array $kwl_access_level_presentation = [
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