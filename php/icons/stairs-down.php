<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconStairsDown extends Tabler\Icon {
    public static function getName(): string {
        return 'stairs-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20h4v-4h4v-4h4v-4h4" />   <path d="M11 4l-7 7v-4m4 4h-4" />
        SVG;
    }
}