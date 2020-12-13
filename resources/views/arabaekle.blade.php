@extends('base')
@section('form')

            <div class="row">
                <div class="col-md-12">
                    <form action="{{route('arabaeklepost')}}"   method="POST">
                    @csrf
                    <select name="category_id">
                        <option selected="" value="default">Lütfen Kategori Seçiniz</option>
                        <option value="1">Sedan</option>
                        <option value="2">Hatchback</option>
                        <option value="3">Station Wagon</option>
                        </select>
                    </select>
                    <input name="adi" type="text" placeholder="Adı">
                    <input name="renk" id="renk" type="text" placeholder="Renk">
                    <input name="km" type="text" placeholder="Km">
                    <input name="fiyat" id="fiyat" type="text" placeholder="Fiyat">
                        <button type="submit" class="btn btn--lg btn--alt-color" style="float:right;">EKLE
                    </button>
                </form>
                </div>
            </div>

@endsection
