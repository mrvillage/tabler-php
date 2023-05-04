<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconShoeOff extends Icon {
    public static function getName(): string {
        return 'shoe-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.846 9.868l4.08 .972a4 4 0 0 1 3.074 3.89v2.27m-3 1h-14a1 1 0 0 1 -1 -1v-10a1 1 0 0 1 1 -1h2" />   <path d="M8 18v-1a4 4 0 0 0 -4 -4h-1" />   <path d="M10 12l.663 -1.327" />   <path d="M3 3l18 18" />
        SVG;
    }
}