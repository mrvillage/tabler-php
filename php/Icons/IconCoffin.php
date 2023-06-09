<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCoffin extends \Tabler\Icon {
    public static function getName(): string {
        return 'coffin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 3l-2 6l2 12h6l2 -12l-2 -6z" />   <path d="M10 7v5" />   <path d="M8 9h4" />   <path d="M13 21h4l2 -12l-2 -6h-4" />
        SVG;
    }
}