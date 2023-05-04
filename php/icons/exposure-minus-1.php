<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconExposureMinus1 extends Icon {
    public static function getName(): string {
        return 'exposure-minus-1';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12h6" />   <path d="M18 19v-14l-4 4" />
        SVG;
    }
}