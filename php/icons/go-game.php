<?php
require_once(__DIR__ . '../Icon.php');

class IconGoGame extends Icon {
    public static function getName(): string {
        return 'go-game';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 6m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M6 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M18 18m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M3 12h7m4 0h7" />   <path d="M3 6h1m4 0h13" />   <path d="M3 18h1m4 0h8m4 0h1" />   <path d="M6 3v1m0 4v8m0 4v1" />   <path d="M12 3v7m0 4v7" />   <path d="M18 3v13m0 4v1" />
        SVG;
    }
}