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


use PHPUnit\Framework\TestCase;

class DeviceTest extends TestCase
{
    protected function setUp(): void
    {
        $_SERVER['HTTP_USER_AGENT'] = "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.82 Safari/537.36";
    }

    public function testPlatform()
    {
        $this->assertTrue(BrowserDevice::Platform() instanceof OsInfo);
    }

    public function testBrowserTarget()
    {
        $this->assertTrue(BrowserDevice::BrowserTarget() instanceof BrowserInfo);
    }
}