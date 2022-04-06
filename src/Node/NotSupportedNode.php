<?php
namespace HtmlToRtf\Node;

use HtmlToRtf\Node;

class NotSupportedNode extends Node
{
    //ignore the current node and parse all children
    public function parse() {
        return $this->parseNodeChildren();
    }
}
