<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconGenderNeutrois extends \Tabler\Icon {
    public static function getName(): string {
        return 'gender-neutrois';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10a5 5 0 1 1 0 10a5 5 0 0 1 0 -10z" />   <path d="M12 10v-7" />
        SVG;
    }
}