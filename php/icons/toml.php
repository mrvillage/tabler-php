<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconToml extends Tabler\Icon {
    public static function getName(): string {
        return 'toml';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M1.499 8h3" />   <path d="M2.999 8v8" />   <path d="M8.5 8a1.5 1.5 0 0 1 1.5 1.5v5a1.5 1.5 0 0 1 -3 0v-5a1.5 1.5 0 0 1 1.5 -1.5z" />   <path d="M13 16v-8l2 5l2 -5v8" />   <path d="M20 8v8h2.5" />
        SVG;
    }
}