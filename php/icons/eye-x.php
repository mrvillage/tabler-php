<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEyeX extends Icon {
    public static function getName(): string {
        return 'eye-x';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M13.117 17.933a9.275 9.275 0 0 1 -1.117 .067c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6a18.728 18.728 0 0 1 -1.009 1.516" />   <path d="M22 22l-5 -5" />   <path d="M17 22l5 -5" />
        SVG;
    }
}