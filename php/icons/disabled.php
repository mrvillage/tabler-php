<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconDisabled extends Tabler\Icon {
    public static function getName(): string {
        return 'disabled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M11 7l0 8l4 0l4 5" />   <path d="M11 11l5 0" />   <path d="M7 11.5a5 5 0 1 0 6 7.5" />
        SVG;
    }
}