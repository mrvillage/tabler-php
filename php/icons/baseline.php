<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBaseline extends Icon {
    public static function getName(): string {
        return 'baseline';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 20h16" />   <path d="M8 16v-8a4 4 0 1 1 8 0v8" />   <path d="M8 10h8" />
        SVG;
    }
}