<?php
require_once(__DIR__ . '../Icon.php');

class IconWindowMaximize extends Icon {
    public static function getName(): string {
        return 'window-maximize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 16m0 1a1 1 0 0 1 1 -1h3a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1z" />   <path d="M4 12v-6a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-6" />   <path d="M12 8h4v4" />   <path d="M16 8l-5 5" />
        SVG;
    }
}