<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconNurse extends \Tabler\Icon {
    public static function getName(): string {
        return 'nurse';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 6c2.941 0 5.685 .847 8 2.31l-2 9.69h-12l-2 -9.691a14.93 14.93 0 0 1 8 -2.309z" />   <path d="M10 12h4" />   <path d="M12 10v4" />
        SVG;
    }
}