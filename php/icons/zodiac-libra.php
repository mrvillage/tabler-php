<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZodiacLibra extends Icon {
    public static function getName(): string {
        return 'zodiac-libra';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 20l14 0" />   <path d="M5 17h5v-.3a7 7 0 1 1 4 0v.3h5" />
        SVG;
    }
}