<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBong extends Icon {
    public static function getName(): string {
        return 'bong';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13 3v8.416c.134 .059 .265 .123 .393 .193l3.607 -3.609l2 2l-3.608 3.608a5 5 0 1 1 -6.392 -2.192v-8.416h4z" />   <path d="M8 3h6" />   <path d="M6.1 17h9.8" />
        SVG;
    }
}