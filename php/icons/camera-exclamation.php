<?php
require_once(__DIR__ . '/../Icon.php');

class IconCameraExclamation extends Icon {
    public static function getName(): string {
        return 'camera-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 20h-10a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3.5" />   <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}