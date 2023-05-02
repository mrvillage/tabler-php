<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowSharpTurnRight extends Icon {
    public static function getName(): string {
        return 'arrow-sharp-turn-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 18v-11.31a.7 .7 0 0 1 1.195 -.495l9.805 9.805" />   <path d="M13 16h5v-5" />
        SVG;
    }
}