<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCornerUpLeftDouble extends Icon {
    public static function getName(): string {
        return 'corner-up-left-double';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 18v-6a3 3 0 0 0 -3 -3h-7" />   <path d="M13 13l-4 -4l4 -4m-5 8l-4 -4l4 -4" />
        SVG;
    }
}