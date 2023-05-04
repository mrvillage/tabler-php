<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconPeace extends Tabler\Icon {
    public static function getName(): string {
        return 'peace';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />   <path d="M12 3l0 18" />   <path d="M12 12l6.3 6.3" />   <path d="M12 12l-6.3 6.3" />
        SVG;
    }
}