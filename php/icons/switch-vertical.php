<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSwitchVertical extends Tabler\Icon {
    public static function getName(): string {
        return 'switch-vertical';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 8l4 -4l4 4" />   <path d="M7 4l0 9" />   <path d="M13 16l4 4l4 -4" />   <path d="M17 10l0 10" />
        SVG;
    }
}