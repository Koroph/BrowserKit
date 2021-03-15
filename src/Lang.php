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


class Lang
{
    /**
     * @var string
     */
    private $langCode;
    /**
     * @var string
     */
    private $langName;
    /**
     * @var string
     */
    private $countryCode;
    /**
     * @var string
     */
    private $countryName;
    /**
     * @var string
     */
    private $order;

    /**
     * Lang constructor.
     * @param string $langCode
     * @param string $langName
     * @param int $order
     * @param string $countryCode
     * @param string $countryName
     */
    public function __construct(string $langCode,string $langName,int $order, string $countryCode, string $countryName)
    {
        $this->langCode = $langCode;
        $this->langName = $langName;
        $this->order = $order;
        $this->countryCode = $countryCode;
        $this->countryName = $countryName;
    }

    /**
     * @return string
     */
    public function getLangCode(): string
    {
        return $this->langCode;
    }

    /**
     * @return string
     */
    public function getLangName(): string
    {
        return $this->langName;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getCountryName(): string
    {
        return $this->countryName;
    }

    /**
     * @return string
     */
    public function getOrder()
    {
        return $this->order;
    }



}