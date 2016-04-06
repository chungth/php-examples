<?php
/** DateTime formatter for PHP extends {@link DateTime} native class 
 * @author: 
 *   Chung Tran Huy 
 * @since
 *   August 20th 2013 
 * @license GPLv3 
 * 
 * */
class DateTimeFormatter extends DateTime{
	/** convert date from different format
	 * @param $timestr - string of DateTime
	 * @param $fromPattern - define format of $timestr
	 * @param $toPattern - define format of return datetime string want to convert
	 * @return string of DateTime in $toPattern format
	 * @example
	 *       $timestr = '2013-08-20 09:00:00'
	 *       && $fromPattern = 'Y-m-d H:i:s'
	 *       && $toPattern = 'Y/m/d' --> return '2013/08/20'
	 * 
	 * */
	public static function convert($timestr, $fromPattern, $toPattern){
		$date = self::createFromFormat($fromPattern, $timestr);
		if($date instanceof DateTime){
			return $date->format($toPattern);
		}
		return false;
	}
}
