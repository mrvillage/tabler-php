<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderGenderless extends Tabler\Icon {
    public static function getName(): string {
        return 'gender-genderless';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10a5 5 0 1 1 0 10a5 5 0 0 1 0 -10z" />   <path d="M12 10v-7" />   <path d="M7 15h10" />
        SVG;
    }
}