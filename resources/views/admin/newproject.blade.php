@extends('admin/index')

@section('content')

    @if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $item)
        <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="form">
    <form action="{{ route('newproject')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group newproject">
                <label for="title">Заголовок</label>
                <input type="text" id="title" name="title" placeholder="Квартира 44кв. Москва-City">
            </div>
            <div class="form-group">
                <textarea name="description" cols="30" rows="10" placeholder="Заказчик нам принес свой проект, но с помощью нашего опыта нашим дизайнерам удалоьс уговорить клиента на снос стены. После бригада строителей заехала на объект и приступила к работе"></textarea>
            </div>
            <div class="form-group">
                {{-- <label for="img">Выберите файл</label> --}}
                <input id="img" type="file" multiple name="file[]">
            </div>
            <input class="submit" type="submit" name="submit" value="Сохранить">
        </form>
    </div>
@endsection