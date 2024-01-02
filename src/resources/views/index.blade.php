<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__inner-h1">FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <h2 class="contact-form__content-h2">Contact</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--item--kome">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="first_name" placeholder="例: 山田" class="form-input" value="{{ $contact['first_name']?? '' }}" />
                        <input type="text" name="last_name" placeholder="例: 太郎" class="form-input-2" value="{{ $contact['last_name']?? '' }}" />
                    </div>
                    <div class="form__error">
                        <!--バリデーション -->
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label-item">性別</span>
                    <span class="form__label--item--kome">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="radio" name="gender" value="men" checked>男性
                        <input type="radio" name="gender" value="women">女性
                        <input type="radio" name="gender" value="other">その他
                    </div>
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--item--kome">※</span>
                </div>
                <div class="form__group-content">
                    <input type="email" name="email" id="mail" placeholder="例: test@example.com" class="form-input3">
                </div>
            </div>
            <div class="form__error">
                <!--バリデーション-->
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--item--kome">※</span>
                    <div class="form__group-content">
                        <input type="tel" name="tel" placeholder="080" class="form-input4">
                        <span class="form__group-tel">-</span>
                        <input type="tel" name="tel" placeholder="1234" class="form-input5">
                        <span class="form__group-tel">-</span>
                        <input type="tel" name="tel" placeholder="5678" class="form-input6">
                    </div>
                </div>
                <div class="form__error">
                    <!--バリデーション-->
                </div>
            </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--item--kome">※</span>
                </div>
                <div class="form__group-content">
                    <input type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" class="form-input8">
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">建物名</span>
                </div>
                <div class="form__group-content">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" class="form-input7">
                </div>
            </div>
            <form class="form__call" action="/confirm" method="post">
                @csrf
                <div class="form__call__title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--item--kome">※</span>
                    <div class="form__call__item">
                        <select class="form__call__item-select" name="category_id">
                            @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </form>
            <form class="form__call" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                        <span class="form__label--item--kome">※</span>
                    </div>
                    <div class="form__group-content">
                        <textarea name="detail" rows="5" cols="50" placeholder="お問い合わせ内容をご記載ください" class="form-input8" value="{{ $contact['detail']?? '' }}"></textarea>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </form>
    </main>
</body>

</html>