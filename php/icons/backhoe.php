<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBackhoe extends Tabler\Icon {
    public static function getName(): string {
        return 'backhoe';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M13 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M13 19l-9 0" />   <path d="M4 15l9 0" />   <path d="M8 12v-5h2a3 3 0 0 1 3 3v5" />   <path d="M5 15v-2a1 1 0 0 1 1 -1h7" />   <path d="M21.12 9.88l-3.12 -4.88l-5 5" />   <path d="M21.12 9.88a3 3 0 0 1 -2.12 5.12a3 3 0 0 1 -2.12 -.88l4.24 -4.24z" />
        SVG;
    }
}