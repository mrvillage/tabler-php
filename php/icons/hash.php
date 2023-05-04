<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHash extends Icon {
    public static function getName(): string {
        return 'hash';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 9l14 0" />   <path d="M5 15l14 0" />   <path d="M11 4l-4 16" />   <path d="M17 4l-4 16" />
        SVG;
    }
}