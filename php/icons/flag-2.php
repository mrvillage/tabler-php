<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlag2 extends Icon {
    public static function getName(): string {
        return 'flag-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 14h14v-9h-14v16" />
        SVG;
    }
}