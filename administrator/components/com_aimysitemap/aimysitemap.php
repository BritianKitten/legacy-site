<?php
/*
 * Copyright (c) 2014-2015 Aimy Extensions, Lingua-Systems Software GmbH
 *
 * http://www.aimy-extensions.com/
 *
 * License: GNU GPLv2, see LICENSE.txt within distribution and/or
 *          http://www.aimy-extensions.com/software-license.html
 */
 defined( '_JEXEC' ) or die(); if ( ! JFactory::getUser()->authorise( 'core.manage', 'aimysitemap' ) ) { return JError::raiseWarning( 404, JText::_('JERROR_ALERTNOAUTHOR' ) ); } require_once( JPATH_COMPONENT . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'logger.php' ); $ctrl = JControllerLegacy::getInstance( 'aimysitemap' ); $ctrl->execute( JFactory::getApplication()->input->get( 'task' ) ); $ctrl->redirect(); 
