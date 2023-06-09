<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBandageOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'bandage-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12v.01" />   <path d="M12 14v.01" />   <path d="M10.513 6.487l1.987 -1.987a4.95 4.95 0 0 1 7 7l-2.018 2.018m-1.982 1.982l-4 4a4.95 4.95 0 0 1 -7 -7l4 -4" />   <path d="M3 3l18 18" />
        SVG;
    }
}