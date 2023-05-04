<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconZodiacSagittarius extends \Tabler\Icon {
    public static function getName(): string {
        return 'zodiac-sagittarius';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20l16 -16" />   <path d="M13 4h7v7" />   <path d="M6.5 12.5l5 5" />
        SVG;
    }
}