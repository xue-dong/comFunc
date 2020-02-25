<?php
namespace comFunc;

/**
 * php 字符串处理
 */
class stringFunc
{

	/*
	* 格式化打印数组
	 */
    public static function createSn($start = '', $end = '000000')
    {
        $sn = mt_rand(1000, 9999);
        $end = str_pad($end, 6, '0', STR_PAD_LEFT);
        return $start . date('YmdHis') . $end . $sn;
    }


}