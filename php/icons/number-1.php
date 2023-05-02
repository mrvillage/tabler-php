<?php
require_once('../Icon.php');

class IconNumber1 extends Icon {
    public static function getName(): string {
        return 'number-1';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 20v-16l-5 5" />
        SVG;
    }
}