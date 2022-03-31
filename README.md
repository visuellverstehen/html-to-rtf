# HTML-to-RTF-converter for PHP
_Convert basic HTML output of TinyMCE to RTF with PHP_

Supported HTML:
- Text styles
  - bold
  - italic
  - undeline
  - strikethrough
- Align
  - Left
  - Center
  - Right
  - Justify
- Lists
  - Ordered
  - Unordered
- Unicode characters

This is a fork from [hermanouchoa/php-html-to-rtf-converter](https://github.com/hermanouchoa/php-html-to-rtf-converter).
This fork provides a ```Config``` class that introduces a way to override the default font and font-size of RTF.

# Installation
``` bash
composer require visuellverstehen/php-html-to-rtf-converter
```

# Examples
Example can be found in examples/index.php
