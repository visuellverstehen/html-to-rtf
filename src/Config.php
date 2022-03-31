<?php

declare(strict_types=1);

namespace HtmlToRtf;

/**
 * Class Config.
 */
class Config
{
    /**
     * @var string
     */
    private $font;

    /**
     * @var int
     */
    private $fontSize;

    /**
     * @param string $font
     * @param integer $fontSize
     */
    public function __construct($font = 'Calibri', $fontSize = 24)
    {
        $this->font = $font;
        $this->fontSize = $fontSize;
    }

    /**
     * @return string
     */
    public function getFont(): string
    {
        return $this->font;
    }

    /**
     * @param string $font
     * @return void
     */
    public function setFont(string $font): void
    {
        $this->font = $font;
    }

    /**
     * @return integer
     */
    public function getFontSize(): int
    {
        return $this->fontSize;
    }

    /**
     * @param integer $fontSize
     * @return void
     */
    public function setFontSize(int $fontSize): void
    {
        $this->fontSize = $fontSize;
    }
}
