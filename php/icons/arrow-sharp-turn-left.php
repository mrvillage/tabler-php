<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowSharpTurnLeft extends Tabler\Icon {
    public static function getName(): string {
        return 'arrow-sharp-turn-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 18v-11.31a.7 .7 0 0 0 -1.195 -.495l-9.805 9.805" />   <path d="M11 16h-5v-5" />
        SVG;
    }
}