<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCrossOff extends Icon {
    public static function getName(): string {
        return 'cross-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 12h3v-4h-5v-5h-4v3m-2 2h-3v4h5v9h4v-7" />   <path d="M3 3l18 18" />
        SVG;
    }
}