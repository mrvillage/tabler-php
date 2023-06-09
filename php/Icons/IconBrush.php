<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrush extends \Tabler\Icon {
    public static function getName(): string {
        return 'brush';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />   <path d="M21 3a16 16 0 0 0 -12.8 10.2" />   <path d="M21 3a16 16 0 0 1 -10.2 12.8" />   <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
        SVG;
    }
}