<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCashBanknote extends \Tabler\Icon {
    public static function getName(): string {
        return 'cash-banknote';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M3 6m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v8a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M18 12l.01 0" />   <path d="M6 12l.01 0" />
        SVG;
    }
}