<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFrame extends Tabler\Icon {
    public static function getName(): string {
        return 'frame';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 7l16 0" />   <path d="M4 17l16 0" />   <path d="M7 4l0 16" />   <path d="M17 4l0 16" />
        SVG;
    }
}