<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShirt extends Tabler\Icon {
    public static function getName(): string {
        return 'shirt';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 4l6 2v5h-3v8a1 1 0 0 1 -1 1h-10a1 1 0 0 1 -1 -1v-8h-3v-5l6 -2a3 3 0 0 0 6 0" />
        SVG;
    }
}