<?php
require_once(__DIR__ . '/../Icon.php');

class IconNotebook extends Icon {
    public static function getName(): string {
        return 'notebook';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 4h11a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-11a1 1 0 0 1 -1 -1v-14a1 1 0 0 1 1 -1m3 0v18" />   <path d="M13 8l2 0" />   <path d="M13 12l2 0" />
        SVG;
    }
}