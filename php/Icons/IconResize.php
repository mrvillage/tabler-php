<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconResize extends \Tabler\Icon {
    public static function getName(): string {
        return 'resize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 11v8a1 1 0 0 0 1 1h8m-9 -14v-1a1 1 0 0 1 1 -1h1m5 0h2m5 0h1a1 1 0 0 1 1 1v1m0 5v2m0 5v1a1 1 0 0 1 -1 1h-1" />   <path d="M4 12h7a1 1 0 0 1 1 1v7" />
        SVG;
    }
}