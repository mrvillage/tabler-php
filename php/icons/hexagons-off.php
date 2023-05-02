<?php
require_once(__DIR__ . '../Icon.php');

class IconHexagonsOff extends Icon {
    public static function getName(): string {
        return 'hexagons-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 18v-5l4 -2l4 2v5l-4 2z" />   <path d="M8 11v-3m1.332 -2.666l2.668 -1.334l4 2v5" />   <path d="M12 13l.661 -.331" />   <path d="M15.345 11.328l.655 -.328l4 2v3m-1.334 2.667l-2.666 1.333l-4 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}