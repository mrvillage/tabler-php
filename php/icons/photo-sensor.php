<?php
require_once(__DIR__ . '../Icon.php');

class IconPhotoSensor extends Icon {
    public static function getName(): string {
        return 'photo-sensor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 5h2a2 2 0 0 1 2 2v2" />   <path d="M21 15v2a2 2 0 0 1 -2 2h-2" />   <path d="M7 19h-2a2 2 0 0 1 -2 -2v-2" />   <path d="M3 9v-2a2 2 0 0 1 2 -2h2" />   <path d="M7 9m0 1a1 1 0 0 1 1 -1h8a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-8a1 1 0 0 1 -1 -1z" />
        SVG;
    }
}