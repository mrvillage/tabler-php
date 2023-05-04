<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandLinqpad extends \Tabler\Icon {
    public static function getName(): string {
        return 'brand-linqpad';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 21h3.5l2.5 -6l2.5 -1l2.5 7h4l1 -4.5l-2 -1l-7 -12l-6 -.5l1.5 4l2.5 .5l1 2.5l-7 8z" />
        SVG;
    }
}