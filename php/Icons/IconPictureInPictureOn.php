<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPictureInPictureOn extends \Tabler\Icon {
    public static function getName(): string {
        return 'picture-in-picture-on';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M11 19h-6a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v4" />   <path d="M14 14m0 1a1 1 0 0 1 1 -1h5a1 1 0 0 1 1 1v3a1 1 0 0 1 -1 1h-5a1 1 0 0 1 -1 -1z" />   <path d="M7 9l4 4" />   <path d="M8 13h3v-3" />
        SVG;
    }
}