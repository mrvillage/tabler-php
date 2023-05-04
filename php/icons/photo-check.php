<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPhotoCheck extends Icon {
    public static function getName(): string {
        return 'photo-check';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 8h.01" />   <path d="M11.5 21h-5.5a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v7" />   <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l4 4" />   <path d="M14 14l1 -1c.928 -.893 2.072 -.893 3 0l.5 .5" />   <path d="M15 19l2 2l4 -4" />
        SVG;
    }
}