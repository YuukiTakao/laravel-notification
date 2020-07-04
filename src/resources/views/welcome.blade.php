<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel</title>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <style>
    form {
      /* フォームをページの中央に置く */
      margin: 0 auto;
      width: 400px;
      /* フォームの範囲がわかるようにする */
      padding: 1em;
      border: 1px solid #CCC;
      border-radius: 1em;
    }

    ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    form li+li {
      margin-top: 1em;
    }

    label {
      /* すべてのラベルを同じサイズにして、きちんと揃える */
      display: inline-block;
      width: 90px;
      text-align: right;
    }

    input,
    textarea {
      /* すべてのテキストフィールドのフォント設定を一致させる
      デフォルトで、textarea は等幅フォントが設定されている */
      font: 1em sans-serif;

      /* すべてのテキストフィールドを同じサイズにする */
      width: 300px;
      box-sizing: border-box;

      /* テキストフィールドのボーダーの外見を同一にする */
      border: 1px solid #999;
    }

    input:focus,
    textarea:focus {
      /* アクティブな要素を少し強調する */
      border-color: #000;
    }

    textarea {
      /* 複数行のテキストフィールドをラベルにきちんと揃える */
      vertical-align: top;

      /* テキスト入力に十分な領域を与える */
      height: 5em;
    }

    .button {
      /* ボタンを他のテキストフィールドと同じ場所に置く */
      padding-left: 90px;
      /* label 要素と同じサイズ */
    }

    button {
      /* このマージンは、ラベルとテキストフィールドの間のスペースと
      おおよそ同じスペースを表す */
      margin-left: .5em;
    }

    .btn {
      display: inline-block;
      margin-top: 15px;
      padding: 0.3em 1em;
      text-decoration: none;
      color: #67c5ff;
      border: solid 2px #67c5ff;
      border-radius: 3px;
      transition: .4s;
    }

    .btn:hover {
      background: #67c5ff;
      color: white;
    }

    .content {
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="flex-center position-ref full-height">

    <div class="content">
      <div class="title m-b-md">
        Laravel
      </div>

      @component('mail_form')@endcomponent

    </div>
  </div>
</body>

</html>