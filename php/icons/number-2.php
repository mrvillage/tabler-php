<?php
require_once(__DIR__ . '/../Icon.php');

class IconNumber2 extends Icon {
    public static function getName(): string {
        return 'number-2';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8a4 4 0 1 1 8 0c0 1.098 -.564 2.025 -1.159 2.815l-6.841 9.185h8" />
        SVG;
    }
}