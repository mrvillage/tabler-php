<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconEPassport extends Tabler\Icon {
    public static function getName(): string {
        return 'e-passport';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M2 5m0 2a2 2 0 0 1 2 -2h16a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-16a2 2 0 0 1 -2 -2z" />   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M9 12h-7" />   <path d="M15 12h7" />
        SVG;
    }
}