<?php
require_once(__DIR__ . '/../Icon.php');

class IconCash extends Icon {
    public static function getName(): string {
        return 'cash';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 9m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z" />   <path d="M14 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M17 9v-2a2 2 0 0 0 -2 -2h-10a2 2 0 0 0 -2 2v6a2 2 0 0 0 2 2h2" />
        SVG;
    }
}