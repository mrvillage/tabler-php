<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPhotoCode extends \Tabler\Icon {
    public static function getName(): string {
        return 'photo-code';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 8h.01" />   <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v7" />   <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l3 3" />   <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0" />   <path d="M20 21l2 -2l-2 -2" />   <path d="M17 17l-2 2l2 2" />
        SVG;
    }
}