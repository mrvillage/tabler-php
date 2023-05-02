<?php
require_once('../Icon.php');

class IconBrandVscode extends Icon {
    public static function getName(): string {
        return 'brand-vscode';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M16 3v18l4 -2.5v-13z" />   <path d="M9.165 13.903l-4.165 3.597l-2 -1l4.333 -4.5m1.735 -1.802l6.932 -7.198v5l-4.795 4.141" />   <path d="M16 16.5l-11 -10l-2 1l13 13.5" />
        SVG;
    }
}