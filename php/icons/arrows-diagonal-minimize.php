<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowsDiagonalMinimize extends Tabler\Icon {
    public static function getName(): string {
        return 'arrows-diagonal-minimize';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 10h4v-4" />   <path d="M4 4l6 6" />   <path d="M18 14h-4v4" />   <path d="M14 14l6 6" />
        SVG;
    }
}