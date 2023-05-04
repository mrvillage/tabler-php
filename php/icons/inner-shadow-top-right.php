<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconInnerShadowTopRight extends Tabler\Icon {
    public static function getName(): string {
        return 'inner-shadow-top-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 3a9 9 0 1 0 0 18a9 9 0 0 0 0 -18z" />   <path d="M18 12a6 6 0 0 0 -6 -6" />
        SVG;
    }
}