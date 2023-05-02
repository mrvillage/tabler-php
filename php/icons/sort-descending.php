<?php
require_once(__DIR__ . '../Icon.php');

class IconSortDescending extends Icon {
    public static function getName(): string {
        return 'sort-descending';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 6l9 0" />   <path d="M4 12l7 0" />   <path d="M4 18l7 0" />   <path d="M15 15l3 3l3 -3" />   <path d="M18 6l0 12" />
        SVG;
    }
}