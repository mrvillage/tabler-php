<?php
require_once(__DIR__ . '../Icon.php');

class IconCircleChevronsRight extends Icon {
    public static function getName(): string {
        return 'circle-chevrons-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M9 9l3 3l-3 3" />   <path d="M13 9l3 3l-3 3" />   <path d="M3 12a9 9 0 1 0 0 -.265l0 .265z" />
        SVG;
    }
}