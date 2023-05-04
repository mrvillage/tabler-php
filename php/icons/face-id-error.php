<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFaceIdError extends Tabler\Icon {
    public static function getName(): string {
        return 'face-id-error';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 8v-2a2 2 0 0 1 2 -2h2" />   <path d="M4 16v2a2 2 0 0 0 2 2h2" />   <path d="M16 4h2a2 2 0 0 1 2 2v2" />   <path d="M16 20h2a2 2 0 0 0 2 -2v-2" />   <path d="M9 10h.01" />   <path d="M15 10h.01" />   <path d="M9.5 15.05a3.5 3.5 0 0 1 5 0" />
        SVG;
    }
}