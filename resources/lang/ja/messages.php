<?php return [
    'select_admin_alert'                                                 => '担当者を選択してください',
    'update_message_board'                                               => [
        'invalid_group_select' => '移動後グループを選択してください',
        'invalid_group_check'  => '指定したグループは、キャラが重複しているため、移動できません',
    ],
    'free_or_paid_member_alert'                                          => '無料・有料会員は移動できません。',
    'favorite_send_error'                                                => 'ポイント不足・同性への送信・受信拒否' . '\n' . 'いずれかの理由により送信できません。',
    'favorite_send_success'                                              => '送信しました。',
    'landmark_update'                                                    => [
        'set_name.required' => 'ランドマークが不正です',
    ],
    'landmark_import_csv'                                                => [
        'landmark_csv.required'  => 'ファイルが指定されていません',
        'landmark_csv.min'       => 'ファイルサイズは最大1000行程度です',
        'landmark_csv.max'       => 'ファイルサイズは最大1000行程度です',
        'landmark_csv.mimetypes' => 'ファイルが不正です',
    ],
    'users_import_csv'                                                   => [
        'csv.required' => 'ファイルが指定されていません',
        'csv.min'      => 'ファイルサイズは最大1000行程度です',
        'csv.max'      => 'ファイルサイズは最大1000行程度です',
        'mimetypes'    => 'ファイルが不正です',
    ],
    'm:women_registration2'                                              => // m:女性登録2
        [
            'title.required'    => 'ひとことを入力してください',
            'comments.required' => '自己紹介を入力してください',
            'title.max'         => 'ひとことは30文字以内で入力してください',
            'body.required'     => 'メッセージを入力してください',
            'body.max'          => 'メッセージは200文字以内で入力してください',
            'comments.max'      => '自己紹介は200文字以内で入力してください',
        ],
    'management:email_reply'                                             => // 管理：メール返信
        [
            'body.required'    => '本文を入力してください',
            'body.max'         => '本文は1500文字以内で入力してください',
            'subject.required' => '件名入力してください',
            'subject.max'      => '件名は30文字以内で入力してください',
        ],
    'm:change_address_mail'                                              => //m:メールアドレス変更
        [
            'mail1_upd.required' => '新しいメールアドレスを入力してください',
        ],
    'm:men_registration'                                                 => //m:男性登録
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'mail1.required'     => 'メールアドレスを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
        ],
    'p:men_registration_sub4'                                            => //p:男性登録_sub4
        [
            'objection.different' => 'err_obj/目的を選択して下さい',
            'nick_name.required'  => 'err_nick/ニックネームを入力してください',
            'mail2.email'         => 'err_mail/PCメールアドレスが不正です',
            'mail2.required'      => 'err_mail/PCメールアドレスを入力してください',
        ],
    'management:select_cp_def'                                           => //管理：セレクトCP_DEF
        [
            'p_pa_7.required'   => 'コンビニ100000 を入力してください',
            'p_pa_7.regex'      => 'コンビニ100000 入力は半角数字で入力してください',
            'set_name.required' => 'セットネームを入力してください',
            'p_cr_1.required'   => 'クレジット3000 を入力してください',
            'p_cr_2.required'   => 'クレジット5000 を入力してください',
            'p_cr_3.required'   => 'クレジット10000 を入力してください',
            'p_cr_4.required'   => 'クレジット20000 を入力してください',
            'p_cr_5.required'   => 'クレジット30000 を入力してください',
            'p_cr_6.required'   => 'クレジット50000 を入力してください',
            'p_cr_7.required'   => 'クレジット100000 を入力してください',
            'p_cr_1.regex'      => 'クレジット3000 入力は半角数字で入力してください',
            'p_cr_2.regex'      => 'クレジット5000 入力は半角数字で入力してください',
            'p_cr_3.regex'      => 'クレジット10000 入力は半角数字で入力してください',
            'p_cr_4.regex'      => 'クレジット20000 入力は半角数字で入力してください',
            'p_cr_5.regex'      => 'クレジット30000 入力は半角数字で入力してください',
            'p_cr_6.regex'      => 'クレジット50000 入力は半角数字で入力してください',
            'p_cr_7.regex'      => 'クレジット100000 入力は半角数字で入力してください',
            'p_pa_5.required'   => 'コンビニ30000 を入力してください',
            'p_pa_5.regex'      => 'コンビニ30000 入力は半角数字で入力してください',
            'p_pa_4.required'   => 'コンビニ20000 を入力してください',
            'p_pa_6.required'   => 'コンビニ50000 を入力してください',
            'p_pa_6.regex'      => 'コンビニ50000 入力は半角数字で入力してください',
            'p_cr_0_1.required' => 'クレジット1000 を入力してください',
            'p_cr_0_1.regex'    => 'クレジット1000 入力は半角数字で入力してください',
            'p_cr_0_2.required' => 'クレジット2000 を入力してください',
            'p_cr_0_2.regex'    => 'クレジット2000 入力は半角数字で入力してください',
            'p_pa_4.regex'      => 'コンビニ20000 入力は半角数字で入力してください',
            'p_pa_3.required'   => 'コンビニ10000 を入力してください',
            'p_pa_3.regex'      => 'コンビニ10000 入力は半角数字で入力してください',
            'p_pa_2.required'   => 'コンビニ5000 を入力してください',
            'p_pa_2.regex'      => 'コンビニ5000 入力は半角数字で入力してください',
            'p_pa_1.required'   => 'コンビニ3000 を入力してください',
            'p_pa_1.regex'      => 'コンビニ3000 入力は半角数字で入力してください',
            'p_pa_0_2.required' => 'コンビニ2000 を入力してください',
            'p_pa_0_2.regex'    => 'コンビニ2000 入力は半角数字で入力してください',
            'p_pa_0_1.required' => 'コンビニ1000 を入力してください',
            'p_pa_0_1.regex'    => 'コンビニ1000 入力は半角数字で入力してください',
        ],
    'management:change_member_of_women '                                 => //管理：女性会員更新
        [
            'comments.max'         => '自己紹介は200文字以内で入力してください',
            'login_id.alpha_num'   => 'ログインIDは半角で入力してください',
            'login_id.required'    => 'ログインIDを入力してください',
            'login_pass.alpha_num' => 'パスワードは半角で入力してください',
            'stat.different'       => '状態を選択してください',
            'attribute.different'  => '属性を選択してください',
            'point_add.regex'      => 'ポイントは半角数字で入力してください',
            'mileage_add.regex'    => 'マイレージは半角数字で入力してください',
            'mail1.email'          => '携帯メールが不正です',
            'mail2.email'          => 'PCメールが不正です',
            'mail3.email'          => 'スマホメールが不正です',
        ],
    'management:cm_group2'                                               => //管理：CMグループ２
        [
            'parent_id.different' => 'CMグループ１を選択してください',
            'name.required'       => 'CMグループ２が未入力です',
            'admin_id.required'   => 'ログインIDは4文字以上で入力してください',
            'admin_id.alpha_num'  => 'ログインIDは半角のみで入力してください',
            'pass.alpha_num'      => 'パスワードは半角のみで入力してください',
            'pass.required'       => 'パスワードは４文字以上で入力して下さい。',
        ],
    'm:male_registration2'                                               => //m:男性登録2
        [
            'comments.required' => '自己紹介を入力してください',
            'comments.max'      => '自己紹介は200文字以内で入力してください',
            'title.required'    => 'ひとことを入力してください',
            'title.max'         => 'ひとことは30文字以内で入力してください',
            'body.required'     => 'メッセージを入力してください',
            'body.max'          => 'メッセージは200文字以内で入力してください',
        ],
    'm:send_registration_email'                                          => //m:登録用メール送信
        [
            'ptitle.max'      => 'ひとことは30文字以内で入力してください',
            'pbody.required'  => 'メッセージを入力してください',
            'ptitle.required' => 'ひとことを入力してください',
            'mail.required'   => 'メールアドレスを入力してください',
            'pbody.max'       => 'メッセージは200文字以内で入力してください',
        ],
    'm:women_registration'                                               =>  //m:女性登録
        [
            'mail1.required'     => 'メールアドレスを入力してください',
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
        ],
    'management:cm_group1'                                               => //管理：CMグループ１
        [
            'name.required' => 'CMグループが未入力です',
        ],
    'm:change_setting_pass'                                              => //m:PASS設定変更
        [
            'login_pass_new1.alpha_num' => '新PASSは半角で入力してください',
            'login_pass_new1.required'  => '新PASSは4文字以上14文字以内で入力してください',
            'login_pass_new1.max'       => '新PASSは4文字以上14文字以内で入力してください',
            'login_pass_new2.alpha_num' => '新PASS（確認用）は半角で入力してください',
            'login_pass_new2.required'  => '新PASS（確認用）は4文字以上14文字以内で入力してください',
            'login_pass_new2.max'       => '新PASS（確認用）は4文字以上14文字以内で入力してください',
        ],
    'm:contact'                                                          => //m:お問い合わせ
        [
            'naiyou.max'      => '内容は200文字以内で入力してください',
            'naiyou.required' => '内容を入力してください',
        ],
    'p:suddenly_posted'                                                  => //p:いきなり投稿
        [
            'title.max'           => 'err_title/30文字以内で入力してください',
            'body.required'       => 'err_body/入力してください',
            'body.max'            => 'err_body/200文字以内で入力してください',
            'nick_name.max'       => 'err_nick/３０文字以内で入力してください',
            'nick_name.required'  => 'err_nick/入力してください',
            'mail2.required'      => 'err_mail/入力してください',
            'mail2.email'         => 'err_mail/PCメールアドレスが不正です',
            'objection.different' => 'err_obj/目的を選択して下さい',
            'title.required'      => 'err_title/入力してください',
        ],
    'm:message_board_send_mail'                                          => //m:掲示板：メール送信
        [
            'ptitle.required' => 'ひとことを入力してください',
            'ptitle.max'      => 'ひとことは50文字以内で入力してください',
            'pbody.required'  => 'ﾒｯｾｰｼﾞを入力してください',
            'pbody.max'       => 'ﾒｯｾｰｼﾞは1500文字以内で入力してください',
        ],
    'm:update_keijiban'                                                  => //m:掲示板書き込み
        [
            'title.required' => 'ひとことを入力してください',
            'title.max'      => 'ひとことは30文字以内で入力してください',
            'title.denyword' => '送信エラー<br>禁止用語が使用されました。',
            'body.required'  => 'メッセージを入力してください',
            'body.max'       => 'メッセージは200文字以内で入力してください',
            'body.denyword'  => '送信エラー<br>禁止用語が使用されました。',
            'img.different'  => '画像を選択してください',
        ],
    'transfer_bank_list_management'                                      => //振込銀行(一覧)：管理
        [
            'furi_from_con.date' => '開始振込日時に入力された値が不正です',
            'furi_to_con.date'   => '終了振込日時に入力された値が不正です',
            'kari_from_con.date' => '開始仮登録日に入力された値が不正です',
            'kari_to_con.date'   => '終了仮登録日に入力された値が不正です',
        ],
    'm:reply_mail'                                                       => //m:メール返信
        [
            'ptitle.required' => 'ひとことを入力してください',
            'ptitle.max'      => 'ひとことは50文字以内で入力してください',
            'pbody.required'  => 'ﾒｯｾｰｼﾞを入力してください',
            'pbody.max'       => 'ﾒｯｾｰｼﾞは1500文字以内で入力してください',
        ],
    'm:transfer_report'                                                  => //m:振込報告
        [
            'meigi.required' => '振込人名義を入力してください',
            'money.required' => '金額を入力してください',
            'money.numeric'  => '金額は半角数字で入力してください',
        ],
    'm:add_transfer_report'                                              => //m:振込報告先行追加
        [
            'meigi.required' => '振込人名義を入力してください',
        ],
    'm:credit_card'                                                      => //m:クレジット
        [
            'shimei_sei.required'  => '姓を入力してください',
            'shimei_sei.alpha_num' => '姓は半角で入力してください',
            'shimei_na.required'   => '名を入力してください',
            'shimei_na.alpha_num'  => '名は半角で入力してください',
        ],
    'management:new_male_member'                                         => //管理：新規男性会員
        [
            'comments.max'         => '自己紹介は200文字以内で入力してください',
            'login_id.alpha_num'   => 'ログインIDは半角で入力してください',
            'login_id.required'    => 'ログインIDを入力してください',
            'login_pass.alpha_num' => 'パスワードは半角で入力してください',
            'stat.different'       => '状態を選択してください',
            'attribute.different'  => '属性を選択してください',
            'point.regex'          => 'ポイントは半角数字で入力してください',
            'mileage.regex'        => 'マイレージは半角数字で入力してください',
            'mail1.email'          => '携帯メールが不正です',
            'mail2.email'          => 'PCメールが不正です',
            'title.max'            => '件名は30文字以内で入力してください',
            'body.max'             => 'メッセージは200文字以内で入力してください',
            'nick_name.required'   => 'ニックネームを入力してください',
        ],
    'management:male_member_update'                                      => //管理：男性会員更新
        [
            'comments.max'         => '自己紹介は200文字以内で入力してください',
            'login_id.alpha_num'   => 'ログインIDは半角で入力してください',
            'login_id.required'    => 'ログインIDを入力してください',
            'login_pass.alpha_num' => 'パスワードは半角で入力してください',
            'stat.different'       => '状態を選択してください',
            'attribute.different'  => '属性を選択してください',
            'point_add.regex'      => 'ポイントは半角数字で入力してください',
            'mileage_add.regex'    => 'マイレージは半角数字で入力してください',
            'mail1.email'          => '携帯メールが不正です',
            'mail2.email'          => 'PCメールが不正です',
            'mail3.email'          => 'スマホメールが不正です',
        ],
    'management:new_women_member'                                        => //管理：新規女性会員
        [
            'login_id.alpha_num'   => 'ログインIDは半角で入力してください',
            'login_id.required'    => 'ログインIDを入力してください',
            'login_pass.alpha_num' => 'パスワードは半角で入力してください',
            'stat.different'       => '状態を選択してください',
            'attribute.different'  => '属性を選択してください',
            'point.regex'          => 'ポイントは半角数字で入力してください',
            'mileage.regex'        => 'マイレージは半角数字で入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
            'mail1.email'          => '携帯メールが不正です',
            'mail2.email'          => 'PCメールが不正です',
            'title.max'            => '件名は30文字以内で入力してください',
            'body.max'             => 'メッセージは200文字以内で入力してください',
            'nick_name.required'   => 'ニックネームを入力してください',
        ],
    'pay_log_management'                                          => //決済ログ：管理
        [
            'from_cre_date.check_date'  => '登録日の入力が不正です',
            'to_cre_date.check_date'    => '登録日の入力が不正です',
            'from_buy_date.check_date'  => '初回決済日の入力が不正です',
            'to_buy_date.check_date'    => '初回決済日の入力が不正です',
            'from_pay_date.check_date'  => '処理日の入力が不正です',
            'to_pay_date.check_date'    => '処理日の入力が不正です',
            'kounyu_money_from.regex'   => '購入経験額は半角数字で入力してください',
            'kounyu_money_to.regex'     => '購入経験額は半角数字で入力してください',
        ],
    'transferBank_detail:management'                                     => //振込銀行(詳細)：管理
        [
            'transfer_day.date'     => '入金日に入力された値が不正です',
            'money.numeric'         => '振り込み金額に入力された値が不正です',
            'money.required'        => '振り込み金額が未入力です',
            'point.regex'           => '追加ポイント数に入力された値が不正です',
            'point.required'        => '追加ポイント数が未入力です',
            'name.required'         => '振込人名義が未入力です',
            'transfer_day.required' => '入金日が未入力です',
        ],
    'm:change_male_profile'                                              => //m:男性プロフィール変更
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'comments.required'  => '自己紹介を入力してください',
            'comments.max'       => '自己紹介は200文字以内で入力してください',
        ],
    'm:change_female_profile'                                            => //m:女性プロフィール変更
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'comments.required'  => '自己紹介を入力してください',
            'comments.max'       => '自己紹介は200文字以内で入力してください',
        ],
    'management:mail_attack'                                             => //管理：アタックメール
        [
            'subject.required' => '件名を入力してください',
            'subject.max'      => '件名は50文字以内で入力してください',
            'body.required'    => '本文を入力してください',
            'body.max'         => '本文は1500文字以内で入力してください',
        ],
    'p:male_registration'                                                => //p:男性登録
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'title.required'       => 'ひとことを入力してください',
            'title.max'            => 'ひとことは30文字以内で入力してください',
            'body.required'        => 'コメントを入力してください',
            'body.max'             => 'コメントは200文字以内で入力してください',
            'objection.different'  => '目的を選択して下さい',
        ],
    'p:women_registration'                                               => //p:女性登録
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'title.required'       => 'ひとことを入力してください',
            'title.max'            => 'ひとことは30文字以内で入力してください',
            'body.required'        => 'コメントを入力してください',
            'body.max'             => 'コメントは200文字以内で入力してください',
            'objection.different'  => '目的を選択して下さい',
        ],
    'p:present'                                                          => //p:プレゼント
        [
            'kaiin_id.required'     => '会員様IDを入力してください',
            'nick_name.required'    => 'ニックネームを入力してください',
            'mail.email'            => 'メールアドレスが不正です',
            'kisyu.different'       => '希望商品を選択してください',
            'mail.required'         => 'メールアドレスを入力してください',
            'to_nick_name.required' => '相手のニックネームを入力してください',
        ],
    'p:contact'                                                          => //p:お問い合わせ
        [
            'mail2.required'     => 'メールアドレスを入力してください',
            'nick_name.required' => 'お名前を入力してください',
            'naiyou.required'    => '内容を入力してください',
            'sex.required'       => '性別を選択してください',
        ],
    'management:update_bulletin_board'                                   => //管理：掲示板更新
        [
            'title.required' => '件名を入力してください',
            'title.max'      => '件名は30文字以内で入力してください',
            'body.required'  => 'メッセージを入力してください',
            'body.max'       => 'メッセージは200文字以内で入力してください',
        ],
    'p:contact1'                                                         => //p:お問い合わせ1
        [
            'mail2.required' => 'メールアドレスを入力してください',
        ],
    'p:change_infor_user'                                                => //p:ユーザ情報変更
        [
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
        ],
    'p:change_profile_female_registration '                              => //p:女性登録プロフィール変更
        [
            'body.required'      => 'コメントを入力してください',
            'body.max'           => 'コメントは200文字以内で入力してください',
            'title.required'     => 'ひとことを入力してください',
            'title.max'          => 'ひとことは30文字以内で入力してください',
            'id.required'        => '希望IDは4文字以上14文字以内で入力してください',
            'id.max'             => '希望IDは4文字以上14文字以内で入力してください',
            'id.alpha_num'       => '希望IDは半角で入力してください',
            'pass.alpha_num'     => 'PASSは半角で入力してください',
            'pass.required'      => 'PASSは4文字以上14文字以内で入力してください',
            'pass.max'           => 'PASSは4文字以上14文字以内で入力してください',
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'comments.required'  => '自己紹介を入力してください',
            'comments.max'       => '自己紹介は200文字以内で入力してください',
        ],
    'p:change_profile_male'                                              => //p:男性プロフィール変更
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'comments.required'  => '自己紹介を入力してください',
            'comments.max'       => '自己紹介は200文字以内で入力してください',
            'comments.denyword'  => '送信エラー<br>禁止用語が使用されました。',
        ],
    'p:check_affair'                                                     => //p:不倫チェック
        [
            'nick_name.max'      => '３０文字以内で入力してください',
            'nick_name.required' => 'ニックネームを入力してください',
            'mail2.email'        => 'メールアドレスが不正です',
            'mail2.required'     => 'メールアドレスを入力してください',
        ],
    'p:change_profile_male_registration  '                               => //p:男性登録プロフィール変更
        [
            'body.required'      => 'コメントを入力してください',
            'body.max'           => 'コメントは200文字以内で入力してください',
            'title.required'     => 'ひとことを入力してください',
            'title.max'          => 'ひとことは30文字以内で入力してください',
            'id.required'        => '希望IDは4文字以上14文字以内で入力してください',
            'id.max'             => '希望IDは4文字以上14文字以内で入力してください',
            'id.alpha_num'       => '希望IDは半角で入力してください',
            'pass.alpha_num'     => 'PASSは半角で入力してください',
            'pass.required'      => 'PASSは4文字以上14文字以内で入力してください',
            'pass.max'           => 'PASSは4文字以上14文字以内で入力してください',
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'comments.required'  => '自己紹介を入力してください',
            'comments.max'       => '自己紹介は200文字以内で入力してください',
        ],
    'p:transfer_report'                                                  => // p:振込報告
        [
            'money.required' => '金額を入力してください',
            'meigi.required' => '振込者の名義を入力してください',
            'money.numeric'  => '金額は半角数字で入力してください',
        ],
    'p:add_transfer_report'                                              => //p:振込報告先行追加
        [
            'meigi.required' => '振込者の名義を入力してください',
        ],
    'p:writing_bulletin_board'                                           => //p:掲示板書き込み
        [
            'title.required' => 'ひとことを入力してください',
            'title.max'      => 'ひとことは30文字以内で入力してください',
            'body.required'  => 'コメントを入力してください',
            'body.max'       => 'コメントは200文字以内で入力してください',
        ],
    'p:women_registration_sub'                                           => //p:女性登録_sub
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'title.required'       => 'ひとことを入力してください',
            'title.max'            => 'ひとことは30文字以内で入力してください',
            'body.required'        => 'コメントを入力してください',
            'body.max'             => 'コメントは200文字以内で入力してください',
            'objection.different'  => '目的を選択して下さい',
        ],
    'p:male_registration_sub'                                            => //p:男性登録_sub
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'title.required'       => 'ひとことを入力してください',
            'title.max'            => 'ひとことは30文字以内で入力してください',
            'body.required'        => 'コメントを入力してください',
            'body.max'             => 'コメントは200文字以内で入力してください',
            'objection.different'  => '目的を選択して下さい',
        ],
    'p:search_thorough'                                                  => //p:徹底検索
        [
            'title.required' => 'ひとことを入力してください',
            'title.max'      => 'ひとことは30文字以内で入力してください',
            'body.required'  => 'コメントを入力してください',
            'body.max'       => 'コメントは200文字以内で入力してください',
        ],
    'p:mail_reply'                                                       => //p:メール返信
        [
            'title.required' => '件名を入力して下さい',
            'title.max'      => '件名は５０文字以内で入力して下さい',
            'body.required'  => '内容を入力して下さい',
            'body.max'       => '内容１５００文字以内で入力して下さい',
        ],
    'p:male_registration2'                                               => //p:男性登録2
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'comments.required'    => '自己紹介を入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
        ],
    'p:women_registration2'                                              => //p:女性登録2
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'comments.required'    => '自己紹介を入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
        ],
    'p:bulk_mail_transmission'                                           => //p:メール一括送信
        [
            'ptitle.required' => '件名を入力して下さい',
            'ptitle.max'      => '件名は５０文字以内で入力して下さい',
            'pbody.required'  => '内容を入力して下さい',
            'pbody.max'       => '内容は１５００文字以内で入力して下さい',
        ],
    'p:send_suddenly'                                                    => //p:いきなり送信
        [
            'title.required'       => '入力して下さい',
            'title.max'            => '５０文字以内で入力して下さい',
            'body.required'        => '入力して下さい',
            'body.max'             => '１５００文字以内で入力して下さい',
            'nick_name.max'        => '３０文字以内で入力して下さい',
            'nick_name.required'   => '入力して下さい',
            'mail2.required'       => '入力して下さい',
            'mail2.email'          => '不正です',
            'mail2.domain'         => '指定のメールアドレスが確認できませんでした。',
            'mail2.deny_mail'      => '指定のメールアドレスは現在ご使用できません。',
            'mail2.duplicate_mail' => '入力されたメールアドレスは既に使用されています。',
            'mail2.kei_tai'        => '携帯のメールアドレスはご使用できません。',
            'objection.not_in'     => '目的未選択',
            'objection.required'   => '目的未選択',
            'bbs_title.required'   => 'err_bbs_title/入力して下さい',
            'bbs_title.max'        => 'err_bbs_title/３０文字以内で入力して下さい',
            'bbs_body.required'    => 'err_bbs_body/入力して下さい',
            'bbs_body.max'         => 'err_bbs_body/２００文字以内で入力して下さい',
            'doui'                 => 'チェックして下さい',
        ],
    'p:send_suddenly_sp'                                                 => //p:いきなり送信
        [
            'body.denyword'       => '送信エラー<br>禁止用語が使用されました。',
            'body.max'            => 'メッセージは1500文字以内で入力してください。',
            'body.required'       => 'メッセージを入力してください。',
            'nick_name.denyword'  => '禁止用語が使用されました。',
            'nick_name.required'  => 'ニックネームを入力してください。',
            'nick_name.max'       => 'ニックネームは30文字以内で入力してください。',
            'mail.required'       => 'メールアドレスを記入してください',
            'mail.deny_mail'      => '指定スマホメールアドレスは現在ご使用できません。',
            'mail.email'          => 'メールアドレスが不正です。',
            'mail.domain'         => '入力されたドメインは有効ではありません。',
            'mail.duplicate_mail' => 'メールアドレスはすでに使用されています。',
            'area1.in'            => 'お住いの地域を選択してください。',
            'doui.required'       => '「利用規約に同意して参加する」にチェックを入れてください。',
        ],
    'p:male_registration_sub2'                                           => //p:男性登録_sub2
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'comments.required'    => '自己紹介を入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
        ],
    'p:female_registration_sub2'                                         => //p:女性登録_sub2
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'comments.required'    => '自己紹介を入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
        ],
    'management:management_user'                                         => //管理：管理ユーザ
        [
            'admin_id.required'  => '管理者IDが未入力です',
            'admin_id.alpha_num' => '管理者IDは半角のみで入力してください',
            'pass.alpha_num'     => 'パスワードは半角のみで入力してください',
            'pass.required'      => 'パスワードは４文字以上で入力して下さい。',
            'name.required'      => '管理者名が未入力です',
        ],
    'management:ip_rejection'                                            => //管理：IP拒否
        [
            'dip.required' => 'IPアドレスが未入力です',
            'dip.numeric'  => 'IPアドレスが不正です',
        ],
    'management:mail_reply2'                                             => //管理：メール返信２
        [
            'subject.required' => '件名入力してください',
            'subject.max'      => '件名は50文字以内で入力してください',
            'body.required'    => '本文を入力してください',
            'body.max'         => '本文は１500文字以内で入力してください',
        ],
    'management:export_screen'                                           => //管理：エクスポート画面
        [
            'from_cre_date.date'      => '登録日が不正です(YYYY/MM/DD)',
            'to_cre_date.date'        => '登録日が不正です(YYYY/MM/DD)',
            'from_last_login.date'    => 'ログイン日が不正です(YYYY/MM/DD)',
            'to_last_login.date'      => 'ログイン日が不正です(YYYY/MM/DD)',
            'from_buy_date.date'      => '初回決済日が不正です(YYYY/MM/DD)',
            'to_buy_date.date'        => '初回決済日が不正です(YYYY/MM/DD)',
            'from_last_buy_date.date' => '最終決済日が不正です(YYYY/MM/DD)',
            'to_last_buy_date.date'   => '最終決済日が不正です(YYYY/MM/DD)',
            'point_s.regex'           => 'ポイントは半角数字で入力してください',
            'point_e.regex'           => 'ポイントは半角数字で入力してください',
            'drop_point_s.regex'      => '消化ポイントは半角数字で入力してください',
            'drop_point_e.regex'      => '消化ポイントは半角数字で入力してください',
            'ems_count_from_pc.regex' => 'EMS回数(PC)は半角数字で入力してください',
            'ems_count_to_pc.regex'   => 'EMS回数(PC)は半角数字で入力してください',
            'ems_count_from_mb.regex' => 'EMS回数(mb)は半角数字で入力してください',
            'ems_count_to_mb.regex'   => 'EMS回数(mb)は半角数字で入力してください',
            'from_kessai_num.regex'   => '決済回数は半角数字で入力してください',
            'to_kessai_num.regex'     => '決済回数は半角数字で入力してください',
            'ems_count_from_sp.regex' => 'EMS回数(mb)は半角数字で入力してください',
            'ems_count_to_sp.regex'   => 'EMS回数(mb)は半角数字で入力してください',
            'from_export_date.date'   => 'エクスポート暦の指定日が不正です(YYYY/MM/DD)',
            'to_export_date.date'     => 'エクスポート暦の指定日が不正です(YYYY/MM/DD)',
        ],
    'management:screen_search_member'                                    => //管理：会員検索検索画面
        [
            'from_cre_date.date'         => '登録日の入力が不正です(yyyy/mm/dd)',
            'to_cre_date.date'           => '登録日の入力が不正です(yyyy/mm/dd)',
            'from_last_login.date'       => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'to_last_login.date'         => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'from_buy_date.date'         => '初回決済日の入力が不正です(yyyy/mm/dd)',
            'to_buy_date.date'           => '初回決済日の入力が不正です(yyyy/mm/dd)',
            'from_last_buy_date.date'    => '最終決済日の入力が不正です(yyyy/mm/dd)',
            'to_last_buy_date.date'      => '最終決裁日の入力が不正です(yyyy/mm/dd)',
            'point_s.regex'              => 'ポイントは半角数字で入力してください',
            'point_e.regex'              => 'ポイントは半角数字で入力してください',
            'drop_point_today_s.regex'   => '当日消化ポイントは半角数字で入力してください',
            'drop_point_today_e.regex'   => '当日消化ポイントは半角数字で入力してください',
            'from_recv_mail_today.regex' => '当日受信メール数は半角数字で入力してください',
            'to_recv_mail_today.regex'   => '当日受信メール数は半角数字で入力してください',
            'from_kessai_num.regex'      => '決済回数は半角数字で入力してください',
            'to_kessai_num.regex'        => '決済回数は半角数字で入力してください',
        ],
    'management:setting_detail_genre_movie'                              => //管理：動画ジャンル詳細設定
        [
            'genre_name.required' => 'ジャンル名を入力してください',
            'genre_name.max'      => 'ジャンル名は64文字以内で入力してください',
            'genre_memo.max'      => 'メモは64文字以内で入力してください',
            'point.regex'         => '設定ポイントは半角数字で入力してください',
        ],
    'provisional_management:new_member_of_women'                         => //暫定管理：新規女性会員
        [
            'login_id.alpha_num'   => 'ログインIDは半角で入力してください',
            'login_id.required'    => 'ログインIDを入力してください',
            'login_pass.alpha_num' => 'パスワードは半角で入力してください',
            'stat.different'       => '状態を選択してください',
            'attribute.different'  => '属性を選択してください',
            'point.regex'          => 'ポイントは半角数字で入力してください',
            'mileage.regex'        => 'マイレージは半角数字で入力してください',
            'mail1.email'          => '携帯メールが不正です',
            'mail2.email'          => 'PCメールが不正です',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
            'title.max'            => '件名は30文字以内で入力してください',
            'body.max'             => 'メッセージは200文字以内で入力してください',
            'nick_name.required'   => 'ニックネームを入力してください',
        ],
    'provisional_management:new_member_of_men'                           => //暫定管理：新規男性会員
        [
            'login_id.alpha_num'   => 'ログインIDは半角で入力してください',
            'login_id.required'    => 'ログインIDを入力してください',
            'login_pass.alpha_num' => 'パスワードは半角で入力してください',
            'stat.different'       => '状態を選択してください',
            'attribute.different'  => '属性を選択してください',
            'point.regex'          => 'ポイントは半角数字で入力してください',
            'mileage.regex'        => 'マイレージは半角数字で入力してください',
            'mail1.email'          => '携帯メールが不正です',
            'mail2.email'          => 'PCメールが不正です',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
            'title.max'            => '件名は30文字以内で入力してください',
            'body.max'             => 'メッセージは200文字以内で入力してください',
            'nick_name.required'   => 'ニックネームを入力してください',
        ],
    'management:purchase_price_point'                                    => //管理：購入金額ポイント
        [
            'modeAdd.different'     => 'モードを選択して下さい',
            'shiharaiAdd.different' => '支払方法を選択して下さい',
            'moneyAdd.numeric'      => '金額に入力された値が不正です',
            'moneyAdd.required'     => '金額が未入力です',
            'pointAdd.regex'        => 'ポイントに入力された値が不正です',
            'pointAdd.required'     => 'ポイントが未入力です',
        ],
    'p:male_registration_sub3'                                           => //p:男性登録_sub3
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'comments.required'    => '自己紹介を入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
        ],
    'p:female_registration_sub3'                                         => //p:女性登録_sub3
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'comments.required'    => '自己紹介を入力してください',
            'comments.max'         => '自己紹介は200文字以内で入力してください',
        ],
    'management:input_video'                                             => //管理：動画入力
        [
            'file_path.required' => 'ファイルパスを入力してください',
        ],
    'management:video_log'                                               => //管理：動画ログ
        [
            'drop_point_from.regex' => '総消費PTは半角数字で入力してください',
            'drop_point_to.regex'   => '総消費PTは半角数字で入力してください',
            'play_count_from.regex' => '再生回数は半角数字で入力してください',
            'play_count_to.regex'   => '再生回数は半角数字で入力してください',
        ],
    'management:setting_check_a'                                         => //管理：Aチェック設定
        [
            'm_touroku_date.regex'      => '登録後日数は半角数字で入力してください',
            'y_touroku_date.regex'      => '登録後日数は半角数字で入力してください',
            'y_kessai_count_from.regex' => '決済回数は半角数字で入力してください',
            'y_kessai_count_to.regex'   => '決済回数は半角数字で入力してください',
        ],
    'management:dunning_log'                                             => //管理：督促ログ
        [
            'cre_from_con.date'     => '送信日付が不正です',
            'cre_to_con.date'       => '送信日付が不正です',
            'senkou_date_from.date' => '先行追加日時が不正です',
            'senkou_date_to.date'   => '先行追加日時が不正です',
        ],
    'p:change_profile_female'                                            => //p:女性プロフィール変更
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'comments.required'  => '自己紹介を入力してください',
            'comments.max'       => '自己紹介は200文字以内で入力してください',
        ],
    'p:change_profile_mail'                                              => //change-mail-profile
        [
            'mail2_upd.min'            => 'メールアドレスが不正です。',
            'mail2_upd.email'          => 'メールアドレスが不正です。',
            'mail2_upd.kei_tai'        => '携帯のメールアドレスはご使用できません。<br>（携帯でご利用になる場合は、モバイル版をご利用ください。',
            'mail2_upd.domain'         => '指定のメールアドレスが確認できませんでした。',
            'mail2_upd.deny_mail'      => '指定のメールアドレスは現在ご使用できません。',
            'mail2_upd.duplicate_mail' => 'メールアドレスはすでに使用されています。',
        ],
    'p:change_profile_mail_sp'                                           => //change-mail-profile-sp
        [
            'mail3_upd.required'       => '新しいメールアドレスを入力してください。',
            'mail3_upd.not_in'         => '現在のメールアドレスを入力することはできません。',
            'mail3_upd.email'          => '新しいメールアドレスが不正です。',
            'mail3_upd.domain'         => '入力されたドメインは有効ではありません。',
            'mail3_upd.deny_mail'      => '指定スマホメールアドレスは現在ご使用できません。',
            'mail3_upd.duplicate_mail' => '新しいメールアドレスはすでに使用されています。',
        ],
    'management:select_cp'                                               => //管理：セレクトCP
        [
            'from_payment1.regex'      => 'CP1 金額始値 入力は半角数字で入力してください',
            'from_payment2.regex'      => 'CP2 金額始値 入力は半角数字で入力してください',
            'from_payment3.regex'      => 'CP3 金額始値 入力は半角数字で入力してください',
            'to_payment1.regex'        => 'CP1 金額終値 入力は半角数字で入力してください',
            'to_payment2.regex'        => 'CP2 金額終値 入力は半角数字で入力してください',
            'to_payment3.regex'        => 'CP3 金額終値 入力は半角数字で入力してください',
            'from_point1.regex'        => 'CP1 ポイント始値 入力は半角数字で入力してください',
            'from_point2.regex'        => 'CP2 ポイント始値 入力は半角数字で入力してください',
            'from_point3.regex'        => 'CP3 ポイント始値 入力は半角数字で入力してください',
            'to_point1.regex'          => 'CP1 ポイント終値 入力は半角数字で入力してください',
            'to_point2.regex'          => 'CP2 ポイント終値 入力は半角数字で入力してください',
            'to_point3.regex'          => 'CP3 ポイント終値 入力は半角数字で入力してください',
            'from_cp_date_y.different' => '予約開始年を選択してください',
            'from_cp_date_m.different' => '予約開始月を選択してください',
            'from_cp_date_d.different' => '予約開始日を選択してください',
            'from_cp_date_h.different' => '予約開始時を選択してください',
            'to_cp_date_y.different'   => '予約終了年を選択してください',
            'to_cp_date_m.different'   => '予約終了月を選択してください',
            'to_cp_date_d.different'   => '予約終了日を選択してください',
            'to_cp_date_h.different'   => '予約終了時を選択してください',
        ],
    'm:girl_registration2'                                               => //m:女生登録2
        [
            'title.max' => 'ひとことは30文字以内で入力してください',
        ],
    'p:register_from_mail_300_100'                                       => //p:メールからの登録_300_100
        [
            'mail2.email'    => 'メールアドレスが不正です',
            'mail2.required' => 'メールアドレスを入力してください',
        ],
    'p:register_from_mail_350_50'                                        => //p:メールからの登録_350_50
        [
            'mail2.email'    => 'メールアドレスが不正です',
            'mail2.required' => 'メールアドレスを入力してください',
        ],
    'management:search_inbox'                                            => //管理：受信箱検索
        [
            'attack_count_from.regex'         => 'アタック数は半角数字で入力してください',
            'attack_count_to.regex'           => 'アタック数は半角数字で入力してください',
            'drop_point_today_e.regex'        => '当日消化ポイントは半角数字で入力してください',
            'drop_point_today_s.regex'        => '当日消化ポイントは半角数字で入力してください',
            'drop_point_yesterday_e.regex'    => '前日消化ポイントは半角数字で入力してください',
            'drop_point_yesterday_s.regex'    => '前日消化ポイントは半角数字で入力してください',
            'from_apo_date.check_date'        => 'アポ日時の入力が不正です(yyyy/mm/dd)',
            'from_buy_date.check_date'        => '初回決済日の入力が不正です(yyyy/mm/dd)',
            'from_cre_date.check_date'        => '登録日の入力が不正です(yyyy/mm/dd)',
            'from_kessai_num.regex'           => '決済回数は半角数字で入力してください',
            'from_last_buy_date.check_date'   => '最終決済日の入力が不正です(yyyy/mm/dd)',
            'from_last_login.check_date'      => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'login_id.regex'                  => 'ログインIDは半角文字で入力してください',
            'mail_count_from.regex'           => 'メール数は半角数字で入力してください',
            'mail_count_to.regex'             => 'メール数は半角数字で入力してください',
            'okkake_count_from.regex'         => '追っかけ数は半角数字で入力してください',
            'okkake_count_to.regex'           => '追っかけ数は半角数字で入力してください',
            'okkake_mail_count_from.regex'    => 'メール蓄積数は半角数字で入力してください',
            'okkake_mail_count_to.regex'      => 'メール蓄積数は半角数字で入力してください',
            'point_e.regex'                   => 'ポイントは半角数字で入力してください',
            'point_s.regex'                   => 'ポイントは半角数字で入力してください',
            'to_apo_date.check_date'          => 'アポ日時の入力が不正です(yyyy/mm/dd)',
            'to_buy_date.check_date'          => '初回決済日の入力が不正です(yyyy/mm/dd)',
            'to_cre_date.check_date'          => '登録日の入力が不正です(yyyy/mm/dd)',
            'to_kessai_num.regex'             => '決済回数は半角数字で入力してください',
            'to_last_buy_date.check_date'     => '最終決裁日の入力が不正です(yyyy/mm/dd)',
            'to_last_login.check_date'        => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'use_point_from.regex'            => '利用ポイントは半角数字で入力してください',
            'use_point_to.regex'              => '利用ポイントは半角数字で入力してください',
            'apo_count_from.regex'            => 'アポ数は半角数字で入力してください',
            'apo_count_to.regex'              => 'アポ数は半角数字で入力してください',
            'age_from.regex'                  => '年齢は半角数字で入力してください',
            'age_to.regex'                    => '年齢は半角数字で入力してください',
            'from_last_mail_recv.check_date'  => '最終メール受信日の入力が不正です',
            'to_last_mail_recv.check_date'    => '最終メール受信日の入力が不正です',
            'yaritori_count_from.regex'       => 'やり取り者数は半角数字で入力してください',
            'yaritori_count_to.regex'         => 'やり取り者数は半角数字で入力してください',
            'from_last_mail_read.check_date'  => '最終メール既読日の入力が不正です',
            'to_last_mail_read.check_date'    => '最終メール既読日の入力が不正です',
            'from_senkou_date.check_date'     => '先行追加日が不正です',
            'to_senkou_date.check_date'       => '先行追加日が不正です',
            'ems_count_from_pc.regex'         => 'ems回数は半角数字で入力してください',
            'ems_count_to_pc.regex'           => 'ems回数は半角数字で入力してください',
            'ems_count_from_mb.regex'         => 'ems回数は半角数字で入力してください',
            'ems_count_to_mb.regex'           => 'ems回数は半角数字で入力してください',
            'mailstock_num.regex'             => '蓄積数は半角数字で入力してください',
            'from_last_point_date.check_date' => '最終ポイント日時が不正です(yyyy/mm/dd)',
            'to_last_point_date.check_date'   => '最終ポイント日時が不正です(yyyy/mm/dd)',
            'ems_count_from_sp.regex'         => 'ems回数は半角数字で入力してください',
            'ashiato_date_from.check_date'    => 'あしあと検索範囲の日付が不正です(yyyy/mm/dd)',
            'ashiato_date_to.check_date'      => 'あしあと検索範囲の日付が不正です(yyyy/mm/dd)',
            'ems_count_to_sp.regex'           => 'ems回数は半角数字で入力してください',
        ],
    'p:easy_registration_male'                                           => //p:簡単登録男性
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'mail2.email'        => 'メールアドレスが不正です',
            'mail2.required'     => 'メールアドレスを入力してください',
        ],
    'management:screen_search_bulletin_board '                           => //管理：掲示板検索画面
        [
            'point_s.regex'                => 'ポイントは半角数字で入力してください',
            'point_e.regex'                => 'ポイントは半角数字で入力してください',
            'drop_point_today_s.regex'     => '当日消化ポイントは半角数字で入力してください',
            'drop_point_today_e.regex'     => '当日消化ポイントは半角数字で入力してください',
            'drop_point_yesterday_s.regex' => '前日消化ポイントは半角数字で入力してください',
            'drop_point_yesterday_e.regex' => '前日消化ポイントは半角数字で入力してください',
            'from_kessai_num.regex'        => '決済回数は半角数字で入力してください',
            'to_kessai_num.regex'          => '決済回数は半角数字で入力してください',
            'okkake_mail_count_from.regex' => 'メール蓄積数は半角数字で入力してください',
            'okkake_mail_count_to.regex'   => 'メール蓄積数は半角数字で入力してください',
            'okkake_count_from.regex'      => '追っかけ数は半角数字で入力してください',
            'okkake_count_to.regex'        => '追っかけ数は半角数字で入力してください',
            'attack_count_from.regex'      => 'アタック数は半角数字で入力してください',
            'attack_count_to.regex'        => 'アタック数は半角数字で入力してください',
            'mail_count_from.regex'        => 'メール数は半角数字で入力してください',
            'mail_count_to.regex'          => 'メール数は半角数字で入力してください',
            'login_id.alpha_num'           => 'ログインIDは半角文字で入力してください',
            'use_point_from.regex'         => '利用ポイントは半角数字で入力してください',
            'use_point_to.regex'           => '利用ポイントは半角数字で入力してください',
            'from_cre_date.date'           => '登録日の入力が不正です(yyyy/mm/dd)',
            'to_cre_date.date'             => '登録日の入力が不正です(yyyy/mm/dd)',
            'from_last_login.date'         => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'to_last_login.date'           => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'from_buy_date.date'           => '初回決済日の入力が不正です(yyyy/mm/dd)',
            'to_buy_date.date'             => '初回決済日の入力が不正です(yyyy/mm/dd)',
            'from_last_buy_date.date'      => '最終決済日の入力が不正です(yyyy/mm/dd)',
            'to_last_buy_date.date'        => '最終決裁日の入力が不正です(yyyy/mm/dd)',
            'from_apo_date.date'           => 'アポ日時の入力が不正です(yyyy/mm/dd)',
            'to_apo_date.date'             => 'アポ日時の入力が不正です(yyyy/mm/dd)',
            'from_last_mail_recv.date'     => '最終メール受信日の入力が不正です',
            'to_last_mail_recv.date'       => '最終メール受信日の入力が不正です',
            'from_last_mail_read.date'     => '最終メール既読日の入力が不正です',
            'to_last_mail_read.date'       => '最終メール既読日の入力が不正です',
            'from_senkou_date.date'        => '先行追加日が不正です',
            'to_senkou_date.date'          => '先行追加日が不正です',
            'ems_count_from_pc.regex'      => 'ems回数は半角数字で入力してください',
            'ems_count_to_pc.regex'        => 'ems回数は半角数字で入力してください',
            'ems_count_from_mb.regex'      => 'ems回数は半角数字で入力してください',
            'ems_count_to_mb.regex'        => 'ems回数は半角数字で入力してください',
            'mailstock_num.regex'          => '蓄積数は半角数字で入力してください',
            'from_last_point_date.date'    => '最終ポイント日時が不正です(yyyy/mm/dd)',
            'to_last_point_date.date'      => '最終ポイント日時が不正です(yyyy/mm/dd)',
            'ems_count_from_sp.regex'      => 'ems回数は半角数字で入力してください',
            'ems_count_to_sp.regex'        => 'ems回数は半角数字で入力してください',
        ],
    'p:male_registration_2'                                              => //p:男性登録２
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'title.required'       => 'ひとことを入力してください',
            'title.max'            => 'ひとことは30文字以内で入力してください',
            'body.required'        => 'コメントを入力してください',
            'body.max'             => 'コメントは200文字以内で入力してください',
        ],
    'p:female_registration2'                                             => //p:女性登録２
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'login_id.alpha_num'   => 'IDは半角で入力してください',
            'login_id.required'    => 'IDは4文字以上14文字以内で入力してください',
            'login_id.max'         => 'IDは4文字以上14文字以内で入力してください',
            'login_pass.alpha_num' => 'PASSは半角で入力してください',
            'login_pass.required'  => 'PASSは4文字以上14文字以内で入力してください',
            'login_pass.max'       => 'PASSは4文字以上14文字以内で入力してください',
            'mail2.email'          => 'メールアドレスが不正です',
            'mail2.required'       => 'メールアドレスを入力してください',
            'title.required'       => 'ひとことを入力してください',
            'title.max'            => 'ひとことは30文字以内で入力してください',
            'body.required'        => 'コメントを入力してください',
            'body.max'             => 'コメントは200文字以内で入力してください',
        ],
    'p:easy_registration_women'                                          => //p:簡単登録女性
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'mail2.email'        => 'メールアドレスが不正です',
            'mail2.required'     => 'メールアドレスを入力してください',
        ],
    'p:my_page_of_male'                                                  => //p:男性マイページ
        [
            'title.max'      => 'タイトルは30文字以内で入力してください',
            'title.required' => 'タイトルを入力してください',
            'title.denyword' => '送信エラー<br>禁止用語が使用されました。',
            'body.required'  => '本文を入力してください',
            'body.max'       => '本文は200文字以内で入力してください',
            'body.denyword'  => '送信エラー<br>禁止用語が使用されました。',
        ],
    'p:my_page_of_female'                                                => //p:女性マイページ
        [
            'title.required' => 'タイトルを入力してください',
            'title.max'      => 'タイトルは30文字以内で入力してください',
            'body.required'  => '本文を入力してください',
            'body.max'       => '本文は200文字以内で入力してください',
        ],
    'management:update_age_of_member_authentication'                     => //管理：会員年齢認証更新
        [
            'auth_pt.regex' => 'プレゼントPTは半角数字で入力してください',
        ],
    'management:list_cm'                                                 => //管理：CM一覧
        [
            'collect_from.regex' => '回収率(FROM)は半角数字で入力してください',
            'collect_to.regex'   => '回収率(to)は半角数字で入力してください',
        ],
    'management:setting_landmark '                                       => //管理：ランドマーク設定
        [
            'set_name.required' => '設定名を入力してください',
        ],
    'm:regular_registration'                                             => //m:通常登録
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
            'mail1.required'     => 'メールアドレスを入力してください',
        ],
    'm:easy_registration'                                                => //m:簡単登録
        [
            'mail.required'      => 'メールアドレスを入力してください',
            'nick_name.required' => 'ニックネームを入力してください',
        ],
    'm:regular_registration2'                                            => //m:通常登録2
        [
            'title.required'    => 'ひとことを入力してください',
            'title.max'         => 'ひとことは30文字以内で入力してください',
            'body.required'     => 'メッセージを入力してください',
            'body.max'          => 'メッセージは200文字以内で入力してください',
            'comments.required' => '自己紹介を入力してください',
            'comments.max'      => '自己紹介は200文字以内で入力してください',
        ],
    'management:member_default_banner_registration'                      => //管理：会員デフォルトバナー登録
        [
            'pay_count_from.regex'      => '決済回数は半角数字で入力してください',
            'pay_count_to.regex'        => '決済回数は半角数字で入力してください',
            'yaritori_count_from.regex' => 'やりとり者数は半角数字で入力してください',
            'yaritori_count_to.regex'   => 'やりとり者数は半角数字で入力してください',
        ],
    'management:importance_name_setting'                                 => '更新しました',
    'management:cm_group0'                                               => //管理：CMグループ０
        [
            'name.required' => 'CMグループ０が未入力です',
        ],
    'p:easy_registration2'                                               => //p:簡単登録2
        [
            'nick_name.required'  => 'ニックネームを入力してください',
            'mail2.email'         => 'メールアドレスが不正です',
            'mail2.required'      => 'メールアドレスを入力してください',
            'objection.different' => '出会いの目的を選択してください',
            'nick_name.max'       => 'ニックネームは３０文字以内で入力してください',
        ],
    'management:mobile_registration_male_member_update'                  => //管理：携帯登録男性会員更新
        [
            'mail.email'    => 'メールが不正です',
            'mail.required' => 'メールを入力してください',
        ],
    'management:mobile_registration_female_member_update'                => //管理：携帯登録女性会員更新
        [
            'mail.email'    => 'メールが不正です',
            'mail.required' => 'メールを入力してください',
        ],
    'management:advance_additional_approval_processing'                  => //管理：先行追加承認処理
        [
            'kari_from_con.date' => '仮登録日(開始)に入力された値が不正です(yyyy/mm/dd)',
            'kari_to_con.date'   => '仮登録日(終了)に入力された値が不正です(yyyy/mm/dd)',
        ],
    'management:preliminary_additional_approval_registration_processing' => //管理：先行追加承認登録処理
        [
            'zan_money.regex' => '振り込み残金額は半角数字で入力してください',
            'money.regex'     => '振り込み金額は半角数字で入力してください',
            'point.regex'     => '追加ポイント数は半角数字で入力してください',
        ],
    'women_registration_sub4'                                            => //p:女性登録_sub4
        [
            'nick_name.required'   => 'ニックネームを入力してください',
            'nick_name.denyword'   => '禁止用語が使用されました。',
            'nick_name.max'        => 'ニックネームは30文字以内で入力してください。',
            'objection.required'   => '目的を選択して下さい',
            'objection.not_in'     => '目的を選択して下さい',
            'mail2.email'          => 'PCメールアドレスが不正です',
            'mail2.required'       => 'PCメールアドレスを入力してください',
            'mail.required'        => 'メールアドレスを記入してください',
            'mail2.domain'         => '入力されたドメインは有効ではありません。',
            'mail2.duplicate_mail' => 'メールアドレスはすでに使用されています。',
            'mail2.deny_mail'      => '指定PCメールアドレスは現在ご使用できません。',
            'doui.required'        => '「利用規約に同意して参加する」にチェックを入れてください。',
        ],
    'management:set_up_display_of_characters_to_be_displayed'            => //管理：置きキャラ表示設定
        [
            'from_cre_date.date'   => '登録日が不正です(YYYY/MM/DD)',
            'to_cre_date.date'     => '登録日が不正です(YYYY/MM/DD)',
            'from_last_login.date' => 'ログイン日が不正です(YYYY/MM/DD)',
            'to_last_login.date'   => 'ログイン日が不正です(YYYY/MM/DD)',
        ],
    'sp_registration'                                                    => //s:簡単登録
        [
            'nick_name.required'  => 'ニックネームを入力してください',
            'nick_name.denyword'  => '禁止用語が使用されました。',
            'nick_name.max'       => 'ニックネームは30文字以内で入力してください。',
            'mail.required'       => 'メールアドレスを記入してください',
            'mail.domain'         => '入力されたドメインは有効ではありません。',
            'mail.duplicate_mail' => 'メールアドレスはすでに使用されています。',
            'mail.email'          => 'メールアドレスが不正です。',
            'mail.deny_mail'      => '入力されたドメインは有効ではありません。',
            'objection.not_in'    => '目的未選択',
            'objection.required'  => '目的未選択',
            'doui.required'       => '「利用規約に同意して参加する」にチェックを入れてください。',
        ],
    's:regular_registration'                                             => //s:通常登録
        [
            'nick_name.required' => 'ニックネームを入力してください',
            'nick_name.max'      => 'ニックネームは３０文字以内で入力してください',
        ],
    's:send_registration_email'                                          => //s:登録用メール送信
        [
            'ptitle.required' => 'ひとことを入力してください',
            'ptitle.max'      => 'ひとことは30文字以内で入力してください',
            'pbody.required'  => 'メッセージを入力してください',
            'pbody.max'       => 'メッセージは200文字以内で入力してください',
        ],
    's:send_registration_email2'                                         => //s:登録用メール送信2 // TODO: check logic denyword for pbody
        [
            'mail_body.required'   => 'メッセージを入力してください。',
            'mail_body.max'        => 'メッセージは200文字以内で入力してください。',
            'mail_body.denyword'   => '送信エラー<br>禁止用語が使用されました。',
            'nick_name.required'   => 'ニックネームを入力してください。',
            'nick_name.max'        => 'ニックネームは7文字以内で入力してください。',
            'nick_name.jpwordtype' => '※ニックネームは全角で、漢字、ひらがな、カナを入力して下さい。',
            'nick_name.denyword'   => '禁止用語が使用されました。',
            'mail.required'        => 'メールアドレスを記入してください',
            'mail.email'           => 'メールアドレスが不正です。',
            'mail.domain'          => '入力されたドメインは有効ではありません。',
            'mail.duplicate_mail'  => 'メールアドレスはすでに使用されています。',
            'area2.not_in'         => 'お住いの地域を選択してください。',
            'doui.required'        => '「利用規約に同意して参加する」にチェックを入れてください。',
        ],
    'p:register_mail_transmission'                                       => //p:メール送信登録
        [
            'mail2.email'    => 'メールアドレスが不正です',
            'mail2.required' => 'メールアドレスを入力してください',
        ],
    'management:automatic_mail_magazine_delivery'                        => //管理：自動メルマガ配信
        [
            'from_cre_date.date'   => '登録日の入力が不正です(yyyy/mm/dd)',
            'to_cre_date.date'     => '登録日の入力が不正です(yyyy/mm/dd)',
            'from_last_login.date' => 'ログイン日の入力が不正です(yyyy/mm/dd)',
            'to_last_login.date'   => 'ログイン日の入力が不正です(yyyy/mm/dd)',
        ],
    'management:setting_update_count_self_introduction'                  => //管理：自己紹介更新回数設定
        [
            'pc_profupd_cnt.required' => 'PC更新回数を入力してください',
            'pc_profupd_cnt.numeric'  => 'PC更新回数は半角数字で入力してください',
            'mb_profupd_cnt.required' => '携帯更新回数を入力してください',
            'mb_profupd_cnt.numeric'  => '携帯更新回数は半角数字で入力してください',
            'sp_profupd_cnt.required' => 'スマートフォン更新回数を入力してください',
            'sp_profupd_cnt.numeric'  => 'スマートフォン更新回数は半角数字で入力してください',
        ],
    'management:edit_sent_mail'                                          => //管理：送信メール編集
        [
            'title.required' => '件名を入力して下さい',
            'title.max'      => '件名は５０文字以内で入力して下さい',
            'body.required'  => '内容を入力して下さい',
            'body.max'       => '内容は１５００文字以内で入力して下さい',
        ],
    'free-page:management'                                               => //フリーページ：管理
        [],
    'fix_information_of_user'                                            => //ユーザー情報修正
        [
            'from_cre_date.date'      => '登録日の入力が不正です',
            'to_cre_date.date'        => '登録日の入力が不正です',
            'from_buy_date.date'      => '初回決済日の入力が不正です',
            'to_buy_date.date'        => '初回決済日の入力が不正です',
            'kounyu_money_from.regex' => '購入経験額は半角数字で入力してください',
            'kounyu_money_to.regex'   => '購入額額は半角数字で入力してください',
        ],
    'upload_image_profile'                                               =>
        [
            'img.max'   => '画像サイズは2Mまでです。',
            'img.image' => '不正なファイルです。',
            'img.mimes' => '画像ファイル形式はGIF又はPNG又はJPEGのみとなります。',
        ],
    'update_password_profile'                                            =>
        [
            'login_pass.required'    => 'PASSを入力してください。',
            'login_pass.min'         => 'パスワード(4～14文字以外が入力)不正',
            'login_pass.max'         => 'パスワード(4～14文字以外が入力)不正',
            'login_pass.regex'       => 'パスワード(半角英数以外が入力)不正',
            're_login_pass.required' => '再度PASSを入力してください。',
            're_login_pass.same'     => 'PASSと再度PASSが一致しません。',
        ],

    'register_limit_time' => '短時間での再登録はできません',

    'setting_mail_delivery'  =>
        [
            'haisin_num.required' => '配信件数を入力してください。',
            'haisin_num.numeric'  => '配信件数は数字を入力してください。',
            'haisin_num.min'      => '配信件数は1000件以上を入力してください。',
        ],
    'upload_image_character' =>
        [
            'img.max'   => '画像サイズは2Mまでです。',
            'img.mimes' => '画像ファイル形式はGIF又はJPEGのみとなります。',
            'img.image' => '不正なファイルです。',
        ],

    'member_mail' =>
        [
            'title.required' => '件名を入力して下さい',
            'body.required'  => '内容を入力して下さい',
            'body.max'       => '内容は１５００文字以内で入力して下さい',
        ],

    'check_date'        =>
        [
            'period_from.check_date' => '日付の入力が不正です。（yyyy/mm/dd）',
            'period_to.check_date'   => '日付の入力が不正です。（yyyy/mm/dd）',
        ],
    'image_upload_list' => [
        'search' => [
            'view_count.integer'              => '頁表示件数の値は半角数字で入力してください。',
            'credate_form_search.date_format' => '登録日の日付入力が不正です（yyyy/mm/dd）',
            'credate_to_search.date_format'   => '登録日の日付入力が不正です（yyyy/mm/dd）',
        ],
    ],
    'cm_code_muser'     =>
        [
            'period_from.check_date' => '登録期間(FROM)の入力が不正です。（yyyy/mm/dd）',
            'period_to.check_date'   => '登録期間(TO)の入力が不正です。（yyyy/mm/dd）',
            'sales_from.check_date'  => '売上期間(FROM)の入力が不正です。（yyyy/mm/dd）',
            'sales_to.check_date'    => '売上期間(TO)の入力が不正です。（yyyy/mm/dd）',
        ],
];
