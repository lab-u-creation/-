<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_plan.php';
appConfigPage::$tmpl = 'form';
appConfigPage::$title = appConfigSite::sitemap['contact']['title'];
appConfigPage::$css = <<<EOF
<style>
h1,h2,h4{font-size:1.7rem;}
.btn-disabled{opacity:0.25;}
.bg-arch{
  width:120%;
  min-height: 100%;
  background:#faf7e6;
  border-radius: 1300px 1300px 0 0 / 300px 300px 0 0;
  top:4%;
  right:-10%;
}
.pt-10per{padding-top:10%;}
@media (min-width:720px) {
  .bg-arch{
    width:45%;
    min-height: 120%;
    background:#f7e762;
    border-radius: 300px 0 0 300px / 600px 0 0 600px;
    top:-10%;
    right:0;
  }
  .pt-10per{padding-top:0}
}
input:-webkit-autofill {
  box-shadow: 0 0 0 1000px #d4ebff inset;
}
</style>
EOF;
appConfigPage::$js = <<<EOF

EOF;
?>

<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<section id="keyvisual">
  <header class="bg-base color-dgray w-100 overflow-hidden position-relative mb-4">
    <div class="bg-arch position-absolute"></div>
    <div class="container position-relative">
      <picture>
        <source media="(min-width:720px)" srcset="/assets/img/contact/visual_contact_l.png?20231016">
        <img src="/assets/img/contact/visual_contact.png?20231016" alt="都民のお葬式についてのパンフレットを無料で迅速にお届けいたします" class="w-100 d-block mx-auto mb-3 mt-sm-3 mb-lg-4 pt-10per">
      </picture>
    </div>
  </header>
</section>

<section id="sec1" class="container pt-sm-4 pb-3">
  <div class="container p-0 pl-md-4 pr-md-4">
    <div class="border-sm-contact rounded p-sm-3 pl-sm-4 pr-sm-4 pl-md-5 pr-md-5">
      <div class="row no-gutters align-items-center mb-md-1 mt-lg-2 mb-lg-3">
        <div class="col-auto">
          <h2 class="color-pink font-size-2 font-size-lg-2_4 font-weight-bold">
            <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
            <span class="font-size-1_6 font-size-lg-2">お急ぎの方へ</span>
          </h2>
          <div class="font-size-1 font-size-lg-1_2">
            お電話での資料請求・ご相談も承っております。<br class="d-lg-none">お客様のご要望に合わせたお見積りもご案内が可能です。<br class="d-none d-sm-block">ご不安なことがあればいつでもお電話ください。</div>
        </div>
      </div>

      <div class="mt-2 pb-md-2">
        <picture>
          <source media="(min-width:720px)" srcset="/assets/img/bnr_cta_l.png?20230911">
          <img src="/assets/img/bnr_cta.png?20230911" alt="電話番号：<?php echo appConfigSite::tel; ?>" class="w-100 d-block mx-auto">
        </picture>
      </div>
    </div>
  </div>
</section>

<section id="sec2" class="container pt-4 pb-3">
  <header class="pt-5">
    <h4 class="color-dgray font-size-md-1_6 font-size-lg-2 text-center font-weight-bold mb-3">フォームから資料請求</h4>
  </header>

  <div class="pt-3 pb-3">
    <div class="row no-gutters justify-content-center">
      <div class="col-auto position-relative">
        <div class="d-block">
          <div class="step-number position-relative text-center color-dgray bg-dyellow">
            <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>1</p>
          </div>
          <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">情報入力</p>
        </div>
      </div>
      <div class="col-1 position-relative">
        <div class="step-line bg-dyellow"></div>
      </div>
      <div class="col-auto position-relative">
        <div class="d-block">
          <div class="step-number position-relative text-center color-dgray bg-lgray">
            <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>2</p>
          </div>
          <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">内容確認</p>
        </div>
      </div>
      <div class="col-1 position-relative">
        <div class="step-line bg-lgray"></div>
      </div>
      <div class="col-auto position-relative">
        <div class="d-block">
          <div class="step-number position-relative text-center color-dgray bg-lgray">
            <p class="step-number-inner position-absolute font-weight-bold font-size-1_6 font-size-sm-1_8 font-size-lg-2 line-height-1 p-0 m-0 pb-lg-2"><span class="font-size-1_2">STEP</span><br>3</p>
          </div>
          <p class="text-center font-weight-bold font-size-lg-1_2 pt-2">送信完了</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="sec3" class="pb-5">
  <?php require_once './_module/form.php'; ?>
</section>

<?php require_once '../_tmpl/l-footer.php'; ?>

<?php
/*
入力フォームを制御するJavascript
*/
?>

<script>
  const elem = {
    form: '#form-contact',
    formSubmit: '#form-submit',
    pageHeader: '#page-header'
  };
  const data = {
    toggleElem: '[data-toggle-elem]',
    toggleRequired: '[data-toggle-required]',
    btnActive: '[data-disabled]',
    submit: '[data-submit]',
    validText: '[data-valid-text]',
    validInput: '[data-valid-input]',
    optional: '[data-optional]'
  };
  const cssClass = {
    dNone: 'd-none',
    btnDisabled: 'btn-disabled',
    transActive: 'is-trans-active'
  };

  <?php /*関数：data属性の名称取得*/ ?>
  const getDataName = function(str, dataHeader = true) {
    if (dataHeader == true) {
      str = str.replace('data-', '');
    }
    str = str.replace('[', '');
    str = str.replace(']', '');
    return str;
  }

  <?php /*関数：data属性の値を取得*/ ?>
  const dataParse = function(clickElem, selecter) {
    const dataName = getDataName(selecter);
    const result = $(clickElem).data(dataName);
    return result;
  }

  <?php /*関数：フォームの入力規制(num...数値とハイフン/kana...カタカナのみ）*/ ?>
  const formValidator = function(input) {
    const validatorType = dataParse(input, data.validInput);
    let inputVal = $(input).val();
    switch (validatorType) {
      case "num":
        str = inputVal.replace(/[０-９]/g, function(s) {
          return String.fromCharCode(s.charCodeAt(0) - 65248);
        });
        str = str.replace(/[^0-9\-]/g, '');
        break;
      case "kana":
        str = inputVal.replace(/[ぁ-ん]/g, function(s) {
          return String.fromCharCode(s.charCodeAt(0) + 0x60);
        });
        str = str.replace(/[^ァ-ンヴー\-]/g, "");
        break;
      default:
        str = inputVal;
        if (inputVal.trim() == '') {
          str = '';
        }
        break;
    }
    $(input).val(str);
  }

  <?php /*関数：入力フォームの背景色変更*/ ?>
  const formColor = function(input, bool = null) {
    const bgColor = 'bg-lblue'; //backGroundColorCSS
    const inputValue = $(input).val();
    if (inputValue != '') {
      $(input).addClass(bgColor);
    } else {
      $(input).removeClass(bgColor);
    }
    if (bool === true) {
      $(input).addClass(bgColor);
    } else if (bool === false) {
      $(input).removeClass(bgColor);
    }
  }

  <?php /*関数：要素の表示・非表示*/ ?>
  const toggleElem = function(clickelem) {
    const target = dataParse(clickelem, data.toggleElem);
    const check = $(clickelem).prop("checked");
    target.forEach(function(elem) {
      if (check === true) {
        $(elem).removeClass(cssClass.dNone);
      } else {
        $(elem).addClass(cssClass.dNone);
      }
    });
  }

  <?php /*関数：必須・任意の切り替え*/ ?>
  const toggleRequired = function(clickelem) {
    const target = dataParse(clickelem, data.toggleRequired);
    const check = $(clickelem).prop("checked");
    target.forEach(function(input) {
      let inputElem = '[name="' + input + '"]';
      if (check === true) {
        $(elem.form).find(inputElem).eq(0).attr('required', true);
      } else {
        $(elem.form).find(inputElem).eq(0).attr('required', false);
        $(elem.form).find(inputElem).prop("checked", false);
      }
    });
  }

  <?php /*関数：「個人情報の取り扱いに同意します」チェックボックス*/ ?>
  const btnActive = function(input) {
    const btnId = dataParse(input, data.btnActive);
    const check = $(input).prop("checked");
    if (check === true) {
      $(btnId).attr('disabled', false).removeClass(cssClass.btnDisabled);
    } else {
      $(btnId).attr('disabled', true).addClass(cssClass.btnDisabled);
    }
  }

  <?php /*関数：フォームサブミット時の処理*/ ?>
  const formSubmit = function(formId) {
    formSubmitErrorMsgRemove(formId);
    const errorCount = formSubmitErrorCheck(formId);
    if (errorCount > 0) {
      return formSubmitPageScroll(formId);
    } else {
      $(formId).submit();
    }
  }

  <?php /*関数：フォームサブミット時...「入力されていません」の文字を一旦全部非表示に*/ ?>
  const formSubmitErrorMsgRemove = function(formId) {
    $(formId).find(data.validText).remove();
  }

  <?php /*関数：フォームサブミット時...入力必須項目に値が入っているか精査*/ ?>
  const formSubmitErrorCheck = function(formId) {
    $(formId).find('input,select').each(function(index) {
      const dom = '<div data-valid-text class="color-pink pt-1 font-size-0_8 trans"><i class="fa fa-exclamation-triangle pr-1" aria-hidden="true"></i>入力されていません</div>';
      const required = $(this).attr('required');
      const inputName = $(this).attr('name');
      const inputType = $(this).attr('type');
      if (typeof required != 'undefined') {
        switch (inputType) {
          case "radio":
          case "checkbox":
            let checkLength = $('[name="' + inputName + '"]:checked').length;
            if (checkLength === 0) {
              $(this).closest('td').append(dom);
            }
            break;
          default:
            let val = $(this).val();
            if (val == "") {
              $(this).after(dom);
            }
            break;
        }
      }
    });
    return $(formId).find(data.validText).length;
  }

  <?php /*関数：フォームサブミット時...入力必須項目に値が入ってない項目があれば、その場所までスクロール*/ ?>
  const formSubmitPageScroll = function(formId) {
    const headerHeight = $(elem.pageHeader).height();
    let offsetTop = $(formId).find(data.validText).eq(0).offset().top;
    offsetTop -= headerHeight * 3;
    $("html").animate({
      scrollTop: offsetTop
    }, 400, "swing", function() {
      $(formId).find(data.validText).addClass(cssClass.transActive);
    });
  }

  <?php /*イベント処理：セレクトメニューの変更で発火*/ ?>
  $(elem.form).on('focusin', 'select', function() {
    formColor(this, false);
  });
  $(elem.form).on('focusout', 'select', function() {
    formColor(this, true);
  });

  <?php /*イベント処理：フォームの変更で発火*/ ?>
  $(elem.form).on('change', 'input', function() {
    formValidator(this);
    formColor(this);
  });

  <?php /*イベント処理：要素の表示・非表示*/ ?>
  $(elem.form).on('change', data.toggleElem, function() {
    toggleElem(this);
  });

  <?php /*イベント処理：必須・任意の切り替え*/ ?>
  $(elem.form).on('change', data.toggleRequired, function() {
    toggleRequired(this);
  });

  <?php /*イベント処理：「個人情報の取り扱いに同意します」の変更で発火*/ ?>
  $(elem.form).on('change', data.btnActive, function() {
    btnActive(this);
  });

  <?php /*イベント処理：フォームの送信で発火*/ ?>
  $(elem.form).on('click', data.submit, function() {
    return formSubmit(elem.form);
  });

  <?php /*ページ閲覧時に発火する処理*/ ?>
  window.addEventListener('pageshow', function(event) {

    $(elem.form).find(data.btnActive).each(function(index) {
      btnActive(this);
    });

    $(elem.form).find('input,select').each(function(index) {
      formColor(this);
    });

    $(elem.form).find(data.toggleElem).each(function(index) {
      toggleElem(this);
    });

    $(elem.form).find(data.toggleRequired).each(function(index) {
      toggleRequired(this);
    });
  });
</script>
<?php require_once '../_tmpl/footer.php'; ?>