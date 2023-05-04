<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRotaryRight extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-rotary-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M8 10v10" />   <path d="M17 11l4 -4l-4 -4" />   <path d="M11 7h10" />
        SVG;
    }
}