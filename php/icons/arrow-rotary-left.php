<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRotaryLeft extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-rotary-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 10a3 3 0 1 1 0 -6a3 3 0 0 1 0 6z" />   <path d="M16 10v10" />   <path d="M13 7h-10" />   <path d="M7 11l-4 -4l4 -4" />
        SVG;
    }
}