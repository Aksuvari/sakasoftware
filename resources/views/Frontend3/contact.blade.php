@extends('Frontend.Partials.master')

@section('page_css')

@endsection

@section('content')
    <div class="seventy-five-percent">
        <div class="container py-lg-5 pt-md-7 pb-md-5 pt-5 pb-4">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="my-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bize Ulaşın</font></font></h1>
                    <p class="pb-4">
                        <font style="vertical-align: inherit;">
                            Bazen hayal kurmak insanların zihinlerde oluşturdukları güzel düşüncelerden ibarettir. Ya o düşenceyi gerçekleştirdiğinde sana kattığı gurur verici his işte oda bu işi başardığının kanıtıdır.
                            Saka Software kurmaktaki amacımızda hayallerimizi gerçekleştirmek ve onun vermiş olduğu gurur verici hissi müşterilerimizle paylaşmak.
                         </font></p>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-lg-9 my-md-7 my-5">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Adress</font></font></h4>
                <div class="py-2">
                    <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{\App\Models\SettingModel::first()->address}} </font></font></p>
                </div>

            </div>
            <div class="col-lg-4 mt-lg-0 mt-md-5 mt-4">
                <h4 class="mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Telefon</font></font></h4>
                <div class="py-2">
                    <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="tel:{{\App\Models\SettingModel::first()->phone_1}}">{{\App\Models\SettingModel::first()->phone_1}}</a></font></font></p>
                    <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><a href="tel:{{\App\Models\SettingModel::first()->phone_2}}">{{\App\Models\SettingModel::first()->phone_2}}</a></font></font></p>
                </div>


            </div>
            <div class="col-lg-4 mt-lg-0 mt-md-5 mt-4">
                <h4 class="mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">E-mail</font></font></h4>
                <div class="py-2">
                    <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> <a href="mailto:{{\App\Models\SettingModel::first()->email}}">{{\App\Models\SettingModel::first()->email}}</a></font></font></p>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection
