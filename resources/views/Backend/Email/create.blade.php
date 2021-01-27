@extends('Backend.Partials.adminmaster')
@section('title')
    Manager Panel
@endsection
@section('css')
@endsection
@section('page_title')
    Saka Software Yönetim Paneline Hoş Geldiniz.
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">E-Posta Yönetimi</h4>
                    <p class="card-title-desc">Sitemizde bulunan E-Posta Yönetimine ait içerikler</p>
                    <form action="{{route('Emails.store')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Port</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Sunucu Portu" name="port" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Host</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Host Adresi" name="host" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Username</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Mail Kullanıcı Adı" name="username" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="password" placeholder="Mail Şifresi" name="password" id="example-text-input">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Gönderen
                                        (From)</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Gönderen Kişi Mail" name="from" id="example-text-input">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Alan (to)</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Alan Kişi Mail" name="to" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Başlık</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Mail Başlığı" name="title" id="example-text-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-3 col-form-label">Protocol</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="Protocol" name="protocol" id="example-text-input">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-group row text-right">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-primary"> E k l e</button>
                                <a href="{{route('Emails.index')}}" class="btn btn-danger"> İ p t a l </a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <!-- end col -->
    </div>
@endsection

@section('script')
    <script>
        tinymce.init({selector:'textarea'});
    </script>
@endsection

