<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBarToRight extends Icon {
    public static function getName(): string {
        return 'arrow-bar-to-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 12l-10 0" />   <path d="M14 12l-4 4" />   <path d="M14 12l-4 -4" />   <path d="M20 4l0 16" />
        SVG;
    }
}