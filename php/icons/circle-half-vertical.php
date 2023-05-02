<?php
require_once(__DIR__ . '../Icon.php');

class IconCircleHalfVertical extends Icon {
    public static function getName(): string {
        return 'circle-half-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M3 12h18" />
        SVG;
    }
}