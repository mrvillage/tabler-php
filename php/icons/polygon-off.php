<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPolygonOff extends Tabler\Icon {
    public static function getName(): string {
        return 'polygon-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M15 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6.5 9.5l1.546 -1.311" />   <path d="M14 5.5l3 1.5" />   <path d="M18.5 10l-1.185 3.318m-1.062 2.972l-.253 .71" />   <path d="M13.5 17.5l-7 -5" />   <path d="M3 3l18 18" />
        SVG;
    }
}