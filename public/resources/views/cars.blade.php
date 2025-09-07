@extends('layouts.base')

@section('title', 'Cars')

@section('content')
    <main class="wrap">
        <h1 class="page-title">Автомобили</h1>

        @inject('metrics', 'App\Http\Controllers\CarController')
        <div class="mb-4">
            Количество машин: {{ $metrics->monthlyRevenue() }}.
        </div>

        {{-- <x-alert type="error" :message=$message class="mt-4">
            <strong>Упс!</strong> Что-то пошло не так!

            <x-slot:title>
                {{ $component->formatAlert('Ошибка сервера!!!!!!!!!!!!!!!!!!!') }}
            </x-slot>

            <strong>Упс!</strong> Что-то пошло не так!

            <x-slot:heading class="font-bold">
                Заголовок
            </x-slot>

            <x-slot:footer class="text-sm">
                Нижний колонтитул
            </x-slot>

        </x-alert> --}}

        <p class="subtitle">Страница вывода данных о Машинах</p>

        <section class="users">
            {{-- {{ $id . '       ' }}{{ $ip . '       ' }}{{ $find . '       ' }}{{ $model . '       ' }} --}}
            @foreach ($cars as $car)
                <article class="user-card">
                    <div class="user-id">ID: {{ $car->id }}</div>
                    <div class="user-name">Marka: {{ $car->marka }}</div>
                    <div class="user-email">Model: {{ $car->model }}</div>
                    <div class="user-email">Year: {{ $car->year }}</div>
                    <div class="user-name">VIN: {{ $car->vin }}</div>
                    <div class="user-email">created_at: {{ $car->created_at }}</div>
                    <div class="user-email">updated_at: {{ $car->updated_at }}</div>
                </article>
            @endforeach
        </section>
    </main>
@endsection

@section('style')
    <style>
        :root{
        --bg: #0b1020;
        --panel: #121833;
        --muted: #a6b0cf;
        --text: #e6ebff;
        --accent: #6ea8fe;
        --accent-2: #87d2ff;
        --border: #28325a;
        --shadow: 0 10px 25px rgba(0,0,0,.35), 0 2px 10px rgba(0,0,0,.25);
        --radius: 16px;
        }

        *{box-sizing:border-box}

        body {
            height:100%
        }

        body {
            margin:0;
            font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
            color: var(--text);
            background: radial-gradient(1200px 600px at 10% -20%, rgba(135,210,255,.12), transparent 60%),
                        radial-gradient(900px 500px at 110% -10%, rgba(110,168,254,.12), transparent 55%),
                        var(--bg);
            line-height:1.5;
        }

        .wrap {
        max-width:1600px;
        margin: 48px auto;
        padding: 0 20px;
        }

        .page-title{
        font-size: clamp(24px, 2.5vw, 36px);
        margin: 0 0 18px;
        letter-spacing:.3px;
        }

        .subtitle{color: var(--muted); margin: 0 0 28px;}

        .users{
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
        gap: 20px;
        }

        .user-card{
        background: linear-gradient(180deg, rgba(255,255,255,.02), rgba(255,255,255,0));
        border: 1px solid var(--border);
        border-radius: var(--radius);
        box-shadow: var(--shadow);
        padding: 20px;
        transition: transform .2s ease, background .2s ease;
        }
        .user-card:hover{
        transform: translateY(-4px);
        background: rgba(135,210,255,.05);
        }

        .user-id{
        font-size: 14px;
        color: var(--muted);
        margin-bottom: 8px;
        }
        .user-name {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 6px;
        word-break: break-all;
        }
        .user-email{
        font-size: 15px;
        color: var(--accent-2);
        word-break: break-all;
        margin-bottom: 6px;
        }

        .badge{
        display:inline-flex; align-items:center; gap:6px; padding:5px 10px; border-radius:999px;
        background: linear-gradient(180deg, rgba(110,168,254,.15), rgba(110,168,254,.05));
        border:1px solid rgba(110,168,254,.35);
        font-size: 12px; color: #dce9ff;
        }

        .text-\[\#1b1b18\] {
            color:  var(--accent-2);
        }

    </style>
@endsection
