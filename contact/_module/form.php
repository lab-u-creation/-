<?php
/*フォームの入力項目*/
$name = "name[]"; //【必須】名前...苗字と名前で二つ入力する
$nameKana = "name_kana[]"; //【必須】フリガナ...苗字と名前で二つ入力する
$address = "address[]"; //【必須】住所...郵便番号、都道府県、市区町村、番地・建物名の4つ入力フォームが存在
$secretCheck = "secret"; //葬儀社からとわからない封筒希望の有無
$tel = "tel"; //【必須】電話番号
$status = "status"; //【必須】状況
$telhope = "telhope"; //電話での無料相談の有無
$telday = "telday"; //電話での無料相談の希望日
$teltime = "teltime[]"; //電話での無料相談の希望時間

$agreement = "agreement"; //【必須】個人情報の取り扱いに同意...メールでは送信されない
?>

<form id="form-contact" class="container p-0 mb-5" method="post" action="confirm">
  <table class="contact w-100">
    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">お名前</div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters">
          <div class="col-12 col-sm-6 mb-2 mb-lg-0 pr-sm-2">
            <input name="<?php echo $name; ?>" type="text" maxlength="20" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="例）都民" data-valid-input required>
          </div>
          <div class="col-12 col-sm-6 pl-sm-2">
            <input name="<?php echo $name; ?>" type="text" maxlength="20" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="例）太郎" data-valid-input required>
          </div>
        </div>
      </td>
    </tr>

    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">フリガナ</div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters">
          <div class="col-12 col-sm-6 mb-2 mb-lg-0 pr-sm-2">
            <input name="<?php echo $nameKana; ?>" type="text" maxlength="20" data-valid-input="kana" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="例）トミン" required>
          </div>
          <div class="col-12 col-sm-6 pl-sm-2">
            <input name="<?php echo $nameKana; ?>" type="text" maxlength="20" data-valid-input="kana" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="例）タロウ" required>
          </div>
        </div>
      </td>
    </tr>

    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">ご住所</div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="">
          <div class="pb-1">郵便番号</div>
          <div class="row no-gutters">
            <div class="col-5 col-lg-5 pr-2">
              <input name="<?php echo $address; ?>" type="text" maxlength="10" data-valid-input="num" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="123-4567" required>
            </div>
          </div>
        </div>

        <div>
          <div class="pt-3 pb-1">都道府県</div>
          <div class="row no-gutters">
            <div class="col-12">
              <select name="<?php echo $address; ?>" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3 color-dgray">
                <option value="北海道">北海道</option>
                <option value="青森県">青森県</option>
                <option value="岩手県">岩手県</option>
                <option value="宮城県">宮城県</option>
                <option value="秋田県">秋田県</option>
                <option value="山形県">山形県</option>
                <option value="福島県">福島県</option>
                <option value="茨城県">茨城県</option>
                <option value="栃木県">栃木県</option>
                <option value="群馬県">群馬県</option>
                <option value="埼玉県">埼玉県</option>
                <option value="千葉県">千葉県</option>
                <option value="東京都" selected>東京都</option>
                <option value="神奈川県">神奈川県</option>
                <option value="新潟県">新潟県</option>
                <option value="富山県">富山県</option>
                <option value="石川県">石川県</option>
                <option value="福井県">福井県</option>
                <option value="山梨県">山梨県</option>
                <option value="長野県">長野県</option>
                <option value="岐阜県">岐阜県</option>
                <option value="静岡県">静岡県</option>
                <option value="愛知県">愛知県</option>
                <option value="三重県">三重県</option>
                <option value="滋賀県">滋賀県</option>
                <option value="京都府">京都府</option>
                <option value="大阪府">大阪府</option>
                <option value="兵庫県">兵庫県</option>
                <option value="奈良県">奈良県</option>
                <option value="和歌山県">和歌山県</option>
                <option value="鳥取県">鳥取県</option>
                <option value="島根県">島根県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
                <option value="山口県">山口県</option>
                <option value="徳島県">徳島県</option>
                <option value="香川県">香川県</option>
                <option value="愛媛県">愛媛県</option>
                <option value="高知県">高知県</option>
                <option value="福岡県">福岡県</option>
                <option value="佐賀県">佐賀県</option>
                <option value="長崎県">長崎県</option>
                <option value="熊本県">熊本県</option>
                <option value="大分県">大分県</option>
                <option value="宮崎県">宮崎県</option>
                <option value="鹿児島県">鹿児島県</option>
                <option value="沖縄県">沖縄県</option>
              </select>
            </div>
          </div>
        </div>

        <div>
          <div class="pt-3 pb-1">市区町村</div>
          <div class="row no-gutters">
            <div class="col-12">
              <input name="<?php echo $address; ?>" type="text" maxlength="10" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="千代田区千代田" data-valid-input required>
            </div>
          </div>
        </div>

        <div>
          <div class="pt-3 pb-1">番地・建物名</div>
          <div class="row no-gutters">
            <div class="col-12">
              <input name="<?php echo $address; ?>" type="text" maxlength="80" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="１-１-１都民マンション101号" data-valid-input required>
            </div>
          </div>
        </div>
      </td>
    </tr>

    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">資料の封筒について</div>
          <div>
            <div class="w-50px bg-gray rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-dgray font-size-1">任意</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters">
          <div class="col-12">
            <input name="<?php echo $secretCheck; ?>" type="checkbox" id="<?php echo $secretCheck; ?>" value="お葬式とはわからない封筒">
            <label for="<?php echo $secretCheck; ?>" class="checkbox01 font-size-1_2">お葬式とはわからない封筒</label>
          </div>
        </div>
      </td>
    </tr>

    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">電話番号<span class="font-size-1 font-size-md-0_8 font-size-lg-1">（半角数字）</span></div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters">
          <div class="col-12">
            <input name="<?php echo $tel; ?>" type="text" maxlength="20" data-valid-input="num" class="w-100 border bg-grayblue rounded font-size-1 h-50px pr-3 pl-3" placeholder="090-1234-5678" required>
          </div>
        </div>
      </td>
    </tr>

    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">現在のご状況</div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="radio01" name="<?php echo $status; ?>" value="すでにご逝去">
            <label for="radio01" class="radio02 font-size-1_2 line-height-1">すでにご逝去</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="radio02" name="<?php echo $status; ?>" value="ご危篤">
            <label for="radio02" class="radio02 font-size-1_2 line-height-1">ご危篤</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="radio03" name="<?php echo $status; ?>" value="療養中">
            <label for="radio03" class="radio02 font-size-1_2 line-height-1">療養中</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="radio04" name="<?php echo $status; ?>" value="ご健在" required>
            <label for="radio04" class="radio02 font-size-1_2 line-height-1">ご健在</label>
          </div>
        </div>
      </td>
    </tr>

    <tr class="border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">電話での<br class="d-none d-md-block d-lg-none">無料相談を希望</div>
          <div>
            <div class="w-50px bg-gray rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-dgray font-size-1">任意</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">

        <div class="row no-gutters align-items-center">
          <div class="row no-gutters align-items-center justify-content-between">
            <div class="col-12 pb-2 pt-lg-2">
              <input type="checkbox" id="telhope" name="<?php echo $telhope; ?>" value="希望する" data-toggle-required='["<?php echo $telday; ?>","<?php echo $teltime; ?>"]' data-toggle-elem='["#telday-tr","#teltime-tr"]'>
              <label for="telhope" class="checkbox01 font-size-1_2">希望する</label>
            </div>
          </div>
        </div>

        <div class="font-size-1 border-orange p-3 pl-lg-4 pr-lg-4 mb-2 mb-md-0">
          ご希望頂いた日程・時間帯にこちらからお電話をさせて頂きます。<br>
          お申込み頂いた順番でご対応させて頂きますので混雑により2営業日程度かかる場合がございます。<br>
          お急ぎの方はお手数ですがコールセンターまでお電話下さい。<br>
          <span class="font-oswald font-weight-bold font-size-2 font-size-md-1_6 font-size-lg-1_7 color-dgray"><i class="fa fa-phone mr-2" aria-hidden="true"></i>0120−922−720</span><br class="d-sm-none"><span class="font-size-0_8 font-size-lg-1">（相談無料・365日24時間対応）</span>
        </div>

      </td>
    </tr>

    <tr id="telday-tr" class="d-none border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">希望日程</div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="day01" name="<?php echo $telday; ?>" value="平日">
            <label for="day01" class="radio02 font-size-1_2 line-height-1">平日</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="day02" name="<?php echo $telday; ?>" value="土日祝日">
            <label for="day02" class="radio02 font-size-1_2 line-height-1">土日祝日</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="radio" id="day03" name="<?php echo $telday; ?>" value="希望なし">
            <label for="day03" class="radio02 font-size-1_2 line-height-1">希望なし</label>
          </div>
        </div>
      </td>
    </tr>

    <tr id="teltime-tr" class="d-none border-sm">
      <th class="bg-base col-12 col-md-4 font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="font-size-1_2 font-size-md-1 font-size-lg-1_2 font-weight-bold">希望時間帯</div>
          <div>
            <div class="w-50px bg-pink rounded text-center pt-1 pb-1 pl-2 pr-2">
              <span class="color-white font-size-1">必須</span>
            </div>
          </div>
        </div>
      </th>
      <td class="font-size-1_2 font-size-md-1 font-size-lg-1_2 p-3 pt-lg-4 pb-lg-4">
        <div class="row no-gutters align-items-center justify-content-between">
          <div class="col-12 pb-2 pt-lg-2">
            <input type="checkbox" id="tel01" name="<?php echo $teltime; ?>" value="9～12時">
            <label for="tel01" class="checkbox01 font-size-1_2">9～12時</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="checkbox" id="tel02" name="<?php echo $teltime; ?>" value="12～15時">
            <label for="tel02" class="checkbox01 font-size-1_2">12～15時</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="checkbox" id="tel03" name="<?php echo $teltime; ?>" value="15～18時">
            <label for="tel03" class="checkbox01 font-size-1_2">15～18時</label>
          </div>
          <div class="col-12 pb-2 pt-lg-2">
            <input type="checkbox" id="tel04" name="<?php echo $teltime; ?>" value="指定なし（9～18時）">
            <label for="tel04" class="checkbox01 font-size-1_2">指定なし（9～18時）</label>
          </div>
        </div>
      </td>
    </tr>

  </table>

  <div class="container pt-5 pb-2">
    <div class="border w-lg-80per m-auto h-140px" style="overflow-y: scroll;">
      <div class="p-3 p-md-4">
        <div class="font-size-0_8 font-size-lg-0_9 color-dlgray">
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">【個人情報の取り扱い】</span><br>
          都民のお葬式（以下、「本サービス」といいます。）のサービスご利用に伴い、本サービスが取得するお客様の個人情報は以下の通り取り扱います。<br>
          以下の内容にご同意いただいてから、お客様の個人情報をご提供いただきますようお願いいたします。<br>
          尚、個人情報を提供するか否かは、お客様の任意によるものです。ただし、必要な情報をご提供いただけない場合、各種サービス等が適切にご提供できない場合がございますので、ご了承ください。<br>
          <br>
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">1．個人情報の定義</span><br>
          個人情報とは、個人に関する情報であり、氏名、性別、生年月日、ご住所、電話番号、電子メールアドレス等、特定の個人を識別でき得る情報を言います。<br>
          <br>
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">2．利用目的</span><br>
          当サービスは、収集した個人情報について、以下の目的のために利用いたします。<br>
          ①葬儀の手配及び寺院手配などのそれらに関連、付随する各種サービスを提供するため。<br>
          ②資料送付や見積書発行送付、請求書発行送付、アンケート、お支払い等の①の目的に関連するサービス・手続き・事務処理を遂行するため<br>
          ③本サービスを向上するための市場調査や商品開発・改善のため<br>
          ④お客様のご相談・お問い合わせに対応するため<br>
          ⑤災害などの緊急事態が発生した際の連絡・対応のため<br>
          ⑥お客様に適したサービス等をご提供するため<br>
          ⑦その他、上記に付随する目的のため<br>
          <br>
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">3．第三者提供</span><br>
          本サービスは、以下の場合を除いて、個人情報を第三者に提供することは致しません。<br>
          ①法令に基づく場合<br>
          ②人の生命・身体・財産を保護するために必要で、本人から同意を得ることが難しい場合<br>
          ③公衆衛生の向上・児童の健全な育成のために必要で、本人から同意を得ることが難しい場合<br>
          ④国の機関や地方公共団体、その委託者などによる法令事務の遂行にあたって協力する必要<br>
          ⑤明示した利用目的の達成に必要な範囲内で、個人データの取扱いの全部又は一部を第三者に委託する場合、もしくは、第三者と連携してサービス提供を行う場合<br>
          ⑥お客様の同意がある場合<br>
          <br>
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">4．個人情報の管理</span><br>
          本サービスは、個人情報の漏洩、滅失、毀損等を防止するために、十分な安全保護に努め、また、個人情報を正確に、また最新なものに保つよう、お預かりした個人情報の適切な管理を行います。<br>
          また、利用する必要がなくなったときは、当該個人情報を遅滞なく消去するように努めます。<br>
          明示した利用目的の達成に必要な範囲内で、個人情報を第三者に委託する場合、当該委託先に機密保持義務を課すなどして個人情報の管理に努めます。<br>
          <br>
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">5．個人情報の保護</span><br>
          本サービスの各種フォームは、SSL（インターネット上のデータを第３者から読み取れないように通信を暗号化する技術）で保護されています。<br>
          <br>
          <span class="font-size-0_9 font-size-lg-1 font-weight-bold color-dgray mb-1">6．個人情報の開示、訂正または利用停止</span><br>
          本サービスは、お客様ご本人からの個人情報の開示、利用目的の通知、開示対象個人情報の内容が事実に反する場合等における訂正等、利用停止等及び第三者提供の停止（以下「開示等」といいます）のご請求があった場合には<br>
          お客様ご本人からの請求であることを確認の上、遅滞なく対応いたします。ただし、個人情報保護法その他の法令により、本サービスが開示等の義務を負わない場合は、この限りではありません。<br>
          尚、開示請求と利用目的の通知につきましては、手数料をいただく場合がございますので、あらかじめご了承ください。<br>
          <br>
          以上
        </div>
      </div>
    </div>
    <div class="pt-3 pb-2 text-center">
      <input type="checkbox" id="check-agreement" name="<?php echo $agreement; ?>" data-disabled="#form-submit">
      <label for="check-agreement" class="checkbox01 font-size-lg-1_2"><span class="position-relative">個人情報の取り扱いに同意します</span></label>
    </div>

    <div class="pt-3 pb-2">
      <button data-submit id="form-submit" type="button" disabled class="btn-disabled w-100 mw-400px m-auto d-block rounded border-0 bg-orange color-white font-weight-bold font-size-1_6 pt-3 pb-3">内容確認画面へ</button>
    </div>
  </div>
</form>