@extends('base')
<br><br><br><br><br><br><br><br><br><br><br>
<div class="col-md-12">
    <h2>Ürünler</h2>
    <div align="right">
        <a href="{{route('arabaekle')}}">
            <button class="btn btn-success">Yeni Ekle</button>
        </a>
        <br> <br>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Adı</th>
            <th scope="col">Renk</th>
            <th scope="col">Km</th>
            <th scope="col">Fiyat</th>
            <th scope="col">Kategori</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($product as $products)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$products->name}}</td>
                <td>{{$products->color}}</td>
                <td>{{$products->km}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->category_id}}</td>
                <td width="10"><a href="{{route('arabaduzenle',$products->id)}}"><button class="btn btn-primary">Düzenle</button></a></td>
                <td width="10"><a href="{{route('arabasil',$products->id)}}"><button class="btn btn-primary">Sil</button></a></td>

            </tr>
        @endforeach

        </tbody>
    </table>
