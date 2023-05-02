<?php
require_once(__DIR__ . '../Icon.php');

class IconSTurnDown extends Icon {
    public static function getName(): string {
        return 's-turn-down';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 5a2 2 0 1 1 -4 0a2 2 0 0 1 4 0z" />   <path d="M5 7v9.5a3.5 3.5 0 0 0 7 0v-9a3.5 3.5 0 0 1 7 0v13.5" />   <path d="M16 18l3 3l3 -3" />
        SVG;
    }
}