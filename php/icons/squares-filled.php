<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSquaresFilled extends Tabler\Icon {
    public static function getName(): string {
        return 'squares-filled';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 8m0 2a2 2 0 0 1 2 -2h8a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-8a2 2 0 0 1 -2 -2z" />   <path d="M8 14.5l6.492 -6.492" />   <path d="M13.496 20l6.504 -6.504l-6.504 6.504z" />   <path d="M8.586 19.414l10.827 -10.827" />   <path d="M16 8v-2a2 2 0 0 0 -2 -2h-8a2 2 0 0 0 -2 2v8a2 2 0 0 0 2 2h2" />
        SVG;
    }
}