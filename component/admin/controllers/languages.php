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
 * Languages Controller class for the Localise component
 *
 * @package     Extensions.Components
 * @subpackage  Localise
 * @since       1.0
 */
class LocaliseControllerLanguages extends JControllerAdmin
{
	/**
	 * Method to purge the localise table.
	 *
	 * @return  void
	 *
	 * @since   3.3
	 */
	public function purge()
	{
		$model = $this->getModel('languages');
		$model->purge();
		$this->setRedirect(JRoute::_('index.php?option=com_localise&view=languages', false));
	}

	/**
	 * Proxy for getModel.
	 *
	 * @param   string	$name	 The name of the model.
	 * @param   string	$prefix	 The prefix for the PHP class name.
	 *
	 * @return  JModel
	 * @since   1.6
	 */
	public function getModel($name = 'Language', $prefix = 'LocaliseModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);

		return $model;
	}
}
