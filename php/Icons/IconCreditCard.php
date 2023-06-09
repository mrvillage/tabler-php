<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconCreditCard extends \Tabler\Icon {
    public static function getName(): string {
        return 'credit-card';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 5m0 3a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3z" />   <path d="M3 10l18 0" />   <path d="M7 15l.01 0" />   <path d="M11 15l2 0" />
        SVG;
    }
}