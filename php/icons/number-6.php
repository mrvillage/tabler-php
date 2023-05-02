<?php
require_once('../Icon.php');

class IconNumber6 extends Icon {
    public static function getName(): string {
        return 'number-6';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 16a4 4 0 1 0 8 0v-1a4 4 0 1 0 -8 0" />   <path d="M16 8a4 4 0 1 0 -8 0v8" />
        SVG;
    }
}