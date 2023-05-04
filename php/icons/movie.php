<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMovie extends Tabler\Icon {
    public static function getName(): string {
        return 'movie';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />   <path d="M8 4l0 16" />   <path d="M16 4l0 16" />   <path d="M4 8l4 0" />   <path d="M4 16l4 0" />   <path d="M4 12l16 0" />   <path d="M16 8l4 0" />   <path d="M16 16l4 0" />
        SVG;
    }
}