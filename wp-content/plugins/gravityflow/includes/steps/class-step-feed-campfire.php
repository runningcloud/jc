<?php
/**
 * Gravity Flow Step Feed Campfire
 *
 * @package     GravityFlow
 * @subpackage  Classes/Gravity_Flow_Step_Feed_Campfire
 * @copyright   Copyright (c) 2016-2018, Steven Henty S.L.
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       1.3.1.4
 */

if ( ! class_exists( 'GFForms' ) ) {
	die();
}

/**
 * Class Gravity_Flow_Step_Feed_Campfire
 */
class Gravity_Flow_Step_Feed_Campfire extends Gravity_Flow_Step_Feed_Add_On {

	/**
	 * The step type.
	 *
	 * @var string
	 */
	public $_step_type = 'campfire';

	/**
	 * The name of the class used by the add-on.
	 *
	 * @var string
	 */
	protected $_class_name = 'GFCampfire';

	/**
	 * Returns the step label.c
	 *
	 * @return string
	 */
	public function get_label() {
		return 'Campfire';
	}

}

Gravity_Flow_Steps::register( new Gravity_Flow_Step_Feed_Campfire() );
