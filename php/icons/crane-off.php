<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCraneOff extends Icon {
    public static function getName(): string {
        return 'crane-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 21h6" />   <path d="M9 21v-12" />   <path d="M9 5v-2l-1 1" />   <path d="M6 6l-3 3h6" />   <path d="M13 9h8" />   <path d="M9 3l10 6" />   <path d="M17 9v4a2 2 0 0 1 2 2m-2 2a2 2 0 0 1 -2 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}