<?php
/**
*
* acp_groups [Chinese Simplified]
*
* @package language
* @version $Id: groups.php 8634 2008-06-09 13:05:34Z Kellanved $
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> '在这个面板您可以管理所有的群组。您可以删除、创建和编辑现有的群组。此外，您还可以选择版主，设置群组状态为开放、隐藏或关闭，以及设置群组的名称与描述。',
	'ADD_USERS'						=> '添加用户',
	'ADD_USERS_EXPLAIN'				=> '这里您可以添加新用户到群组. 您可以选择是否使用这个群组作为用户的默认群组. 并且您可以设置群组组长. 如果有多个用户请在每一行输入用户名.',

	'COPY_PERMISSIONS'				=> '复制权限自',
	'COPY_PERMISSIONS_EXPLAIN'		=> '一旦创建, 群组将拥有与您选择的群组同样的权限.',
	'CREATE_GROUP'					=> '创建新组',

	'GROUPS_NO_MEMBERS'				=> '这个组没有成员',
	'GROUPS_NO_MODS'				=> '没有设置组长',

	'GROUP_APPROVE'					=> '批准成员',
	'GROUP_APPROVED'				=> '已批准的成员',
	'GROUP_AVATAR'					=> '组头像',
	'GROUP_AVATAR_EXPLAIN'			=> '这个图片将显示在组的控制面板.',
	'GROUP_CLOSED'					=> '关闭',
	'GROUP_COLOR'					=> '组颜色',
	'GROUP_COLOR_EXPLAIN'			=> '设置组成员名字显示的颜色, 如果使用用户默认请留空.',
	'GROUP_CONFIRM_ADD_USER'		=> '您确认添加用户 %1$s 为组成员吗?',
	'GROUP_CONFIRM_ADD_USERS'		=> '您确认添加用户 %1$s 为组成员吗?',
	'GROUP_CREATED'					=> '群组创建完成.',
	'GROUP_DEFAULT'					=> '设置为成员的默认组',
	'GROUP_DEFS_UPDATED'			=> '设置为选中成员的默认组.',
	'GROUP_DELETE'					=> '从组中删除成员',
	'GROUP_DELETED'					=> '组已经删除并且用户默认组设置完成.',
	'GROUP_DEMOTE'					=> '组长降级',
	'GROUP_DESC'					=> '群组描述',
	'GROUP_DETAILS'					=> '群组细节',
	'GROUP_EDIT_EXPLAIN'			=> '这里您可以编辑存在的群组. 更改组名称, 描述和类型 (开放, 关闭等). 您还可以设置一些群组范围的选项例如颜色, 等级. 更改将覆盖用户的当前设置. 请注意组成员可以更改他们的头像, 除非您设置了相关的权限.',
	'GROUP_ERR_USERS_EXIST'			=> '指定的用户已经是这个群组的成员',
	'GROUP_FOUNDER_MANAGE'			=> '仅由创始人管理',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> '只允许创始人管理此群组。拥有组权限的用户与此群组的成员一样可以看到这个组。',
	'GROUP_HIDDEN'					=> '隐藏',
	'GROUP_LANG'					=> '组语言',
	'GROUP_LEAD'					=> '组长',
	'GROUP_LEADERS_ADDED'			=> '新领导添加成功.',
	'GROUP_LEGEND'					=> '在团队中显示',
	'GROUP_LIST'					=> '当前成员',
	'GROUP_LIST_EXPLAIN'			=> '群组的成员完整列表. 您可以删除成员 (除了一些特殊群组) 或添加合适的新成员.',
	'GROUP_MEMBERS'					=> '群组成员',
	'GROUP_MEMBERS_EXPLAIN'			=> '群组的所有成员完整列表. 包含了组长, 等待批准的成员和正式成员. 您可以管理这个组中的成员. 如果需要删除组长身份但是保留在组中, 请使用组长降级而不是删除, 同样的可以选择一个正式成员提升为组长.',
	'GROUP_MESSAGE_LIMIT'			=> '群组站内消息数量限制',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> '这个设置会覆盖用户的消息限制. 如果设成0将使用用户的默认设置.',
	'GROUP_MODS_ADDED'				=> '新组管理员添加完成.',
	'GROUP_MODS_DEMOTED'			=> '组长降级完成.',
	'GROUP_MODS_PROMOTED'			=> '组成员提升完成.',
	'GROUP_NAME'					=> '群组名称',
	'GROUP_NAME_TAKEN'				=> '您输入的群组名称已经被使用, 请使用其他的群组名称.',
	'GROUP_OPEN'					=> '打开',
	'GROUP_PENDING'					=> '待批准的成员',
	'GROUP_MAX_RECIPIENTS'         => '站内消息收件人数量上限',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'   => '单个站内消息允许发送的收件人数量上限. 设置为0则使用全局设置.',
	'GROUP_OPTIONS_SAVE'			=> '组范围选项',
	'GROUP_PROMOTE'					=> '升级为组长',
	'GROUP_RANK'					=> '组级别',
	'GROUP_RECEIVE_PM'				=> '群组可以接收站内消息',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> '请注意隐藏的群组不可以接收消息, 这里的设置不起作用.',
	'GROUP_REQUEST'					=> '请求',
	'GROUP_SETTINGS_SAVE'			=> '群组范围设置',
	'GROUP_SKIP_AUTH'				=> '权限中略过组长',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> '启用后组长不再继承当前组的权限.',
	'GROUP_TYPE'					=> '群组类型',
	'GROUP_TYPE_EXPLAIN'			=> '这决定了哪些用户可以加入或查看这个群组.',
	'GROUP_UPDATED'					=> '群组参数更新完成.',

	'GROUP_USERS_ADDED'				=> '新成员添加完成.',
	'GROUP_USERS_EXIST'				=> '选中的用户已经是成员了.',
	'GROUP_USERS_REMOVE'			=> '用户已经删除, 新的默认群组设置完成.',

	'MAKE_DEFAULT_FOR_ALL'	=> '为所有成员设置默认群组',
	'MEMBERS'				=> '成员',

	'NO_GROUP'					=> '没有指定群组.',
	'NO_GROUPS_CREATED'			=> '还没有创建群组.',
	'NO_PERMISSIONS'			=> '不要复制权限',
	'NO_USERS'					=> '您没有输入任何用户.',
	'NO_USERS_ADDED'			=> '这个组还未添加成员.',
	'NO_VALID_USERS'			=> '您还没有输入符合此操作条件的用户.',

	'SPECIAL_GROUPS'			=> '预设的群组',
	'SPECIAL_GROUPS_EXPLAIN'	=> '预设的群组是特殊群组, 它们不能删除和直接更改. 但是可以增删用户和更改基本设置. 点击 “默认” 您可以设置它为其成员的默认组.',

	'TOTAL_MEMBERS'				=> '成员',

	'USERS_APPROVED'				=> '用户已经批准.',
	'USER_DEFAULT'					=> '用户默认',
	'USER_DEF_GROUPS'				=> '用户设置的群组',
	'USER_DEF_GROUPS_EXPLAIN'		=> '这些群组由您或者其他管理员创建. 您可以管理成员和编辑其属性或者删除它. 点击 “默认” 可以设置这个组为其成员的默认群组.',
	'USER_GROUP_DEFAULT'			=> '设置为默认群组',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> '选择是, 将设置为添加的用户的默认组',
	'USER_GROUP_LEADER'				=> '设置为组长',
));

?>