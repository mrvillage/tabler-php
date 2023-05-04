<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconInnerShadowBottomLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'inner-shadow-bottom-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M6 12a6 6 0 0 0 6 6" />
        SVG;
    }
}