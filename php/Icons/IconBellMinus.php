<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBellMinus extends \Tabler\Icon {
    public static function getName(): string {
        return 'bell-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.5 17h-8.5a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3c.047 .386 .149 .758 .3 1.107" />   <path d="M9 17v1a3 3 0 0 0 3.504 2.958" />   <path d="M16 19h6" />
        SVG;
    }
}