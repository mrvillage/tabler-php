<?php
require_once(__DIR__ . '/../Icon.php');

class IconSortAZ extends Icon {
    public static function getName(): string {
        return 'sort-a-z';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 8h4l-4 8h4" />   <path d="M4 16v-6a2 2 0 1 1 4 0v6" />   <path d="M4 13h4" />   <path d="M11 12h2" />
        SVG;
    }
}