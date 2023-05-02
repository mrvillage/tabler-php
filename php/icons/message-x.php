<?php
require_once(__DIR__ . '/../Icon.php');

class IconMessageX extends Icon {
    public static function getName(): string {
        return 'message-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M13 18l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v6" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}