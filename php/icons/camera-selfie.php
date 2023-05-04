<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCameraSelfie extends Tabler\Icon {
    public static function getName(): string {
        return 'camera-selfie';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 7h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2" />   <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />   <path d="M15 11l.01 0" />   <path d="M9 11l.01 0" />
        SVG;
    }
}