<?php
require_once(__DIR__ . '../Icon.php');

class IconArrowsMoveHorizontal extends Icon {
    public static function getName(): string {
        return 'arrows-move-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M18 9l3 3l-3 3" />   <path d="M15 12h6" />   <path d="M6 9l-3 3l3 3" />   <path d="M3 12h6" />
        SVG;
    }
}