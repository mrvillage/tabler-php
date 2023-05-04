<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSdk extends \Tabler\Icon {
    public static function getName(): string {
        return 'sdk';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8h-3a1 1 0 0 0 -1 1v2a1 1 0 0 0 1 1h2a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-3" />   <path d="M17 8v8" />   <path d="M21 8l-3 4l3 4" />   <path d="M17 12h1" />   <path d="M10 8v8h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-2z" />
        SVG;
    }
}