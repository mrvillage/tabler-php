<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconStack2 extends Icon {
    public static function getName(): string {
        return 'stack-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 4l-8 4l8 4l8 -4l-8 -4" />   <path d="M4 12l8 4l8 -4" />   <path d="M4 16l8 4l8 -4" />
        SVG;
    }
}