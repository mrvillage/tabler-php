<?php
require_once(__DIR__ . '../Icon.php');

class IconBoxAlignBottomRight extends Icon {
    public static function getName(): string {
        return 'box-align-bottom-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 13h-5a1 1 0 0 0 -1 1v5a1 1 0 0 0 1 1h5a1 1 0 0 0 1 -1v-5a1 1 0 0 0 -1 -1z" />   <path d="M20 9v.01" />   <path d="M20 4v.01" />   <path d="M15 4v.01" />   <path d="M9 4v.01" />   <path d="M9 20v.01" />   <path d="M4 4v.01" />   <path d="M4 9v.01" />   <path d="M4 15v.01" />   <path d="M4 20v.01" />
        SVG;
    }
}