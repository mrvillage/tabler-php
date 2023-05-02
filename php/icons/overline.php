<?php
require_once('../Icon.php');

class IconOverline extends Icon {
    public static function getName(): string {
        return 'overline';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 9v5a5 5 0 0 0 10 0v-5" />   <path d="M5 5h14" />
        SVG;
    }
}