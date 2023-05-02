<?php
require_once(__DIR__ . '/../Icon.php');

class IconMessageUp extends Icon {
    public static function getName(): string {
        return 'message-up';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M11.99 18.606l-3.99 2.394v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5.5" />   <path d="M19 22v-6" />   <path d="M22 19l-3 -3l-3 3" />
        SVG;
    }
}