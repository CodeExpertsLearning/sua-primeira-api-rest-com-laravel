<?php
/**
 * Created by PhpStorm.
 * User: NandoKstroNet
 * Date: 24/11/18
 * Time: 17:01
 */

namespace App\API;


class ApiError
{
	public static function errorMessage($message, $code)
	{
		return [
			'data' => [
				'msg' => $message,
				'code' => $code
			]
		];
	}
}