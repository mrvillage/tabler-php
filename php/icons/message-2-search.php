<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessage2Search extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-2-search';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M8 9h8" />   <path d="M8 13h5" />   <path d="M12 21l-.5 -.5l-2.5 -2.5h-3a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12a3 3 0 0 1 3 3v4.5" />   <path d="M18 18m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />   <path d="M20.2 20.2l1.8 1.8" />
        SVG;
    }
}