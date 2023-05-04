<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPhotoAi extends \Tabler\Icon {
    public static function getName(): string {
        return 'photo-ai';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 8h.01" />   <path d="M10 21h-4a3 3 0 0 1 -3 -3v-12a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5" />   <path d="M3 16l5 -5c.928 -.893 2.072 -.893 3 0l1 1" />   <path d="M14 21v-4a2 2 0 1 1 4 0v4" />   <path d="M14 19h4" />   <path d="M21 15v6" />
        SVG;
    }
}