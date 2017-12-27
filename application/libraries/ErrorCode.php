<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class ErrorCode {

	const SUCCESS = 000000;
	const PARAMS_WRONG = 000001;
	const NO_AUTH = 000002;
	const UPLOAD_FAILED = 000003;
	const SERVER_ERROR = 000004;
	const EMAIL_NOT_VALID = 000005;
	const USER_EMAIL_EXISTS = 100001;
	const USER_EMAIL_NOT_EXISTS = 100002;
	const USER_LOGIN_FAILED = 100003;
	const USER_UPDATE_FAILED = 100004;
	const USER_CHANGE_PASSWORD_FAILED = 100005;
	const USER_NOT_FOUND = 100006;
	const DEVICE_NOT_FOUND = 200001;
	const DEVICE_ADD_FAILED = 200002;
	const DEVICE_UPDATE_FAILED = 200003;
	const DEVICE_DELETE_FAILED = 200004;
	const SETTINGS_NOT_FOUND = 300001;
	const SETTINGS_ADD_FAILED = 300002;
	const SETTINGS_UPDATE_FAILED = 300003;
	const FRIENDSHIP_ALREADY_EXIST = 400001;
	const FRIENDSHIP_REQUEST_ALREADY = 400002;
	const FRIENDSHIP_NOT_FOUND = 400003;
	const MAILLIST_EXISTS = 500001;
	const MAILLIST_NOT_FOUND = 500002;
	const USER_NOT_EXIST_OR_DELETED = 600001;
	const WRONG_PASSWORD = 600002;


	public static $codes = array(
		self::SUCCESS                     => 'Success',
		self::PARAMS_WRONG                => 'Params wrong',
		self::NO_AUTH                     => 'No authorization',
		self::UPLOAD_FAILED               => 'Upload failed',
		self::SERVER_ERROR                => 'Server error',
		self::EMAIL_NOT_VALID             => 'Email is not valid',
		self::USER_EMAIL_EXISTS           => 'Email exists',
		self::USER_EMAIL_NOT_EXISTS       => 'Email not exists',
		self::USER_LOGIN_FAILED           => 'Email not exists or password wrong',
		self::USER_UPDATE_FAILED          => 'User info update failed',
		self::USER_CHANGE_PASSWORD_FAILED => 'Change password failed',
		self::USER_NOT_FOUND              => 'User not found',
		self::DEVICE_NOT_FOUND            => 'Device not found',
		self::DEVICE_ADD_FAILED           => 'Device add failed',
		self::DEVICE_UPDATE_FAILED        => 'Device update failed',
		self::DEVICE_DELETE_FAILED        => 'Device delete failed',
		self::SETTINGS_NOT_FOUND          => 'Settings not found',
		self::SETTINGS_ADD_FAILED         => 'Settings add failed',
		self::SETTINGS_UPDATE_FAILED      => 'Settings update failed',
		self::FRIENDSHIP_ALREADY_EXIST    => 'You are already friends',
		self::FRIENDSHIP_REQUEST_ALREADY  => 'Already sent friend request',
		self::FRIENDSHIP_NOT_FOUND        => 'Friendship not found',
		self::MAILLIST_EXISTS             => 'Email is already in maillist',
		self::MAILLIST_NOT_FOUND          => 'Email is not found in maillist',
		self::USER_NOT_EXIST_OR_DELETED   => 'User not exist or deleted',
		self::WRONG_PASSWORD              => 'Wrong password',
	);

	public static $zh_codes = array(
		self::SUCCESS                     => '成功',
		self::PARAMS_WRONG                => '参数错误',
		self::NO_AUTH                     => '权限验证失败',
		self::UPLOAD_FAILED               => '上传失败',
		self::SERVER_ERROR                => '服务器错误',
		self::EMAIL_NOT_VALID             => '邮箱格式错误',
		self::USER_EMAIL_EXISTS           => '邮箱已经存在',
		self::USER_EMAIL_NOT_EXISTS       => '邮箱不存在',
		self::USER_LOGIN_FAILED           => '邮箱不存在或密码错误',
		self::USER_UPDATE_FAILED          => '用户信息更新失败',
		self::USER_CHANGE_PASSWORD_FAILED => '密码修改失败',
		self::USER_NOT_FOUND              => '用户不存在',
		self::DEVICE_NOT_FOUND            => '设备不存在',
		self::DEVICE_ADD_FAILED           => '设备添加失败',
		self::DEVICE_UPDATE_FAILED        => '设备更新失败',
		self::DEVICE_DELETE_FAILED        => '设备删除失败',
		self::SETTINGS_NOT_FOUND          => '设置不存在',
		self::SETTINGS_ADD_FAILED         => '设置存储失败',
		self::SETTINGS_UPDATE_FAILED      => '设置更新失败',
		self::FRIENDSHIP_ALREADY_EXIST    => '已经是好友关系',
		self::FRIENDSHIP_REQUEST_ALREADY  => '已经发送过好友申请',
		self::FRIENDSHIP_NOT_FOUND        => '好友关系不存在',
		self::MAILLIST_EXISTS             => '邮件已经加入订阅',
		self::MAILLIST_NOT_FOUND          => '邮件不在订阅列表中',
		self::USER_NOT_EXIST_OR_DELETED   => '用户不存在或被删除',
		self::WRONG_PASSWORD              => '密码错误',
	);
}