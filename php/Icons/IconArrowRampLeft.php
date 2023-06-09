<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowRampLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-ramp-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3l0 8.707" />   <path d="M13 7l4 -4l4 4" />   <path d="M7 14l-4 -4l4 -4" />   <path d="M17 21a11 11 0 0 0 -11 -11h-3" />
        SVG;
    }
}