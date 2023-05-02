<?php
require_once(__DIR__ . '../Icon.php');

class IconCpu extends Icon {
    public static function getName(): string {
        return 'cpu';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 5m0 1a1 1 0 0 1 1 -1h12a1 1 0 0 1 1 1v12a1 1 0 0 1 -1 1h-12a1 1 0 0 1 -1 -1z" />   <path d="M9 9h6v6h-6z" />   <path d="M3 10h2" />   <path d="M3 14h2" />   <path d="M10 3v2" />   <path d="M14 3v2" />   <path d="M21 10h-2" />   <path d="M21 14h-2" />   <path d="M14 21v-2" />   <path d="M10 21v-2" />
        SVG;
    }
}