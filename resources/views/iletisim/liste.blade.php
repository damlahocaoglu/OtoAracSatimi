@extends('base')
<br><br><br><br><br><br><br><br><br><br><br>
<div class="col-md-12">
    <h2>Mesajlar</h2>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">İsim</th>
            <th scope="col">E-mail</th>
            <th scope="col">Mesaj</th>

        </tr>
        </thead>
        <tbody>
        @foreach ($iletisim as $iletisimler)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$iletisimler->name}}</td>
                <td>{{$iletisimler->email}}</td>
                <td>{{$iletisimler->message}}</td>

            </tr>
        @endforeach

        </tbody>
    </table>
