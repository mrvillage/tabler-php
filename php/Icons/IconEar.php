<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEar extends \Tabler\Icon {
    public static function getName(): string {
        return 'ear';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 10a7 7 0 1 1 13 3.6a10 10 0 0 1 -2 2a8 8 0 0 0 -2 3a4.5 4.5 0 0 1 -6.8 1.4" />   <path d="M10 10a3 3 0 1 1 5 2.2" />
        SVG;
    }
}