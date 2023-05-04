<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconReceiptRefund extends \Tabler\Icon {
    public static function getName(): string {
        return 'receipt-refund';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M5 21v-16a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v16l-3 -2l-2 2l-2 -2l-2 2l-2 -2l-3 2" />   <path d="M15 14v-2a2 2 0 0 0 -2 -2h-4l2 -2m0 4l-2 -2" />
        SVG;
    }
}