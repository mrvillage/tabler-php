<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSpacingVertical extends Icon {
    public static function getName(): string {
        return 'spacing-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20v-2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v2" />   <path d="M4 4v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />   <path d="M16 12h-8" />
        SVG;
    }
}