<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconTicket extends \Tabler\Icon {
    public static function getName(): string {
        return 'ticket';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15 5l0 2" />   <path d="M15 11l0 2" />   <path d="M15 17l0 2" />   <path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2" />
        SVG;
    }
}