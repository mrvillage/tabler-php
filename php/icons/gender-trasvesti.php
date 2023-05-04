<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderTrasvesti extends Tabler\Icon {
    public static function getName(): string {
        return 'gender-trasvesti';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 20a5 5 0 1 1 0 -10a5 5 0 0 1 0 10z" />   <path d="M6 6l5.4 5.4" />   <path d="M4 8l4 -4" />
        SVG;
    }
}