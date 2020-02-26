<?php
/*
 * Copyright (c) 2014-2015 Aimy Extensions, Lingua-Systems Software GmbH
 *
 * http://www.aimy-extensions.com/
 *
 * License: GNU GPLv2, see LICENSE.txt within distribution and/or
 *          http://www.aimy-extensions.com/software-license.html
 */
 defined( '_JEXEC' ) or die(); class AimySitemapConfigHelper { private $cfg = null; public function __construct( $ext = 'com_aimysitemap' ) { $this->cfg = JComponentHelper::getParams( $ext ); } public function get( $key, $default = null ) { if ( empty( $this->cfg ) ) { return null; } return $this->cfg->get( $key, $default ); } public function get_splitted( $key, $default = null, $delimiter = "\n" ) { $val = $this->get( $key, $default ); $vals = array(); if ( ! empty( $val ) ) { $parts = explode( $delimiter, $val ); foreach ( $parts as $part ) { $v = trim( $part ); if ( ! empty( $v ) ) { $vals[] = $v; } } } return $vals; } static public function get_once( $key, $default = null ) { $cfg = new AimySitemapConfigHelper(); return $cfg->get( $key, $default ); } } 
