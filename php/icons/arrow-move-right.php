<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowMoveRight extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-move-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 12h10" />   <path d="M18 9l3 3l-3 3" />   <path d="M7 12a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z" />
        SVG;
    }
}