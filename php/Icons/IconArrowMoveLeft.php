<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowMoveLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-move-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 12h-10" />   <path d="M6 15l-3 -3l3 -3" />   <path d="M17 12a2 2 0 1 1 4 0a2 2 0 0 1 -4 0z" />
        SVG;
    }
}