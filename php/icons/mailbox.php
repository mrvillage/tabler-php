<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMailbox extends \Tabler\Icon {
    public static function getName(): string {
        return 'mailbox';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M10 21v-6.5a3.5 3.5 0 0 0 -7 0v6.5h18v-6a4 4 0 0 0 -4 -4h-10.5" />   <path d="M12 11v-8h4l2 2l-2 2h-4" />   <path d="M6 15h1" />
        SVG;
    }
}