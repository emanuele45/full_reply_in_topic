<?php 
// If we have found SSI.php and we are outside of SMF, then we are running standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
elseif (!defined('SMF')) // If we are outside SMF and can't find SSI.php, then throw an error
	die('<b>Error:</b> Cannot install - please verify you put this file in the same place as SMF\'s SSI.php.');

$integration_function = !empty($context['uninstalling']) ? 'remove_integration_function' : 'add_integration_function';

$integration_function('integrate_load_theme ', '$themedir/FullReplyDisplay.template.php');

?>

