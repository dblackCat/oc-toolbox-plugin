<?php return [
    'plugin'     => [
        'name'        => 'Toolbox',
        'description' => '開発効率化のためのツールセット',
    ],
    'field'      => [
        'id'                       => 'ID',
        'name'                     => '名称',
        'title'                    => 'タイトル',
        'active'                   => '有効',
        'hidden'                   => '非表示',
        'code'                     => 'コード',
        'slug'                     => 'URL',
        'external_id'              => '外部ID',
        'preview_text'             => 'プレビューテキスト',
        'preview_image'            => 'プレビュー画像',
        'image'                    => '画像',
        'images'                   => '画像 (ギャラリー)',
        'description'              => '説明',
        'category'                 => 'カテゴリ',
        'email'                    => 'メール',
        'phone'                    => '電話',
        'moderation'               => 'モデレーション',
        'mode'                     => 'モード',
        'status'                   => 'ステータス',
        'city'                     => '市',
        'address'                  => '住所',
        'street'                   => '番地',
        'lat'                      => '緯度',
        'lng'                      => '経度',
        'type'                     => 'タイプ',
        'avatar'                   => 'アバター',
        'property'                 => 'プロパティ',
        'property_list_value'      => 'プロパティ選択肢',
        'property_mode'            => 'プロパティモード',
        'property_tab'             => 'タブ名',
        'property_is_translatable' => 'プロパティは翻訳可能',
        'key'                      => 'キー',
        'value'                    => '値',
        'label'                    => 'ラベル',
        'date'                     => '日付',
        'datetime'                 => '日時',
        'time'                     => '時間',
        'file'                     => 'ファイル',
        'decimals'                 => '小数点以下の桁数',
        'dec_point'                => '小数部の区切り文字',
        'thousands_sep'            => '千単位の区切り文字',
        'dot'                      => 'ドット (.)',
        'comma'                    => 'カンマ (,)',
        'together'                 => 'マージ',
        'space'                    => 'スペース',
        'date_begin'               => '開始日',
        'date_end'                 => '終了日',
        'discount_value'           => '割引値',
        'discount_type'            => '割引タイプ',
        'discount_price'           => '割引価格',
        'discount'                 => '割引',
        'product'                  => '製品',
        'priority'                 => '優先度',
        'group'                    => 'グループ',
        'count'                    => 'カウント',
        'length'                   => '長さ',
        'amount'                   => '量',
        'author'                   => '作者',
        'view_count'               => 'ビュー数',

        'sort_order' => '並び順',
        'created_at' => '作成日時',
        'updated_at' => '更新日時',
        'deleted_at' => '削除日時',
        'deleted'    => '削除済み',
        'empty'      => '未設定',
        'password'   => 'パスワード',

        'site_settings'                 => 'アプリケーション設定',
        'site_settings_description'     => 'アプリケーションの共通設定',
        'queue_on'                      => 'メール送信はキューを使用する',
        'queue_name'                    => 'メール送信キューの名前',
        'import_queue_on'               => 'データインポートにキューを使用する',
        'import_queue_name'             => 'データインポートに使用するキューの名称',
        'email_list_description'        => '複数のメールアドレスはカンマ区切りで入力してください',
        'import_deactivate'             => '要素を無効にする',
        'import_deactivate_description' => 'CSVファイルに含まれないすべての要素は無効化されます',

        'country'  => '国',
        'state'    => '都道府県、州、省など',
        'house'    => '番地',
        'flat'     => '部屋番号',
        'address1' => '住所1',
        'address2' => '住所2',
        'postcode' => '郵便番号',
    ],
    'tab'        => [
        'preview_content' => 'プレビュー',
        'full_content'    => 'コンテンツ',
        'images'          => '画像',
        'files'           => 'ファイル',
        'settings'        => '設定',
        'description'     => '説明',
        'properties'      => 'プロパティ',
        'mail'            => 'メール送信',
        'import'          => 'インポート',
        'permissions'     => 'サイト設定',
        'prices_format'   => '価格書式',
    ],
    'component'  => [
        'property_name_error_404' => '404ページ表示',
        'property_slug'           => 'Slug',
        'property_slug_required'  => 'Slugは必須です',
        'pagination'              => 'ページネーション',
        'pagination_desc'         => 'ページネーションボタン表示',

        'property_redirect_page'         => 'リダイレクト先ページ',
        'property_redirect_success_page' => '成功時リダイレクト先ページ',
        'property_redirect_fail_page'    => '失敗時リダイレクト先ページ',
        'property_redirect_on'           => 'リダイレクトON',
        'property_flash_on'              => 'FlashメッセージON',
        'property_mode'                  => '動作モード',
        'mode_submit'                    => 'Form submit',
        'mode_ajax'                      => 'Ajax',
    ],
    'message'    => [
        'create_success'                  => ':name は正常に作成されました',
        'update_success'                  => ':name は正常に更新されました',
        'delete_success'                  => ':name は正常に削除されました',
        'restore_confirm'                 => '選択した項目を復元しますか？',
        'restore_success'                 => '項目は正常に復元されました',
        'e_not_correct_request'           => 'リクエストが不正です',
        'row_is_empty'                    => 'データがありません',
        'external_id_is_empty'            => '外部IDが設定されていません',
        'import_additional_info'          => '追加インポート情報',
        'import_active_field_info'        => 'CSVファイルに含まれない“active”なフィールドの値は“true”になります',
        'import_preview_image_field_info' => 'プレビュー画像ファイルはストレージディレクトリへの相対パスで入力してください。例）"app/media/image.jpg"',
        'import_images_field_info'        => '画像ファイルはストレージディレクトリへの相対パスで入力してください。例）"app/media/image.jpg" 複数指定する場合はカンマ区切りで入力してください',
    ],
    'settings'   => [
        'count_per_page'                => 'ページあたり表示数',
        'available_count_per_page'      => 'ページあたり表示数の選択肢',
        'available_count_per_page_desc' => '選択可能にする数字をカンマ区切りで入力してください',
        'number_validation'             => '半角数字を入力してください',
        'pagination_limit'              => '最大ページボタン数',
        'active_class'                  => 'アクティブボタンに設定するクラス',
        'button_list'                   => '表示するボタン',
        'button_list_description'       => 'main,first,first-more,prev,prev-more,next,next-more,last,last-moreからカンマ区切りで入力してください',
        'button_name'                   => 'ボタンラベル',
        'button_limit'                  => 'ボタンを表示し始めるページ番号',
        'button_number'                 => 'ボタンにページ番号を表示',
        'button_class'                  => 'CSSクラス',
        'last_button'                   => '"Last"ボタン',
        'last-more_button'              => '"More" ("Last"の前)',
        'next_button'                   => '"Next"ボタン',
        'next-more_button'              => '"More" ("Next"の前)',
        'prev_button'                   => '"Prev"ボタン',
        'prev-more_button'              => '"More" ("Prev"の後)',
        'first_button'                  => '"First"ボタン',
        'first-more_button'             => '"More" ("First"の後)',
        'main_button'                   => '"Main"ボタン',
    ],
    'button'     => [
        'add_property_value' => '値を追加',
        'import_from_csv'    => 'CSVから読込む',
        'export_in_csv'      => 'CSVへ書出す',
        'import_button'      => 'データの読込み',
    ],
    'type'       => [
        'input'            => 'テキスト (input)',
        'number'           => 'テキスト (number)',
        'textarea'         => 'テキスト (textarea)',
        'rich_editor'      => 'テキスト (wysiwyg)',
        'single_checkbox'  => 'シングル チェックボックス',
        'switch'           => 'スイッチ',
        'checkbox'         => 'チェックボックス リスト (checkbox)',
        'balloon_selector' => 'バルーン セレクタ',
        'tag_list'         => 'タグリスト',
        'select'           => 'セレクト',
        'radio'            => 'ラジオボタン',
        'date'             => '日付ピッカー (datetime)',
        'colorpicker'      => 'カラーピッカー (colorpicker)',
        'mediafinder'      => 'ファイル',
    ],
    'permission' => [
        'settings' => 'サイト設定管理',
    ],
];
