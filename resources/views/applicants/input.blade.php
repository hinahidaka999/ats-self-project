@php
//@extends('layouts.app')

//@section('title', '応募者登録')

//@section('content')
//<h1>応募者登録</h1>

//<form method="POST" action="{{ route('applicants.store') }}" enctype="multipart/form-data" class="border">
    @endphp
    <!DOCTYPE html>
    <html lang="ja">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css')  }}">
    </head>

    <body>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="/applicant/store" enctype="multipart/form-data" class="border">
            @csrf
            <div>
                <label for="name">氏名</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}">
            </div>
            <div>
                <label for="age">年齢</label>
                <input type="number" id="age" name="age" value="{{ old('age') }}">
            </div>
            <div>
                <label for="application_route">応募経路</label>
                <input type="text" id="application_route" name="application_route" value="{{ old('application_route') }}">
            </div>
            <div>
                <label for="occupation">応募職種</label>
                <input type="text" id="occupation" name="occupation" value="{{ old('occupation') }}">
            </div>

            <div>
                <label for="email">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}">
            </div>
            <div>
                <label for="tel">電話番号</label>
                <input type="tel" id="tel" name="tel" value="{{ old('tel') }}">
            </div>
            <div>
                <label for="gender">性別</label>
                <select id="gender" name="gender">
                    <option value="">選択してください</option>
                    <option value="male" {{ old('gender') === 'male' ? 'selected' : '' }}>男性</option>
                    <option value="female" {{ old('gender') === 'female' ? 'selected' : '' }}>女性</option>
                    <option value="other" {{ old('gender') === 'other' ? 'selected' : '' }}>その他</option>
                </select>
            </div>
            <div>
                <label for="resume">職務経歴書</label>
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx">
            </div>
            <div>
                <label for="other_file">その他ファイル</label>
                <input type="file" id="other_file" name="other_file">
            </div>
            <div>
                <label for="link">リンク</label>
                <input type="url" id="link" name="link" value="{{ old('link') }}">
            </div>
            <div>
                <label for="memo">メモ欄</label>
                <textarea id="memo" name="memo">{{ old('memo') }}</textarea>
            </div>
            <button type="submit">登録する</button>
        </form>
        @php
        //@endsection
        @endphp
        <a href="{{ route('index') }}">戻る</a>
    </body>

    </html>