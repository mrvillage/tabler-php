<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPillOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'pill-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10.495 6.505l2 -2a4.95 4.95 0 0 1 7 7l-2 2m-2 2l-4 4a4.95 4.95 0 0 1 -7 -7l4 -4" />   <path d="M8.5 8.5l7 7" />   <path d="M3 3l18 18" />
        SVG;
    }
}