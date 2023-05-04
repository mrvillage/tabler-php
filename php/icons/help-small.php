<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconHelpSmall extends Tabler\Icon {
    public static function getName(): string {
        return 'help-small';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M12 16v.01" />   <path d="M12 13a2 2 0 0 0 .914 -3.782a1.98 1.98 0 0 0 -2.414 .483" />
        SVG;
    }
}