<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconArrowBarLeft extends \Tabler\Icon {
    public static function getName(): string {
        return 'arrow-bar-left';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12l10 0" />   <path d="M4 12l4 4" />   <path d="M4 12l4 -4" />   <path d="M20 4l0 16" />
        SVG;
    }
}