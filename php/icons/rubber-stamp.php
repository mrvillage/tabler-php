<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRubberStamp extends Icon {
    public static function getName(): string {
        return 'rubber-stamp';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 17.85h-18c0 -4.05 1.421 -4.05 3.79 -4.05c5.21 0 1.21 -4.59 1.21 -6.8a4 4 0 1 1 8 0c0 2.21 -4 6.8 1.21 6.8c2.369 0 3.79 0 3.79 4.05z" />   <path d="M5 21h14" />
        SVG;
    }
}