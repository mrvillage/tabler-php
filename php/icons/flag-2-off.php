<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlag2Off extends Icon {
    public static function getName(): string {
        return 'flag-2-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 14h9m4 0h1v-9h-10m-4 0v16" />   <path d="M3 3l18 18" />
        SVG;
    }
}