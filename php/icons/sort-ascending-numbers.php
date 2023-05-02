<?php
require_once(__DIR__ . '/../Icon.php');

class IconSortAscendingNumbers extends Icon {
    public static function getName(): string {
        return 'sort-ascending-numbers';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 15l3 3l3 -3" />   <path d="M7 6v12" />   <path d="M17 3a2 2 0 0 1 2 2v3a2 2 0 1 1 -4 0v-3a2 2 0 0 1 2 -2z" />   <path d="M17 16m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19 16v3a2 2 0 0 1 -2 2h-1.5" />
        SVG;
    }
}