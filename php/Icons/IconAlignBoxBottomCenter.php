<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconAlignBoxBottomCenter extends \Tabler\Icon {
    public static function getName(): string {
        return 'align-box-bottom-center';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 3m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z" />   <path d="M9 15v2" />   <path d="M12 11v6" />   <path d="M15 13v4" />
        SVG;
    }
}