<?php
/*
 * Copyright (c) 2014-2015 Aimy Extensions, Lingua-Systems Software GmbH
 *
 * http://www.aimy-extensions.com/
 *
 * License: GNU GPLv2, see LICENSE.txt within distribution and/or
 *          http://www.aimy-extensions.com/software-license.html
 */
 defined( '_JEXEC' ) or die(); jimport( 'joomla.url.uri' ); class AimySitemapURI extends JURI { public function getResource( $entities = false, $encode = true ) { $res = $this->getPath(); $res = str_replace( "\r", '', $res ); $res = str_replace( "\n", '', $res ); if ( $q = $this->getQuery() ) { $res .= '?' . ( $entities ? htmlspecialchars( $q, ENT_COMPAT, 'UTF-8', false ) : $q ); } if ( $encode ) { $res = str_replace( ' ', '%20', $res ); $ua = str_split( $res ); $res = ''; foreach ( $ua as $c ) { $res .= ( ord( $c ) > 0x7f ? urlencode( $c ) : $c ); } } else { $res = urldecode( $res ); } return $res; } public function getResourceHTTP() { return $this->getResource(); } public function getResourceHref() { return $this->getResource( true, true ); } public function getResourceHTML() { return $this->getResource( true, false ); } } 
