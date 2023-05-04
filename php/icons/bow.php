<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBow extends Icon {
    public static function getName(): string {
        return 'bow';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M17 3h4v4" />   <path d="M21 3l-15 15" />   <path d="M3 18h3v3" />   <path d="M16.5 20c1.576 -1.576 2.5 -4.095 2.5 -6.5c0 -4.81 -3.69 -8.5 -8.5 -8.5c-2.415 0 -4.922 .913 -6.5 2.5l12.5 12.5z" />
        SVG;
    }
}