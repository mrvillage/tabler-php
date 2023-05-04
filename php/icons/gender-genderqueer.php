<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderGenderqueer extends Tabler\Icon {
    public static function getName(): string {
        return 'gender-genderqueer';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 11a5 5 0 1 1 0 10a5 5 0 0 1 0 -10z" />   <path d="M12 11v-8" />   <path d="M14.5 4.5l-5 3" />   <path d="M9.5 4.5l5 3" />
        SVG;
    }
}