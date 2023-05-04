<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHomeX extends Icon {
    public static function getName(): string {
        return 'home-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M19 13.4v-1.4h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h5.5" />   <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.402 0 .777 .119 1.091 .323" />   <path d="M21.5 21.5l-5 -5" />   <path d="M16.5 21.5l5 -5" />
        SVG;
    }
}