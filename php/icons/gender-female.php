<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderFemale extends \Tabler\Icon {
    public static function getName(): string {
        return 'gender-female';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 9m-5 0a5 5 0 1 0 10 0a5 5 0 1 0 -10 0" />   <path d="M12 14v7" />   <path d="M9 18h6" />
        SVG;
    }
}