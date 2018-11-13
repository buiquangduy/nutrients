<template>
    <div class="news container-fluid">
        <div class="row content">
            <p class="text-new col-12">{{ $t("label_home.notice") }}</p>
            <div class="col-12">
                <ul>
                    <li class="row">
                        <span class="date col-4 col-sm-2 col-xl-1">2018/02/15</span>
                        <div class="text-head col-8 col-sm-10 col-xl-11">
                            <i class="fa fa-play" aria-hidden="true"></i>原材料データの登録数が3000回を越えました。</div>
                    </li>
                    <li class="row">
                        <span class="date col-4 col-sm-2 col-xl-1">
                            <a href="#" class="btn btn-success btn-important">{{ $t("label_home.important") }}</a>
                        </span>
                        <div class="text-head col-8 col-sm-10 col-xl-11"><i class="fa fa-play" aria-hidden="true"></i>会員登録ポリシーが変更されました。</div>
                    </li>
                    <li class="row">
                        <span class="date col-4 col-sm-2 col-xl-1">2018/01/03</span>
                        <div class="text-head col-8 col-sm-10 col-xl-11"><i class="fa fa-play" aria-hidden="true"></i>ポイントアップキャンペーンを開始します！</div>
                    </li>
                </ul>
            </div>
            <div class="col-12 text-right">
                <a href="#" class="btn btn-default btn-see-more">{{ $t("label_home.detail") }}</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'news',
    }
</script>
