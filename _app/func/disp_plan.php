<?php
class appFuncDisp_plan
{
    public function __construct()
    {
    }

    public static function comparison($planid, $tmplFile, $tmplOption = null)
    {
        if ($tmplOption == 'current') {
            $fontColor = "color-white";
            $bgColor = "bg-" . $planid;
        } else {
            $fontColor = "color-dgray";
            $bgColor = "bg-lgray";
        }
        include $tmplFile;
    }

    public static function infoCol($image, $text, $tmpl)
    {
        include $tmpl;
    }

    public static function flowSection($title, $text, $image, $tmpl)
    {
        include $tmpl;
    }

    public static function option($plan, $option, $tmpl)
    {
        $planId = $plan['id'];
        foreach ($plan['option'] as $optionId) {
            $id = $optionId;
            $name = $option[$optionId]['name'];
            $price = 0;
            $priceType = null;
            $summary = $option[$optionId]['summary'];
            $addComment = null;
            if (isset($plan['optionAddComment'][$optionId])) {
                $addComment = $plan['optionAddComment'][$optionId];
            }
            include $tmpl;
        }
    }

    public static function addOption($plan, $option, $tmpl)
    {
        $planId = $plan['id'];
        foreach ($plan['addOption'] as $optionId) {
            $id = $optionId;
            $name = $option[$optionId]['name'];
            $price = 0;
            $priceType = null;
            $summary = $option[$optionId]['summary'];
            $addComment = null;
            if (isset($plan['addOptionAddComment'][$optionId])) {
                $addComment = $plan['addOptionAddComment'][$optionId];
            }
            if (isset($option[$optionId]['priceZei'])) {
                $price = $option[$optionId]['priceZei'];
                $priceType = $option[$optionId]['priceType'];
            }
            include $tmpl;
        }
    }

    public static function addOptionPrint($plan, $option, $tmpl)
    {
        $planId = $plan['id'];
        foreach ($plan['addOptionPrint'] as $optionId) {
            $id = $optionId;
            $name = $option[$optionId]['name'];
            $price = 0;
            $priceType = null;
            $summary = $option[$optionId]['summary'];
            $addComment = null;
            include $tmpl;
        }
    }

    public static function enshrined($configEnshrined, $planEnshrined)
    {
        $int = 0;
        $count = count($planEnshrined);
        $result = "";
        foreach ($planEnshrined as $value) {
            if ($value === end($planEnshrined)) {
                $result .= $configEnshrined[$value]['name'];
                break;
            } else {
                $result .= $configEnshrined[$value]['name'] . '／';
                $int += 1;
            }
        }
        echo $result;
    }
}
