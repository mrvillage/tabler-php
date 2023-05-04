<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconLoader3 extends Tabler\Icon {
    public static function getName(): string {
        return 'loader-3';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12a9 9 0 0 0 9 9a9 9 0 0 0 9 -9a9 9 0 0 0 -9 -9" />   <path d="M17 12a5 5 0 1 0 -5 5" />
        SVG;
    }
}