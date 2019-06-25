@extends('layout.main')
@section('content')
    <div class="faq">
    <h4 class="latest-text w3_faq_latest_text w3_latest_text">Sıkça Sorulan Sorular</h4>
    <div class="container">

            <div class="panel-group w3l_panel_group_faq" id="accordion" role="tablist" aria-multiselectable="true">
                @forelse($faqs as $faq)
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="{{ $faq->id }}">
                        <h4 class="panel-title asd">
                            <a class="pa_italic" role="button" data-toggle="collapse" data-parent="#accordion" href="{{ $faq->id }}" aria-expanded="true" aria-controls="collapseOne">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><i class="glyphicon glyphicon-minus" aria-hidden="true"></i>{{ $faq->soru }}
                            </a>
                        </h4>
                    </div>
                    <div id="{{ $faq->id }}" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body panel_text">
                            {{ $faq->cevap }}
                        </div>
                    </div>
                </div>
                @empty
                    <h3> Kayıt Yok</h3>
                @endforelse
            </div>

    </div>
    </div>
@endsection