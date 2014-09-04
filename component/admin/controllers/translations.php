<?php
/**
 * @package     Com_Localise
 * @subpackage  controller
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Translations Controller class for the Localise component
 *
 * @package     Extensions.Components
 * @subpackage  Localise
 * @since       1.0
 */
class LocaliseControllerTranslations extends JControllerAdmin
{
	/**
	* Proxy for getModel.
	*
	* @param   string      $name    The name of the model.
	* @param   string      $prefix  The prefix for the PHP class name.
	*
	* @return  JModel
	* @since   1.6
	*/
	public function getModel($name = 'Translation', $prefix = 'LocaliseModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}
