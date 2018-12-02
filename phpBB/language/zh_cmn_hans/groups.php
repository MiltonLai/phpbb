<?php
/** 
*
* groups [Simplified Chinese]
*
* @package language
* @version $Id: groups.php 8479 2008-03-29 00:22:48Z naderman $
* @copyright (c) 2007 phpbbchina.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ALREADY_DEFAULT_GROUP'	=> '所选群组是您的默认群组',
	'ALREADY_IN_GROUP'		=> '您已经是这个群组的成员了',
	'ALREADY_IN_GROUP_PENDING'	=> '您已经申请加入指定的群组了.',

	'CANNOT_JOIN_GROUP'			=> '您不能加入这个群组. 您只能加入自由开放的群组.',
	'CANNOT_RESIGN_GROUP'		=> '您不能退出这个群组. 您只能退出自由开放的群组.',
	'CHANGED_DEFAULT_GROUP'	=> '成功更改默认群组',
	
	'GROUP_AVATAR'						=> '群组标志',
	'GROUP_CHANGE_DEFAULT'				=> '您确定您要将自己的默认群组设成 “%s” 吗？',
	'GROUP_CLOSED'						=> '封闭的',
	'GROUP_DESC'						=> '群组描述',
	'GROUP_HIDDEN'						=> '隐藏',
	'GROUP_INFORMATION'					=> '群组信息',
	'GROUP_IS_CLOSED'					=> '这是一个封闭的群组，新成员不能自由加入，只能由组长邀请加入。',
	'GROUP_IS_FREE'						=> '这是一个自由开放的群组，欢迎任何新成员。',
	'GROUP_IS_HIDDEN'					=> '这是一个隐藏的群组，只允许组内成员查看。',
	'GROUP_IS_OPEN'						=> '这是一个开放的群组，用户可以申请加入。',
	'GROUP_IS_SPECIAL'					=> '这是一个特殊的群组，特殊组由论坛管理员维护。',
	'GROUP_JOIN'						=> '加入群组',
	'GROUP_JOIN_CONFIRM'				=> '您确定要加入选中的群组吗？',
	'GROUP_JOIN_PENDING'				=> '申请加入群组',
	'GROUP_JOIN_PENDING_CONFIRM'		=> '您确定要申请加入选中的群组吗？',
	'GROUP_JOINED'						=> '您已成功加入此群组',
	'GROUP_JOINED_PENDING'				=> '申请已经提交。请等待群组组长批复。',
	'GROUP_LIST'						=> '管理用户',
	'GROUP_MEMBERS'						=> '群组成员',
	'GROUP_NAME'						=> '群组名称',
	'GROUP_OPEN'						=> '开放的',
	'GROUP_RANK'						=> '群组等级',
	'GROUP_RESIGN_MEMBERSHIP'			=> '退出群组',
	'GROUP_RESIGN_MEMBERSHIP_CONFIRM'	=> '您确定要退出此群组吗？',
	'GROUP_RESIGN_PENDING'				=> '撤销对此群组的申请',
	'GROUP_RESIGN_PENDING_CONFIRM'		=> '您确定要撤销对此群组的申请吗？',
	'GROUP_RESIGNED_MEMBERSHIP'			=> '您已经成功退出此群组',
	'GROUP_RESIGNED_PENDING'			=> '您已成功撤销对此群组的申请',
	'GROUP_TYPE'						=> '群组类型',
	'GROUP_UNDISCLOSED'					=> '隐藏的群组',
	'FORUM_UNDISCLOSED'					=> '管理隐藏的版面',

	'LOGIN_EXPLAIN_GROUP'	=> '您需要登录后才能查看组资料',

	'NO_LEADERS'					=> '您不是任何群组的领导者',
	'NOT_LEADER_OF_GROUP'			=> '您不是此群组的领导人，无法执行此操作。',
	'NOT_MEMBER_OF_GROUP'			=> '您不是此群组的成员，无法执行此操作。',
	'NOT_RESIGN_FROM_DEFAULT_GROUP'	=> '您不能退出您的默认群组。',
	
	'PRIMARY_GROUP'		=> '主要群组',

	'REMOVE_SELECTED'		=> '删除选中',

	'USER_GROUP_CHANGE'			=> '从群组 “%1$s” 到群组 “%2$s”',
	'USER_GROUP_DEMOTE'			=> '辞去领导职务',
	'USER_GROUP_DEMOTE_CONFIRM'	=> '您确定要辞去此群组的领导职务吗？',
	'USER_GROUP_DEMOTED'		=> '您已成功辞去领导职务。',
));

?>