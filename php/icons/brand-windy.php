<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandWindy extends Icon {
    public static function getName(): string {
        return 'brand-windy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 4c0 5.5 -.33 16 4 16s7.546 -11.27 8 -13" />   <path d="M3 4c.253 5.44 1.449 16 5.894 16c4.444 0 8.42 -10.036 9.106 -14" />
        SVG;
    }
}