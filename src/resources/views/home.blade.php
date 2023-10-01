@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-16">
            <div class="row">
                <div class="col-sm">
                  ID
                </div>
                <div class="col-sm">
                  Дилер
                </div>
                <div class="col-sm">
                  Контактное лицо
                </div>
                <div class="col-sm">
                  Сумма
                </div>
                <div class="col-sm">
                  Срок
                </div>
                <div class="col-sm">
                  Процент
                </div>
                <div class="col-sm">
                  Описание
                </div>
                <div class="col-sm">
                  Статус
                </div>
                <div class="col-sm">
                  Дата создания
                </div>
                <div class="col-sm">
                  Дата обновления
                </div>
                <div class="col-sm">
                  Банк
                </div>
              </div>
            <div class="table">
                @foreach ($creditApplications as $item)
                    <div class="row">
                        <div class="col-sm">
                          {{$item->id}}
                        </div>
                        <div class="col-sm">
                          {{$item->dealer}}
                        </div>
                        <div class="col-sm">
                          {{$item->contact_person}}
                        </div>
                        <div class="col-sm">
                          {{$item->summ}}
                        </div>
                        <div class="col-sm">
                          {{$item->credit_term}}
                        </div>
                        <div class="col-sm">
                          {{$item->interest_rate}}
                        </div>
                        <div class="col-sm">
                          {{$item->reason}}
                        </div>
                        <div class="col-sm">
                          {{$item->status}}
                        </div>
                        <div class="col-sm">
                          {{$item->created_at}}
                        </div>
                        <div class="col-sm">
                          {{$item->updated_at}}
                        </div>
                        <div class="col-sm">
                          {{$item->bank->name}}
                        </div>
                      </div>
                @endforeach
            </div>
            <div class="links">
                {{$creditApplications->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
