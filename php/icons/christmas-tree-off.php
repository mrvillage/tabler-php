<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconChristmasTreeOff extends Tabler\Icon {
    public static function getName(): string {
        return 'christmas-tree-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9.5 5.5l2.5 -2.5l4 4l-2 1l4 4l-1.5 .5m.5 4.5h-12l4 -4l-3 -1l3 -3" />   <path d="M14 17v3a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-3" />   <path d="M3 3l18 18" />
        SVG;
    }
}