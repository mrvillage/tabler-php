<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAngle extends \Tabler\Icon {
    public static function getName(): string {
        return 'angle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M21 19h-18l9 -15" />   <path d="M20.615 15.171h.015" />   <path d="M19.515 11.771h.015" />   <path d="M17.715 8.671h.015" />   <path d="M15.415 5.971h.015" />
        SVG;
    }
}