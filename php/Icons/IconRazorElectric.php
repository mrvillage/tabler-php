<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconRazorElectric extends \Tabler\Icon {
    public static function getName(): string {
        return 'razor-electric';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 3v2" />   <path d="M12 3v2" />   <path d="M16 3v2" />   <path d="M9 12v6a3 3 0 0 0 6 0v-6h-6z" />   <path d="M8 5h8l-1 4h-6z" />   <path d="M12 17v1" />
        SVG;
    }
}