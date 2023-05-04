<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconFence extends Tabler\Icon {
    public static function getName(): string {
        return 'fence';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M4 12v4h16v-4z" />   <path d="M6 16v4h4v-4m0 -4v-6l-2 -2l-2 2v6" />   <path d="M14 16v4h4v-4m0 -4v-6l-2 -2l-2 2v6" />
        SVG;
    }
}