<?php
require_once(__DIR__ . '../Icon.php');

class IconTractor extends Icon {
    public static function getName(): string {
        return 'tractor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 15m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M7 15l0 .01" />   <path d="M19 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M10.5 17l6.5 0" />   <path d="M20 15.2v-4.2a1 1 0 0 0 -1 -1h-6l-2 -5h-6v6.5" />   <path d="M18 5h-1a1 1 0 0 0 -1 1v4" />
        SVG;
    }
}