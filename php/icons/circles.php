<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCircles extends Icon {
    public static function getName(): string {
        return 'circles';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M6.5 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />   <path d="M17.5 17m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
        SVG;
    }
}