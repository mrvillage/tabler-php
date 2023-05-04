<?php
namespace Tabler\Icons;

require_once(__DIR__ . '/../Icon.php');

class IconBrandCampaignmonitor extends Tabler\Icon {
    public static function getName(): string {
        return 'brand-campaignmonitor';
    }

    public static function getSvg(): string {
        return <<<SVG
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>   <path d="M3 18l9 -6.462l-9 -5.538v12h18v-12l-9 5.538" />
        SVG;
    }
}