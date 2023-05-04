<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEyeEdit extends \Tabler\Icon {
    public static function getName(): string {
        return 'eye-edit';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />   <path d="M11.192 17.966c-3.242 -.28 -5.972 -2.269 -8.192 -5.966c2.4 -4 5.4 -6 9 -6c3.326 0 6.14 1.707 8.442 5.122" />   <path d="M18.42 15.61a2.1 2.1 0 0 1 2.97 2.97l-3.39 3.42h-3v-3l3.42 -3.39z" />
        SVG;
    }
}