<?php
require_once(__DIR__ . '/../Icon.php');

class IconUvIndex extends Icon {
    public static function getName(): string {
        return 'uv-index';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h1m16 0h1m-15.4 -6.4l.7 .7m12.1 -.7l-.7 .7m-9.7 5.7a4 4 0 1 1 8 0" />   <path d="M12 4v-1" />   <path d="M13 16l2 5h1l2 -5" />   <path d="M6 16v3a2 2 0 1 0 4 0v-3" />
        SVG;
    }
}