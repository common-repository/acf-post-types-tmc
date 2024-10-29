<?php
/**
 * Plugin Name:     ACF Post Types TMC
 * Description:     Adds fields for choosing post types.
 * Version:         1.0.2
 * Plugin URI:      https://themastercut.co
 * Author:          TheMasterCut.co
 * License:         GPL-2.0+
 * Text Domain:     tmc-acfptf
 * Domain Path:     /langugages
 *
 * ACF Post types fields TMC is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * ACF Post types fields TMC is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with The real Maintenance Mode TMC. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.html.
 */

//  ----------------------------------------
//  Requirements
//  ----------------------------------------

require dirname( __FILE__ ) . '/lib/ShellPress/src/Shared/Utility/RequirementChecker.php';

$requirementChecker = new ShellPress_RequirementChecker();

$checkPHP   = $requirementChecker->checkPHPVersion( '5.3', 'ACF Post Types TMC requires PHP version >= 5.3' );
$checkWP    = $requirementChecker->checkWPVersion( '4.3', 'ACF Post Types TMC requires WP version >= 4.3' );

if( ! $checkPHP || ! $checkWP ) return;

//  ----------------------------------------
//  ShellPress
//  ----------------------------------------

use tmc\acfptf\src\App;

require_once( __DIR__ . '/lib/ShellPress/ShellPress.php' );
require_once( __DIR__ . '/src/App.php' );

App::initShellPress( __FILE__, 'tmc_acfptf', '1.0.2' );   //  <--- Remember to always change version here
