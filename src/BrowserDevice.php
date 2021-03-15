<?php
/**
 * @author Koroph <yjk@outlook.fr | yjkof1596@gmail.com>
 *
 * @website http://koroph.site
 * @link  https://github.com/Koroph
 * @license MIT
 * @copyright Copyright (c) 2020.
 */


namespace KH\Browser\Kit;

class BrowserDevice
{

    private static function userAgent()
    {
        return $_SERVER['HTTP_USER_AGENT'];
    }


    /**
     * @return OsInfo|null
     */
    public static function Platform(): ?OsInfo
    {
        $platform = null;

        if (preg_match('/windows|win32/i', self::userAgent())) {
            $platform = new OsInfo("Windows", 'windows');
        } else if (preg_match('/macintosh|mac os x/i', self::userAgent()) && !preg_match('/iphone/i', self::userAgent())) {
            $platform = new OsInfo("Macbook", 'macintosh');
        } else if (preg_match('/linux/i', self::userAgent())) {
            $platform = new OsInfo("Linux", 'linux');
        } else if (preg_match('/iphone/i', self::userAgent())) {
            $platform = new OsInfo("iPhone", 'iphone');
        } else if (preg_match('/android/i', self::userAgent())) {
            $platform = new OsInfo("Android", 'android');
        } else if (preg_match('/blackberry/i', self::userAgent())) {
            $platform = new OsInfo("BlackBerry", 'blackberry');
        } else if (preg_match('/webos/i', self::userAgent())) {
            $platform = new OsInfo("Mobile", 'webos');
        } else if (preg_match('/ipod/i', self::userAgent())) {
            $platform = new OsInfo("iPod", 'ipod');
        } else if (preg_match('/ipad/i', self::userAgent())) {
            $platform = new OsInfo("iPad", 'ipad');
        }
        return $platform;

    }
    /**
     * @return BrowserInfo|null
     */
    public static function BrowserTarget(): ?BrowserInfo
    {
        $browserInfo = null;
        if (preg_match('/msie/i', self::userAgent()) && !preg_match('/opera/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Internet Explorer", "msie");
        } else if (preg_match('/firefox/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Firefox", "firefox");
        } else if (preg_match('/edg/i', self::userAgent()) && preg_match('/chrome/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Microsoft Edg", "edg");
        } else if (preg_match('/chrome/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Google Chrome", "chrome");
        } else if (preg_match('/safari/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Safari", "safari");
        } else if (preg_match('/opera/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Opera", "opera");
        } else if (preg_match('/netscape/i', self::userAgent())) {
            $browserInfo = new BrowserInfo("Netscape", "netscape");
        }
        return $browserInfo;
    }

}