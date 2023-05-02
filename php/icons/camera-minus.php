<?php
require_once(__DIR__ . '/../Icon.php');

class IconCameraMinus extends Icon {
    public static function getName(): string {
        return 'camera-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20h-7a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v6" />   <path d="M16 19h6" />   <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
        SVG;
    }
}