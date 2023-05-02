<?php
require_once(__DIR__ . '/../Icon.php');

class IconAlignBoxBottomRight extends Icon {
    public static function getName(): string {
        return 'align-box-bottom-right';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M11 15v2" />   <path d="M14 11v6" />   <path d="M17 13v4" />
        SVG;
    }
}