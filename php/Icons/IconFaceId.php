<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFaceId extends \Tabler\Icon {
    public static function getName(): string {
        return 'face-id';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />   <path d="M4 16v2a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v2" />   <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />   <path d="M9 10l.01 0" />   <path d="M15 10l.01 0" />   <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
        SVG;
    }
}