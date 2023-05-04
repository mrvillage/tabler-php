<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSwitchHorizontal extends Icon {
    public static function getName(): string {
        return 'switch-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 3l4 4l-4 4" />   <path d="M10 7l10 0" />   <path d="M8 13l-4 4l4 4" />   <path d="M4 17l9 0" />
        SVG;
    }
}