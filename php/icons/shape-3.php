<?php
require_once(__DIR__ . '/../Icon.php');

class IconShape3 extends Icon {
    public static function getName(): string {
        return 'shape-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M5 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M7 5h10m-12 2v10m14 -10v10" />
        SVG;
    }
}