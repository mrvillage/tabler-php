<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShieldHalf extends Icon {
    public static function getName(): string {
        return 'shield-half';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />   <path d="M12 3v18" />
        SVG;
    }
}