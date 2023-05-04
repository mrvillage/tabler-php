<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHorseToy extends Icon {
    public static function getName(): string {
        return 'horse-toy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3.5 17.5c5.667 4.667 11.333 4.667 17 0" />   <path d="M19 18.5l-2 -8.5l1 -2l2 1l1.5 -1.5l-2.5 -4.5c-5.052 .218 -5.99 3.133 -7 6h-6a3 3 0 0 0 -3 3" />   <path d="M5 18.5l2 -9.5" />   <path d="M8 20l2 -5h4l2 5" />
        SVG;
    }
}