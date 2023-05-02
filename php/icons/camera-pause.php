<?php
require_once(__DIR__ . '../Icon.php');

class IconCameraPause extends Icon {
    public static function getName(): string {
        return 'camera-pause';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 20h-8a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v4" />   <path d="M14.958 13.506a3 3 0 1 0 -1.735 2.235" />   <path d="M17 17v5" />   <path d="M21 17v5" />
        SVG;
    }
}