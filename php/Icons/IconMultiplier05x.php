<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMultiplier05x extends \Tabler\Icon {
    public static function getName(): string {
        return 'multiplier-0-5x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16h2a2 2 0 1 0 0 -4h-2v-4h4" />   <path d="M5 16v.01" />   <path d="M15 16l4 -4" />   <path d="M19 16l-4 -4" />
        SVG;
    }
}