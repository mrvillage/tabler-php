<?php
require_once(__DIR__ . '/../Icon.php');

class IconLockSearch extends Icon {
    public static function getName(): string {
        return 'lock-search';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11.5 21h-4.5a2 2 0 0 1 -2 -2v-6a2 2 0 0 1 2 -2h10" />   <path d="M8 11v-4a4 4 0 1 1 8 0v4" />   <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M20.2 20.2l1.8 1.8" />
        SVG;
    }
}