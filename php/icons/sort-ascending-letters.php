<?php
require_once(__DIR__ . '../Icon.php');

class IconSortAscendingLetters extends Icon {
    public static function getName(): string {
        return 'sort-ascending-letters';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 10v-5c0 -1.38 .62 -2 2 -2s2 .62 2 2v5m0 -3h-4" />   <path d="M19 21h-4l4 -7h-4" />   <path d="M4 15l3 3l3 -3" />   <path d="M7 6v12" />
        SVG;
    }
}