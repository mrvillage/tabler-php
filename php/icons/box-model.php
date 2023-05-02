<?php
require_once(__DIR__ . '../Icon.php');

class IconBoxModel extends Icon {
    public static function getName(): string {
        return 'box-model';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8h8v8h-8z" />   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M16 16l3.3 3.3" />   <path d="M16 8l3.3 -3.3" />   <path d="M8 8l-3.3 -3.3" />   <path d="M8 16l-3.3 3.3" />
        SVG;
    }
}