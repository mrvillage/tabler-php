<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEyeglass extends Icon {
    public static function getName(): string {
        return 'eyeglass';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 4h-2l-3 10" />   <path d="M16 4h2l3 10" />   <path d="M10 16l4 0" />   <path d="M21 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />   <path d="M10 16.5a3.5 3.5 0 0 1 -7 0v-2.5h7v2.5" />
        SVG;
    }
}