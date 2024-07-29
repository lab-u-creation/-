<?php
/*======================================================================

ページング

======================================================================*/
class appFuncPager
{
    const pagerType_path = 'path';
    const pagerType_query = 'query';
    const int_maxDispPagerCount = 10; //ページネーションの最大描画数

    //ページングを描画
    public static function disp(
        $pagerType = self::pagerType_path,
        $baseUri,
        $int_currentPageNum, //現在のページ番号
        $int_resultCount, //DBから取得した記事の総数
        $int_dispArticleCount //ページ内に表示する記事の数
    ) {
        $html = ""; //戻り値
        $int_pageNum = 0; //ページネーションの初期値
        $int_dispPagerCount = 0; //ページネーションの描画数
        $link = "";
        $stylesheet = "";

        //1.ページネーションの描画数を定義
        $int_dispPagerCount = $int_resultCount / $int_dispArticleCount;
        if (is_float($int_dispPagerCount)) {
            $int_dispPagerCount = ceil($int_dispPagerCount);
        }

        //2.ページネーションの開始数値を設定
        if ($int_currentPageNum == 0) {
            $int_currentPageNum = 1;
        }
        if ($int_currentPageNum <= self::int_maxDispPagerCount / 2) {
            $int_pageNum = 1;
        } else if ($int_currentPageNum > self::int_maxDispPagerCount / 2) {
            if ($int_dispPagerCount < self::int_maxDispPagerCount) {
                $int_pageNum = 1;
            } else if ($int_currentPageNum <= $int_dispPagerCount - self::int_maxDispPagerCount + 2) {
                $int_pageNum = $int_currentPageNum - 2;
            } else {
                $int_pageNum = $int_dispPagerCount - self::int_maxDispPagerCount + 1;
            }
        }

        //3.繰り返し処理：$html_center作成
        $html_center = "";
        for ($i = 0; $i < self::int_maxDispPagerCount; $i++) {
            //分岐1：現在選択中のページか否か（選択中のページにはCSS適用）
            if ($int_currentPageNum == $int_pageNum) {
                $stylesheet = 'active';
            } else {
                $stylesheet = 'd-none d-md-block';
            }
            $link = self::link($baseUri, $int_pageNum);
            //HTML描画
            $html_center .= '<li class="page-item ' . $stylesheet . '">';
            $html_center .= '<a class="page-link color-dgray" href="' . $link . '">';
            $html_center .= $int_pageNum;
            $html_center .= '</a></li>';
            //次のページ番号設定
            $int_pageNum += 1;
            //ページ番号が$int_dispPagerCountを超えたら描画終了
            if ($int_pageNum > $int_dispPagerCount) {
                break;
            }
        }

        //4.HTML作成
        $html_left = self::left($baseUri, $pagerType, $int_currentPageNum, $int_dispPagerCount);
        $html_right = self::right($baseUri, $pagerType, $int_currentPageNum, $int_dispPagerCount);
        if ($int_dispPagerCount > 1) {
            $html = <<<EOF
            <nav aria-label="Page navigation example" class="pdt-large pdb-large">
            <ul class="pagination justify-content-center color-gray mx-auto">
            {$html_left}
            {$html_center}
            {$html_right}
            </ul>
            </nav>
            EOF;
        } else {
            $html = '<!--PAGER-->';
        }
        echo $html;
    }

    private function link($baseUri, $int)
    {
        $result = $baseUri . $int;
        return $result;
    }

    private function left($baseUri, $pagerType, $int_currentPageNum)
    {
        //$html_left 作成
        $html_left = "";
        $int_pageNum_back = 1;
        if ($int_currentPageNum != 1) {
            $int_pageNum_back = $int_currentPageNum - 1;
        }
        $link = self::link($baseUri, $int_pageNum_back);
        if ($int_currentPageNum != 1) {
            $html_left .= '<li class="page-item">';
            $html_left .= '<a class="page-link color-dgray" href="' . $link . '">';
        } else {
            $html_left .= '<li class="page-item disabled">';
            $html_left .= '<span class="page-link">';
        }
        $html_left .= '<i class="fa fa-caret-left" aria-hidden="true"></i>';
        if ($int_currentPageNum != 1) {
            $html_left .= '</a></li>';
        } else {
            $html_left .= '</span></li>';
        }
        return  $html_left;
    }

    private function right($baseUri, $pagerType, $int_currentPageNum, $int_dispPagerCount)
    {
        //$html_right 作成
        $html_right = "";
        $int_pageNum_next = 1;
        if ($int_currentPageNum < $int_dispPagerCount) {
            $int_pageNum_next = $int_currentPageNum + 1;
        }
        $link = self::link($baseUri, $int_pageNum_next);

        if ($int_currentPageNum < $int_dispPagerCount) {
            $html_right .= '<li class="page-item">';
            $html_right .= '<a class="page-link color-dgray" href="' . $link . '">';
        } else {
            $html_right .= '<li class="page-item disabled">';
            $html_right .= '<span class="page-link">';
        }
        $html_right .= '<i class="fa fa-caret-right" aria-hidden="true"></i>';
        if ($int_currentPageNum < $int_dispPagerCount) {
            $html_right .= '</a></li>';
        } else {
            $html_right .= '</span></li>';
        }
        return $html_right;
    }
}
