<?php
require_once(__DIR__ . '../Icon.php');

class IconNumber5 extends Icon {
    public static function getName(): string {
        return 'number-5';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 20h4a4 4 0 1 0 0 -8h-4v-8h8" />
        SVG;
    }
}