<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPlaceholder extends Icon {
    public static function getName(): string {
        return 'placeholder';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 20.415a8 8 0 1 0 3 -15.415h-3" />   <path d="M13 8l-3 -3l3 -3" />   <path d="M7 17l4 -4l-4 -4l-4 4z" />
        SVG;
    }
}