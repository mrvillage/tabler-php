<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBarRight extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-bar-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M20 12l-10 0" />   <path d="M20 12l-4 4" />   <path d="M20 12l-4 -4" />   <path d="M4 4l0 16" />
        SVG;
    }
}