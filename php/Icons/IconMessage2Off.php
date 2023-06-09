<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessage2Off extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-2-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h1m4 0h3" />   <path d="M8 13h5" />   <path d="M8 4h10a3 3 0 0 1 3 3v8c0 .57 -.16 1.104 -.436 1.558m-2.564 1.442h-3l-3 3l-3 -3h-3a3 3 0 0 1 -3 -3v-8c0 -1.084 .575 -2.034 1.437 -2.561" />   <path d="M3 3l18 18" />
        SVG;
    }
}