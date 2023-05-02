<?php
require_once('../Icon.php');

class IconTrees extends Icon {
    public static function getName(): string {
        return 'trees';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 5l3 3l-2 1l4 4l-3 1l4 4h-9" />   <path d="M15 21l0 -3" />   <path d="M8 13l-2 -2" />   <path d="M8 12l2 -2" />   <path d="M8 21v-13" />   <path d="M5.824 16a3 3 0 0 1 -2.743 -3.69a3 3 0 0 1 .304 -4.833a3 3 0 0 1 4.615 -3.707a3 3 0 0 1 4.614 3.707a3 3 0 0 1 .305 4.833a3 3 0 0 1 -2.919 3.695h-4z" />
        SVG;
    }
}