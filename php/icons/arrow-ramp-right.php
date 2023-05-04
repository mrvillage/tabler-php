<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRampRight extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-ramp-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3l0 8.707" />   <path d="M11 7l-4 -4l-4 4" />   <path d="M17 14l4 -4l-4 -4" />   <path d="M7 21a11 11 0 0 1 11 -11h3" />
        SVG;
    }
}