<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShieldMinus extends Tabler\Icon {
    public static function getName(): string {
        return 'shield-minus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12.46 20.871c-.153 .046 -.306 .089 -.46 .129a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3a12 12 0 0 0 8.5 3a12 12 0 0 1 -.916 9.015" />   <path d="M16 19h6" />
        SVG;
    }
}