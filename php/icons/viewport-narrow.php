<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconViewportNarrow extends Icon {
    public static function getName(): string {
        return 'viewport-narrow';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h7l-3 -3m0 6l3 -3" />   <path d="M21 12h-7l3 -3m0 6l-3 -3" />   <path d="M9 6v-3h6v3" />   <path d="M9 18v3h6v-3" />
        SVG;
    }
}