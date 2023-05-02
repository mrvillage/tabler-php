<?php
require_once(__DIR__ . '/../Icon.php');

class IconArrowRightRhombus extends Icon {
    public static function getName(): string {
        return 'arrow-right-rhombus';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 12h13" />   <path d="M18 9l3 3l-3 3" />   <path d="M5.5 9.5l-2.5 2.5l2.5 2.5l2.5 -2.5z" />
        SVG;
    }
}