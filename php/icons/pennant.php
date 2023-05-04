<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPennant extends Tabler\Icon {
    public static function getName(): string {
        return 'pennant';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 21l4 0" />   <path d="M10 21l0 -18" />   <path d="M10 4l9 4l-9 4" />
        SVG;
    }
}