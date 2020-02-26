<?php
/*
 * Copyright (c) 2014-2015 Aimy Extensions, Lingua-Systems Software GmbH
 *
 * http://www.aimy-extensions.com/
 *
 * License: GNU GPLv2, see LICENSE.txt within distribution and/or
 *          http://www.aimy-extensions.com/software-license.html
 */
 defined( '_JEXEC' ) or die(); abstract class AimySitemapRightsHelper { public static function getRights( $categoryId = 0 ) { $user = JFactory::getUser(); $res = new JObject(); if ( empty( $categoryId ) ) { $asset = 'com_aimysitemap'; $level = 'component'; } else { $asset = 'com_aimysitemap.category.' . (int) $categoryId; $level = 'category'; } $actions = JAccess::getActions( 'com_aimysitemap', $level ); foreach ( $actions as $action ) { $res->set( $action->name, $user->authorise( $action->name, $asset ) ); } return $res; } } 
