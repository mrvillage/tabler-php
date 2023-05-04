<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconWalk extends \Tabler\Icon {
    public static function getName(): string {
        return 'walk';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 4m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />   <path d="M7 21l3 -4" />   <path d="M16 21l-2 -4l-3 -3l1 -6" />   <path d="M6 12l2 -3l4 -1l3 3l3 1" />
        SVG;
    }
}