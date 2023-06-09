<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBellCode extends \Tabler\Icon {
    public static function getName(): string {
        return 'bell-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 17h-7.5a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v2" />   <path d="M9 17v1a3 3 0 0 0 2.498 2.958" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />
        SVG;
    }
}