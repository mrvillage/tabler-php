<?php
require_once(__DIR__ . '../Icon.php');

class IconUserSearch extends Icon {
    public static function getName(): string {
        return 'user-search';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />   <path d="M6 21v-2a4 4 0 0 1 4 -4h1.5" />   <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M20.2 20.2l1.8 1.8" />
        SVG;
    }
}