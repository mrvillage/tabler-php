<?php
require_once(__DIR__ . '../Icon.php');

class IconCurling extends Icon {
    public static function getName(): string {
        return 'curling';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 9m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v2a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" />   <path d="M4 14h16" />   <path d="M8 5h6a2 2 0 0 1 2 2v2" />
        SVG;
    }
}