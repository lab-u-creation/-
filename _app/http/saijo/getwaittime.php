<?php
include_once '../_app/base.php';
class appHttpSaijoGetwaittime
{
    public static $waitTime = 0;
    public static $area = "default";
    public static $city = "default";
    public static $storageCsvFile = '../_app/storage/area.csv';

    function getCsvArray($csvFile): array
    {
        $getCsvFile = file_get_contents($csvFile);
        $getCsvFile = str_replace('","', '/', $getCsvFile);
        $getCsvFile = str_replace('"', '', $getCsvFile);
        $explodeCsv = explode("\n", $getCsvFile);
        $array = [];
        $resultArray = [];
        foreach ($explodeCsv as $key => $value) {
            $array[] = explode('/', $value);
        }
        return $array;
    }

    function clateStorageCsv($configArea, $storageCsvFile)
    {
        $nowDate = date("YmdHi");
        $storageCsvFileUpdate = date("YmdHi", filemtime($storageCsvFile));
        $result = "";
        if ($nowDate - $storageCsvFileUpdate > 1) {
            foreach ($configArea as $key => $value) {
                $waitTime = intval($value[3]);
                $waitTime = $waitTime + mt_rand(0, 15);
                $waitTime = round($waitTime);
                $result .= '"' . $value[0] . '",';
                $result .= '"' . $value[1] . '",';
                $result .= '"' . $value[2] . '",';
                $result .= '"' . $waitTime . '"';
                $result .= "\n";
            }
            $fp = fopen($storageCsvFile, "w");
            fwrite($fp, $result);
            fclose($fp);
        }
    }

    function getWaitTime($storageCsvFile, $area, $city): array
    {
        $result = "---";
        $array = self::getCsvArray($storageCsvFile);
        foreach ($array as $key => $value) {
            if (isset($value[1])) {
                if ($value[1] == $area && $value[2] == $city) {
                    $result = $value[3];
                    break;
                }
            }
        }
        return array("time" => $result);
    }
}

appHttpSaijoGetwaittime::clateStorageCsv(
    appConfigArea::tokyo, //突貫対応
    appHttpSaijoGetwaittime::$storageCsvFile
);
if (isset($_GET['area']) && isset($_GET['city'])) {
    appHttpSaijoGetwaittime::$area = urldecode($_GET['area']);
    appHttpSaijoGetwaittime::$city = urldecode($_GET['city']);
}
appHttpSaijoGetwaittime::$waitTime = appHttpSaijoGetwaittime::getWaitTime(
    appHttpSaijoGetwaittime::$storageCsvFile,
    appHttpSaijoGetwaittime::$area,
    appHttpSaijoGetwaittime::$city
);

echo json_encode(appHttpSaijoGetwaittime::$waitTime);
