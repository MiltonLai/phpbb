<?php
/**
*
* @package phpBB3
* @version $Id: functions_extra.php,v 1.000 2009/12/30 15:07:35 mikovchain Exp $
* @copyright (c) 2009 phpbbchina.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
 * @ignore
 */
if (!defined('IN_PHPBB'))
{
    exit;
}
// Extra global functions

function user_path_gen($user_id)
{
	global $auth, $user, $config, $db, $cache;
	global $phpbb_root_path, $phpEx;
	
	if (preg_match('#^\d+#i', $user_id)){
		$length = strlen($user_id);
		if ($length < 6){
			$user_id = sprintf("%06d", $user_id);
			$length = 6;
		}
		$user_path = $config['upload_path'] . '/' . substr($user_id, 0, $length-3);
		$user_path .= '/' . substr($user_id, $length-3, 3);
		$user_path .= '/' . date_path_gen();
		return $user_path;
	} else {
		return $config['upload_path'].'/000/000/' . date_path_gen();
	}
}

function date_path_gen()
{
	$attach_subdir = date('Ym');
	return $attach_subdir;
}

function mkdeepdir($path)
{
	unset($subpath);
	$path_array = explode('/', $path);
	foreach($path_array AS $path_unit) {
		if($path_unit=='') continue;
		$subpath_array[] = $path_unit;
		$subpath = implode('/', $subpath_array);
		if(!is_dir($subpath)) {
            @mkdir($subpath, 0777);
        }
	}
}

?>