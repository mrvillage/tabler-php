<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCameraDown extends \Tabler\Icon {
    public static function getName(): string {
        return 'camera-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 20h-7a2 2 0 0 1 -2 -2v-9a2 2 0 0 1 2 -2h1a2 2 0 0 0 2 -2a1 1 0 0 1 1 -1h6a1 1 0 0 1 1 1a2 2 0 0 0 2 2h1a2 2 0 0 1 2 2v3.5" />   <path d="M9 13a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />   <path d="M19 16v6" />   <path d="M22 19l-3 3l-3 -3" />
        SVG;
    }
}