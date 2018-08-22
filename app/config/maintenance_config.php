<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/***************************************************************************
 * 
 * @subpackage		Maintenance_Mode
 * @description 	Save static database information for those who are having 
 *					the allowed maintenance excemptions
 * @author			Francisco Abayon
 * @version			0.0.1
 * 
 ***************************************************************************/
$config['allowed_maintenance_ips'] = array(
		'203.177.158.155',	// Francisco Abayon Laptop Workstation
		'::1',				// Localhost in XAMPP
		'2.2.2.2'			// Sample Ip
	);
