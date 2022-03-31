<?php
namespace HtmlToRtf\Node\ElementNode;

use HtmlToRtf\Config;
use HtmlToRtf\Node\ElementNode;

class HTMLElementNode extends ElementNode
{
    /**
     * @var Config
     */
    private $config;

    public function __construct($node, Config $config = new Config(), $rtfPrepend = '', $rtfAppend = '')
    {
        parent::__construct($node, $rtfPrepend, $rtfAppend);
        $this->config = $config;
    }

    public function parse()
    {
        //start rtf document
        $prepend = '{\rtf1\ansi\ansicpg1252';
        //set default fonts
        $prepend .= '\deff0{\fonttbl{\f0 '.$this->config->getFont().';}}';
        //set hyperlink color
        $prepend .= '{\colortbl ;\red0\green0\blue0 ;\red0\green0\blue255 ;}';
        //set default style
        $prepend .= '\f0\cf1\fs'.$this->config->getFontSize().' ';

        $append = '}';
        $this->setRtfPrepend($prepend);
        $this->setRtfAppend($append);
        return parent::parse();
    }
}
