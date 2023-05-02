<?php
require_once(__DIR__ . '../Icon.php');

class IconAnchorOff extends Icon {
    public static function getName(): string {
        return 'anchor-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12v9" />   <path d="M4 13a8 8 0 0 0 14.138 5.13m1.44 -2.56a7.99 7.99 0 0 0 .422 -2.57" />   <path d="M21 13h-2" />   <path d="M5 13h-2" />   <path d="M12.866 8.873a3 3 0 1 0 -3.737 -3.747" />   <path d="M3 3l18 18" />
        SVG;
    }
}