<?php
require_once(__DIR__ . '../Icon.php');

class Icon360View extends Icon {
    public static function getName(): string {
        return '360-view';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 6a1 1 0 0 0 -1 -1h-2a1 1 0 0 0 -1 1v6a1 1 0 0 0 1 1h2a1 1 0 0 0 1 -1v-2a1 1 0 0 0 -1 -1h-3" />   <path d="M3 5h2.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-1.5h1.5a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1 -1.5 1.5h-2.5" />   <path d="M17 7v4a2 2 0 1 0 4 0v-4a2 2 0 1 0 -4 0z" />   <path d="M3 16c0 1.657 4.03 3 9 3s9 -1.343 9 -3" />
        SVG;
    }
}