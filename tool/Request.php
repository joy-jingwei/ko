<?php
/**
 * Request
 *
 * @package ko\tool
 * @author zhangchu
 */

class Ko_Tool_Request
{
	/**
	 * 判断是否是ajax请求
	 *
	 * @return boolean
	 */
	public static function BIsAjax()
	{
		return 'XMLHttpRequest' === getenv('HTTP_X_REQUESTED_WITH');
	}
}
