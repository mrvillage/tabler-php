<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconReplace extends \Tabler\Icon {
    public static function getName(): string {
        return 'replace';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M15 15m0 1a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1z" />   <path d="M21 11v-3a2 2 0 0 0 -2 -2h-6l3 3m0 -6l-3 3" />   <path d="M3 13v3a2 2 0 0 0 2 2h6l-3 -3m0 6l3 -3" />
        SVG;
    }
}