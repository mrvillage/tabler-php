<?php
require_once(__DIR__ . '/../Icon.php');

class IconRadio extends Icon {
    public static function getName(): string {
        return 'radio';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3l-9.371 3.749a1 1 0 0 0 -.629 .928v11.323a1 1 0 0 0 1 1h14a1 1 0 0 0 1 -1v-11a1 1 0 0 0 -1 -1h-14.5" />   <path d="M4 12h16" />   <path d="M7 12v-2" />   <path d="M17 16v.01" />   <path d="M13 16v.01" />
        SVG;
    }
}