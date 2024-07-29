<?php
require_once '../_app/base.php';
require_once '../_app/func/disp_voice.php';
require_once '../voice/_database/postdata.php';
appConfigPage::$title = appConfigSite::sitemap['voice']['title'];
appConfigPage::$css = <<<EOF
<style>
#category-voice{
  background :#fdfbf0;
}
.voice_link:hover{
  box-shadow:0 0 0 3px #d8804e;
}
.bg-img{
  background-image: url('/assets/img/voice/bg-voice.png');
  background-position: top 30px center;
  background-size: 750px;
  background-repeat: no-repeat;
  background-blend-mode: multiply;
  padding-bottom: 0 !important;
}
@media (min-width:576px) {
  .bg-img{
    background-position: top 50px right -190px;
    background-size:790px;
  }
}
@media (min-width:992px) {
  .bg-img{
    background-position: top 100px right -100px;
    background-size: 870px;
  }
}

.tab_menu li.selected:nth-child(1) {
	background: #d8804e;
  color:#fff;
}
.tab_menu li.selected:nth-child(2),
.tab_menu li.selected:nth-child(3) {
	background: #b27044;
  color:#fff;
}
.tab_menu li.selected:nth-child(4) {
	background: #6a5496;
  color:#fff;
}
.tab_menu li.selected:nth-child(5) {
	background: #2a4f37;
  color:#fff;
}
.tab_menu li.selected:nth-child(6) {
	background: #1e4164;
  color:#fff;
}
.tab_menu li:hover {
	opacity: 0.8;
}
.tab_menu li{
	flex: 1;
	display: flex;
	justify-content: center;
	align-items: center;
	list-style: none;
	cursor: pointer;
}
.cp_ipselect select {
	cursor: pointer;
	outline: none;
	appearance: none;
}
.select_menu::before {
  content: '';
  width: 10px;
  height: 10px;
  border: 0;
  border-top: solid 2px #c2c2c2;
  border-right: solid 2px #c2c2c2;
  position: absolute;
  bottom: 40%;
  right: 15px;
  transform: rotate(45deg);
}
</style>
EOF;
?>
<?php require_once '../_tmpl/header.php'; ?>
<?php require_once '../_tmpl/l-header.php'; ?>

<div class="pt-3 pt-md-0 border-bottom">
  <?php appFuncDisp::h1(appFuncString::format_textAdd(appConfigPage::$title, 7, '<br class="d-md-none">'), '都民のお葬式ではお客様満足度を大切にお客様からの声を真摯に受け止め、いつでもだれでも安心してご利用頂けるサービスを目指してまいります。'); ?>
</div>

<div class="bg-white">
  <div class="container pt-5 pb-5">

    <div class="pb-4">
      <div class="row no-gutters bg-white align-items-center justify-content-sm-center mb-4">
        <div class="col-auto col-sm-5 col-lg-12">
          <div class="font-size-1_4 font-size-sm-1_2 font-size-md-1_6 text-right text-lg-left pr-3 pl-lg-2 mb-2 mb-sm-0 mb-lg-1">
            <i class="fa fa-search" aria-hidden="true"></i><span class="color-dgray pl-2">プランで絞り込む</span>
          </div>
        </div>

        <div id="menu_pc" class="col-lg-12 d-none d-lg-block">
          <ul class="d-flex tab_menu p-0 m-0">
            <li data-change-item="" class="selected border-orange rounded-pill color-orange text-center pt-2 pb-2 m-2">すべてのプラン</li>
            <?php foreach (appConfigPlan::plan as $value) : ?>
              <li data-change-item="<?php echo $value['id']; ?>" class="border-<?php echo $value['id']; ?> rounded-pill color-<?php echo $value['id']; ?> text-center pt-2 pb-2 m-2"><?php echo $value['name']; ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <div id="menu_sp" class="col-12 col-sm-6 d-lg-none">
          <div class="w-100 overflow-hidden cp_ipselect btn-acd collapsed">
            <select data-change-item class="btn　position-relative select_menu border bg-lgray-gradient w-100 font-size-1_2 p-3">
              <option value="">すべてのプラン</option>
              <?php foreach (appConfigPlan::plan as $value) : ?>
                <option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
    </div>

    <?php appFuncDisp_voice::list(voiceDatabasePostData::data, './_module/index.php'); ?>

  </div>
</div>

<?php require_once '../_tmpl/l-footer.php'; ?>
<script>
  $(function() {
    const elem = {
      pc: '#menu_pc',
      sp: '#menu_sp'
    }
    const data = {
      changeItem: '[data-change-item]',
      item: '[data-item]'
    }
    const css = {
      selected: 'selected',
    }

    const navChangePC = function(changePlanId) {
      $(elem.pc).find(data.changeItem).removeClass(css.selected);
      $(elem.pc).find(data.changeItem).each(function(index) {
        const elemPlanId = $(this).data('change-item');
        if (changePlanId === elemPlanId) {
          $(this).addClass(css.selected);
          return false;
        }
      });
    }

    const navChangeSP = function(changePlanId) {
      $(elem.sp).find("option[value='" + changePlanId + "']").prop('selected', true);
    }

    const planFilter = function(elem, changePlanId) {
      $(data.item).fadeOut('50');
      setTimeout(function() {
        if (changePlanId === "") {
          /*plan allDisp*/
          $(data.item).fadeIn('100');
        } else {
          /*plan select*/
          $(data.item).each(function() {
            const elemPlanId = $(this).data('item');
            if (changePlanId === elemPlanId) {
              $(this).fadeIn('100');
            }
          });
          echo.init();
        }
      }, 200);
    }

    $(elem.pc).find(data.changeItem).on('click', function() {
      const changePlanId = $(this).data('change-item');
      navChangePC(changePlanId);
      navChangeSP(changePlanId);
      return planFilter(this, changePlanId);
    });

    $(elem.sp).find(data.changeItem).on('change', function() {
      const changePlanId = $(this).val();
      navChangePC(changePlanId);
      return planFilter(this, changePlanId);
    });

  });
</script>
<?php require_once '../_tmpl/footer.php'; ?>