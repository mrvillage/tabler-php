<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTicketOff extends \Tabler\Icon {
    public static function getName(): string {
        return 'ticket-off';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 5v2" />   <path d="M15 17v2" />   <path d="M9 5h10a2 2 0 0 1 2 2v3a2 2 0 1 0 0 4v3m-2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 1 0 0 -4v-3a2 2 0 0 1 2 -2" />   <path d="M3 3l18 18" />
        SVG;
    }
}