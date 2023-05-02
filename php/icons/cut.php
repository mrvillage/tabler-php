<?php
require_once(__DIR__ . '/../Icon.php');

class IconCut extends Icon {
    public static function getName(): string {
        return 'cut';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9.15 14.85l8.85 -10.85" />   <path d="M6 4l8.85 10.85" />
        SVG;
    }
}