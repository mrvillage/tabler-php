<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlignBoxRightBottom extends Icon {
    public static function getName(): string {
        return 'align-box-right-bottom';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M15 17h2" />   <path d="M11 14h6" />   <path d="M13 11h4" />
        SVG;
    }
}