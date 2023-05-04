<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderIntergender extends Tabler\Icon {
    public static function getName(): string {
        return 'gender-intergender';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M13.5 11.5l6.5 6.5v-4" />   <path d="M11.5 13.5l6.5 6.5" />   <path d="M9 4a5 5 0 1 1 0 10a5 5 0 0 1 0 -10z" />   <path d="M14 20l2 -2" />
        SVG;
    }
}