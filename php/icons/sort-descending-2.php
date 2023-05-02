<?php
require_once('../Icon.php');

class IconSortDescending2 extends Icon {
    public static function getName(): string {
        return 'sort-descending-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" />   <path d="M5 14m0 .5a.5 .5 0 0 1 .5 -.5h4a.5 .5 0 0 1 .5 .5v4a.5 .5 0 0 1 -.5 .5h-4a.5 .5 0 0 1 -.5 -.5z" />   <path d="M14 15l3 3l3 -3" />   <path d="M17 18v-12" />
        SVG;
    }
}