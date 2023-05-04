<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFlipHorizontal extends \Tabler\Icon {
    public static function getName(): string {
        return 'flip-horizontal';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12l18 0" />   <path d="M7 16l10 0l-10 5l0 -5" />   <path d="M7 8l10 0l-10 -5l0 5" />
        SVG;
    }
}