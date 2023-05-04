<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCode extends Tabler\Icon {
    public static function getName(): string {
        return 'code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M7 8l-4 4l4 4" />   <path d="M17 8l4 4l-4 4" />   <path d="M14 4l-4 16" />
        SVG;
    }
}