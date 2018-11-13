<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ダウンロード管理画面</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <style>
        .select2-selection--multiple:before {
            content: "";
            position: absolute;
            right: 7px;
            top: 42%;
            border-top: 5px solid #888;
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-primary mt-5">ダウンロード管理画面</h1>
        <form action="{{ route('download') }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group row mt-5">
                <label for="countries" class="col-2 col-form-label">出身国</label>
                <div class="col-10">
                    <select class="form-control" id="countries-select" name="countries[]" multiple>
                        @foreach($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                        @endforeach
                    </select>
                    <i class="glyphicon glyphicon-menu-down"></i>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">モード</label>
                <div class="col-10">
                    <select class="form-control survey" name="survey">
                        <option value="all">モードを選択してください</option>
                        <option value="material">原材料</option>
                        <option value="recipe">レシピ</option>
                    </select>
                </div>
            </div>
            <div class="form-group row" id="material-select">
                <label class="col-2 col-form-label">原材料</label>
                <div class="col-10">
                    <select class="form-control pl-2" id="materials-select" name="materials[]" multiple>
                        @foreach($materials as $material)
                            <option value="{{ $material->id }}">{{ $material->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row" id="recipe-select">
                <label class="col-2 col-form-label">レシピ</label>
                <div class="col-10">
                    <select class="form-control" id="recipes-select" name="recipes[]" multiple>
                        @foreach($recipes as $recipe)
                            <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">回答期間</label>
                <div class="col-4">
                    <input class="form-control" type="date" name="startDate">
                </div>
                <div class="col-2 text-center">~</div>
                <div class="col-4">
                    <input class="form-control" type="date" name="endDate">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2 col-form-label">ユーザーの情報</label>
                <div class="col-10 mt-2">
                    <div class="form-group form-check-inline">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="user[name]" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">名前</span>
                        </label>
                    </div>
                    <div class="form-group form-check-inline">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="user[age]" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">年齢</span>
                        </label>
                    </div>
                    <div class="form-group form-check-inline">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="user[gender]" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">性別</span>
                        </label>
                    </div>
                    <div class="form-group form-check-inline">
                        <label class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="user[nation]" checked>
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">出身国</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-outline-primary w-25">データエクスポート</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#countries-select').select2({
                placeholder: "ユーザーの国を選択してください"
            });

            $('#materials-select').select2({
                placeholder: "原材料"
            });

            $('#recipes-select').select2({
                placeholder: "レシピ"
            });

            $('.survey').change(function () {
                let survey = this.value;

                if(survey === 'material') {
                    $('#material-select').show();
                    $('#recipe-select').hide();
                } else if(survey === 'recipe') {
                    $('#recipe-select').show();
                    $('#material-select').hide();
                } else {
                    $('#material-select').show();
                    $('#recipe-select').show();
                }
            });
        });
    </script>
</body>
</html>
