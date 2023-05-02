<?php
require_once(__DIR__ . '../Icon.php');

class IconServerBolt extends Icon {
    public static function getName(): string {
        return 'server-bolt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 4m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v2a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M15 20h-9a3 3 0 0 1 -3 -3v-2a3 3 0 0 1 3 -3h12" />   <path d="M7 8v.01" />   <path d="M7 16v.01" />   <path d="M20 15l-2 3h3l-2 3" />
        SVG;
    }
}