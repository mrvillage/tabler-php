<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSeparator extends \Tabler\Icon {
    public static function getName(): string {
        return 'separator';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 12l0 .01" />   <path d="M7 12l10 0" />   <path d="M21 12l0 .01" />
        SVG;
    }
}