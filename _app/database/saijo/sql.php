<?php
class appDatabaseSaijoSql
{
    public static $count;
    public static $list;
    public static $detail;
}

appDatabaseSaijoSql::$count = <<<EOF
SELECT
count(*) as count
FROM
saijo
WHERE
disp=1
EOF;

appDatabaseSaijoSql::$list = <<<EOF
SELECT
*
FROM
saijo
WHERE
disp=1
EOF;

appDatabaseSaijoSql::$detail = <<<EOF
SELECT
*
FROM
saijo
WHERE
id=:id
and disp=1
EOF;
