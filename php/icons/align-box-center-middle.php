<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlignBoxCenterMiddle extends Icon {
    public static function getName(): string {
        return 'align-box-center-middle';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 19v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M11 15h2" />   <path d="M9 12h6" />   <path d="M10 9h4" />
        SVG;
    }
}