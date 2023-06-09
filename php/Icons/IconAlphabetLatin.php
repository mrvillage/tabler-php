<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlphabetLatin extends \Tabler\Icon {
    public static function getName(): string {
        return 'alphabet-latin';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M6 10h2a2 2 0 0 1 2 2v5h-3a2 2 0 1 1 0 -4h3" />   <path d="M14 7v10" />   <path d="M14 10m0 2a2 2 0 0 1 2 -2h1a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-1a2 2 0 0 1 -2 -2z" />
        SVG;
    }
}