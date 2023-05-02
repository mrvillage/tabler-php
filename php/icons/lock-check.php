<?php
require_once(__DIR__ . '/../Icon.php');

class IconLockCheck extends Icon {
    public static function getName(): string {
        return 'lock-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v.5" />   <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0" />   <path d="M8 11v-4a4 4 0 1 1 8 0v4" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}