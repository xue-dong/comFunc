<?php
namespace comFunc;

/**
 * php 字符串处理
 */
class arrayFunc
{

	/*
	* 格式化打印数组
	 */
    public static function p($arr)
    {
        echo '<pre>';
        print_r($arr);
    }

    /*
    * 二维数组 通过某个键排序
     */
    public static function sortByKey($list=[],$key = '',$sort = 'desc')
    {
    	$key_arr = array_column($list,$key);
    	if (strtolower($sort)=='desc') {
    		$sort_type = SORT_DESC;
    	}
    	if (strtolower($sort)=='asc') {
    		$sort_type = SORT_ASC;
    	}
		array_multisort($key_arr,$sort_type,SORT_NUMERIC,$list);
		echo '<pre>';
		print_r($list);
    }





}