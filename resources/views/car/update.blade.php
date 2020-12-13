@extends('base')
@section('form')

    <div class="col-md-12">
        <h2>Ürün Düzenle</h2>
        <div align="right">
            <a href="{{route('urunler')}}">
                <button class="btn btn-success">Geri</button>
            </a>
            <br> <br>
        </div>
        <form action="{{ route('arabaduzenlepost',$products->id) }}"   method="POST">
            @csrf
            <select name="category_id">
                <option selected="" value="default">Lütfen Kategori Seçiniz</option>
                <option value="1">Sedan</option>
                <option value="2">Hatchback</option>
                <option value="3">Station Wagon</option>
            </select>
            <input name="adi" type="text" value="{{ $products->name }}" >
            <input name="renk" id="renk" type="text" value="{{ $products->color }}">
            <input name="km" type="text" value="{{ $products->km }}">
            <input name="fiyat" id="fiyat" type="text" value="{{ $products->price }}">
            <button type="submit" class="btn btn--lg btn--alt-color" style="float:right;">DÜZENLE
            </button>
        </form>
    </div>
    </div>

@endsection
