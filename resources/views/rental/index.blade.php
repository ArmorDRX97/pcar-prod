@extends('layouts.app')
@section('title')
    Список заявок
@endsection
<style>
    .delete-rental{
        width: 35px;
        height: 35px;
        min-width: 35px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        color: red;
        cursor: pointer;
        transition: 0.2s all ease;
    }

    .delete-rental:hover{
        background-color: rgba(255, 0, 0, 0.2);
    }
</style>
@section('content')
    <style>
        .table.table-striped > thead > tr > th,
        .table.table-striped > thead > tr > th{
            font-size: 12px;
            font-weight: 700;
            padding: 7px!important;
        }

        .table.table-striped > :not(caption) > * > *{
            font-size: 14px;
            padding: 5px!important;
        }
    </style>
    <div class="container-fluid">
        <div class="card mb-4">
            <div class="card-body p-4 d-block d-md-flex align-items-center justify-content-between">
                <form action="{{ route('rental.list') }}" method="GET" class="d-flex align-items-end">
                    <div class="form-group d-flex align-items-center" style="width: 250px;">
                        <select name="status" id="status" class="form-control">
                            <option value="">Все</option>
                            <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>Новые</option>
                            <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>В
                                процессе
                            </option>
                            <option value="canceled" {{ request('status') == 'canceled' ? 'selected' : '' }}>Отменены
                            </option>
                            <option value="done" {{ request('status') == 'done' ? 'selected' : '' }}>Завершены</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary ms-3">Фильтр</button>
                </form>
                <div class="pagination-container">
                    {{ $rentals->links() }}
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body overflow-auto p-4">
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                    <tr>
                        <th>Маишна</th>
                        <th>Базованя цена</th>
                        <th>Период</th>
                        <th>Дата и время</th>
                        <th>Тип</th>
                        <th>ФИО</th>
                        <th>Email</th>
                        <th>Телефон</th>
                        <th>Дата заявки</th>
                        <th>Статус</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($rentals as $rental)
                        <tr id="{{$rental->id}}">
                            <td>{{ $rental->car_name }}</td>
                            <td>{{ $rental->base_price }} ₸</td>
                            <td>{{ $rental->period }} дней</td>
                            <td>
                                <div>Получение: {{ $rental->pickup_location}}
                                    <br>{{ $rental->pickup_date}} {{ $rental->pickup_time}}</div>
                                <hr>
                                <div>Возврат: {{ $rental->return_location}}
                                    <br>{{ $rental->return_date}} {{ $rental->return_time}}</div>
                            </td>
                            @if($rental->customer_type == 'fiz')
                                <td>Физ. лицо</td>
                            @else
                                <td>Юр. лицо</td>
                            @endif

                            <td>{{ $rental->customer_first_name}} {{ $rental->customer_last_name}}</td>
                            <td>{{ $rental->customer_email}}</td>
                            <td>{{ $rental->customer_phone}}</td>
                            <td>{{ $rental->updated_at}}</td>
                            <td style="width: 150px;">
                                <form action="{{ route('rental-status', $rental->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <select style="min-width: 150px;" name="status" onchange="this.form.submit()" class="form-control">
                                        <option value="new" {{ $rental->status == 'new' ? 'selected' : '' }}>Новый
                                        </option>
                                        <option
                                            value="in_progress" {{ $rental->status == 'in_progress' ? 'selected' : '' }}>
                                            В процессе
                                        </option>
                                        <option value="canceled" {{ $rental->status == 'canceled' ? 'selected' : '' }}>
                                            Отменен
                                        </option>
                                        <option value="done" {{ $rental->status == 'done' ? 'selected' : '' }}>
                                            Завершен
                                        </option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <span class="delete-rental" onclick="modalRental({{$rental->id}})" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-trash"></i></span>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Удаление</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <h5 class="text-muted">Вы уверены, что хотите удалить?</h5>
                </div>
                <div class="modal-footer pt-2">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-danger" onclick="deleteRental()">Удалить</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let idRental = null;
     function modalRental(id) {
         idRental = id;
     }
        function deleteRental() {
            if (idRental) {
                // Отправляем запрос на сервер для удаления записи
                fetch(`application-list/${idRental}`, {
                    method: 'DELETE',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // Если используется CSRF-защита
                    },
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        $('#exampleModal').modal('hide');
                        const tr = document.getElementById(idRental).remove();
                        idRental = null;
                        return response.json();
                    })
                    .then(data => {
                        // Обработка успешного ответа от сервера
                        console.log(data.message); // Выводим сообщение об успешном удалении
                        // Дополнительные действия, например, обновление интерфейса
                    })
                    .catch(error => {
                        // Обработка ошибок
                        console.error('There has been a problem with your fetch operation:', error);
                    });
            } else {
                console.error('No rental ID specified');
            }
        }
    </script>
@endsection
{{--@section('page_js')--}}
{{--    <script src="{{mix('assets/js/sub_category/sub_category.js')}}"></script>--}}
{{--@endsection--}}

