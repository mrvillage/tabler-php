<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconMessageCircleExclamation extends \Tabler\Icon {
    public static function getName(): string {
        return 'message-circle-exclamation';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M15.02 19.52c-2.34 .736 -5 .606 -7.32 -.52l-4.7 1l1.3 -3.9c-2.324 -3.437 -1.426 -7.872 2.1 -10.374c3.526 -2.501 8.59 -2.296 11.845 .48c1.96 1.671 2.898 3.963 2.755 6.227" />   <path d="M19 16v3" />   <path d="M19 22v.01" />
        SVG;
    }
}