<?php
require_once(__DIR__ . '../Icon.php');

class IconDirectionHorizontal extends Icon {
    public static function getName(): string {
        return 'direction-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 9l-3 3l3 3" />   <path d="M14 9l3 3l-3 3" />
        SVG;
    }
}