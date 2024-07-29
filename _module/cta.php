<style>
.bg-contrast-under{
  background: linear-gradient(transparent 70%, #FFF600 70%,#FFF600 100%,transparent 100%);
}
.dot{
  background-image : linear-gradient(to right, #c1c1c1 3px, transparent 3px);
  background-size: 8px 1px;
  background-repeat: repeat-x;
  background-position: left bottom;
  padding-left: 1.5rem;
}
.text-shadow{
  text-shadow :1px 1px 4px #fff, -1px 1px 4px #fff, 1px -1px 4px #fff, -1px -1px 4px #fff;
}
.bg-bnr{
  background-image: url("/assets/img/bg-bnr.png");
  background-position: right top;
  background-repeat: no-repeat;
  background-size: 50%;
}
.list.check-circle li::before{
  color: #d8804e !important;
  font-size:1.2rem;
}
.font-size-5vw{
  font-size: 5vw;
}
@media (min-width:380px) {
  .d-ssm-none{
    display:none !important;
  }
  .d-ssm-block{
    display:block !important;
  }
}

@media (min-width:576px) {
  .font-size-sm-1_5 {
    font-size: 1.5rem;
  }
}
@media (min-width: 992px){
  .bg-bnr{
    background-size: 40%;
  }
  .font-size-lg-2{
    font-size:2rem;
  }
}
</style>

<div class="bg-white">
    <div class="text-center pt-lg-5 pb-2">
      <h2 class="font-size-1_4 font-size-md-1_6 font-size-lg-2 font-weight-bold">
        <span class="bg-contrast-under color-black font-size-lg-2 ml-2 mr-2">業界最安値クラス</span>＆<span class="bg-contrast-under font-size-lg-2 ml-2 mr-2">最高品質</span><br class="d-sm-none">にてお手配致します
      </h2>
    </div>

<aside class="container pr-3 pl-3 pb-2 p-sm-3 pl-lg-4 pr-lg-4">
  <div class="bg-white pb-2">
    <div class="border-gray rounded p-3 p-lg-4 bg-bnr">
      <div class="w-100per w-lg-900px mx-auto pl-md-3 pb-lg-2">
        <h2 class="col-12 col-sm-9 col-md-12 p-0 text-shadow">
            <span class="color-dgray font-size-5vw font-size-sm-1_5 font-size-lg-2 font-weight-bold line-height-1_4">わからない事やご不安なこと、<br class="d-md-none">まずはご相談ください</span>
        </h2>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-9">
                <ul class="list text-shadow pl-0 check-circle mb-0 ml-0 font-size-1 font-size-lg-1_2">
                    <li class="dot line-height-1_2 pt-2 pb-1 mb-2">突然のことで何をすればよいか分からない方</li>
                    <li class="dot line-height-1_2 pt-2 pb-1 mb-2">病院からの移動を急かされている方</li>
                    <li class="dot line-height-1_2 pt-2 pb-1 mb-2">葬儀の費用や内容について確認したい方</li>
                    <li class="dot line-height-1_2 pt-2 pb-1 mb-2">お付き合いのあるお坊さんがおらずお困りの方</li>
                </ul>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-3 mr-lg-4 ml-lg-4">
    <picture>
        <source media="(min-width:768px)" srcset="/assets/img/bnr_cta_l.png?20230911">
        <img src="/assets/img/bnr_cta.png?20230911" alt="電話番号：<?php echo appConfigSite::tel; ?>" class="w-100 d-block mx-auto">
    </picture>
  </div>

  <div class="mt-3 pb-5 mr-lg-4 ml-lg-4">
    <a href="<?php echo appConfigSite::sitemap['contact']['path']; ?>" onClick="gtag('event', 'click', {'event_category':'button','コンバージョン':'資料請求'});">
      <picture>
        <source media="(min-width:768px)" srcset="/assets/img/bnr_contact_l.png?20231004">
        <img src="/assets/img/bnr_contact.png?20231004" alt="資料請求" class="w-100 d-block mx-auto">
      </picture>
    </a>
  </div>


</aside>
</div>
