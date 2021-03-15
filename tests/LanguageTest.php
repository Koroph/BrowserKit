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


class LanguageTest extends TestCase
{
    protected function setUp(): void
    {
        $_SERVER['HTTP_ACCEPT_LANGUAGE'] = "fr-CH,fr;q=0.9,en-US;q=0.8,en;q=0.7,fr-CI;q=0.6,fr-FR;q=0.5";
    }

    public function testPrimary(){

        $this->assertTrue(BrowserLanguage::Primary() instanceof Lang);
    }
}