<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css')  }}">
    <link rel="stylesheet" href="{{ asset('/sass/app.scss')  }}">
</head>

<body>
    <a href="{{ route('applicant.input') }}" class="btn">応募者情報入力ページへ</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>メールアドレス</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($applicants as $applicant)
            <tr>
                <td>{{ $applicant->id }}</td>
                <td><a href="detail?id={{ $applicant->id }}">{{ $applicant->name }}</a></td>
                <td>{{ $applicant->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>