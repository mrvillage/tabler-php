<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconInnerShadowRight extends Tabler\Icon {
    public static function getName(): string {
        return 'inner-shadow-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18.364 18.364a9 9 0 1 1 -12.728 -12.728a9 9 0 0 1 12.728 12.728z" />   <path d="M16.243 7.757a6 6 0 0 1 0 8.486" />
        SVG;
    }
}