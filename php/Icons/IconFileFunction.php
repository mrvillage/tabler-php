<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFileFunction extends \Tabler\Icon {
    public static function getName(): string {
        return 'file-function';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M14 3v4a1 1 0 0 0 1 1h4" />   <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />   <path d="M10.5 17h.333c.474 0 .87 -.323 .916 -.746l.502 -4.508c.047 -.423 .443 -.746 .916 -.746h.333" />   <path d="M10.5 14h3" />
        SVG;
    }
}