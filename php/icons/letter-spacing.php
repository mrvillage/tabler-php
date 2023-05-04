<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLetterSpacing extends Tabler\Icon {
    public static function getName(): string {
        return 'letter-spacing';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 12v-5.5a2.5 2.5 0 0 1 5 0v5.5m0 -4h-5" />   <path d="M13 4l3 8l3 -8" />   <path d="M5 18h14" />   <path d="M17 20l2 -2l-2 -2" />   <path d="M7 16l-2 2l2 2" />
        SVG;
    }
}