<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageCog extends Icon {
    public static function getName(): string {
        return 'message-cog';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h6" />   <path d="M12.031 18.581l-4.031 2.419v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v5" />   <path d="M19.001 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />   <path d="M19.001 15.5v1.5" />   <path d="M19.001 21v1.5" />   <path d="M22.032 17.25l-1.299 .75" />   <path d="M17.27 20l-1.3 .75" />   <path d="M15.97 17.25l1.3 .75" />   <path d="M20.733 20l1.3 .75" />
        SVG;
    }
}