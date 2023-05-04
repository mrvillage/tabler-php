<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconSportBillard extends Tabler\Icon {
    public static function getName(): string {
        return 'sport-billard';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 10m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M12 12m-8 0a8 8 0 1 0 16 0a8 8 0 1 0 -16 0" />
        SVG;
    }
}