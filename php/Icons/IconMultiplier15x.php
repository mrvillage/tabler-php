<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMultiplier15x extends \Tabler\Icon {
    public static function getName(): string {
        return 'multiplier-1-5x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 16v-8l-2 2" />   <path d="M10 16h2a2 2 0 1 0 0 -4h-2v-4h4" />   <path d="M7 16v.01" />   <path d="M17 16l4 -4" />   <path d="M21 16l-4 -4" />
        SVG;
    }
}