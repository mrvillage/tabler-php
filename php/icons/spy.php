<?php
require_once('../Icon.php');

class IconSpy extends Icon {
    public static function getName(): string {
        return 'spy';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 11h18" />   <path d="M5 11v-4a3 3 0 0 1 3 -3h8a3 3 0 0 1 3 3v4" />   <path d="M7 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M17 17m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M10 17h4" />
        SVG;
    }
}