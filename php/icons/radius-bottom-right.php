<?php
require_once('../Icon.php');

class IconRadiusBottomRight extends Icon {
    public static function getName(): string {
        return 'radius-bottom-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 5v6a8 8 0 0 1 -8 8h-6" />
        SVG;
    }
}