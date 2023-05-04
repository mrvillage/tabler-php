<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHierarchy2 extends Icon {
    public static function getName(): string {
        return 'hierarchy-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 3h4v4h-4z" />   <path d="M3 17h4v4h-4z" />   <path d="M17 17h4v4h-4z" />   <path d="M7 17l5 -4l5 4" />   <path d="M12 7l0 6" />
        SVG;
    }
}