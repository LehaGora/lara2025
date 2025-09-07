@extends('layouts.base')

@section('title', 'Таблицы')

@section('content')
    <div class="table-container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Телефон</th>
                    <th>Город</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Имя">Алексей Иванов</td>
                    <td data-label="Email">alex@example.com</td>
                    <td data-label="Телефон">+7 (900) 123-45-67</td>
                    <td data-label="Город">Москва</td>
                </tr>
                <tr>
                    <td data-label="Имя">Мария Петрова</td>
                    <td data-label="Email">maria@example.com</td>
                    <td data-label="Телефон">+7 (900) 765-43-21</td>
                    <td data-label="Город">Санкт-Петербург</td>
                </tr>
                <tr>
                    <td data-label="Имя">Иван Сидоров</td>
                    <td data-label="Email">ivan@example.com</td>
                    <td data-label="Телефон">+7 (900) 555-44-33</td>
                    <td data-label="Город">Казань</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection

@section('style')
    <style>
    /* Общие стили для таблицы */
    .table-container {
        width: 100%;
        overflow-x: auto;
        margin: 20px 0;
    }

    .responsive-table {
        width: 100%;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    /* Стили для заголовков */
    .responsive-table th {
        background-color: #f8f9fa;
        padding: 15px;
        text-align: left;
        font-weight: 600;
        border-bottom: 2px solid #dee2e6;
    }

    /* Стили для ячеек */
    .responsive-table td {
        padding: 15px;
        border-bottom: 1px solid #dee2e6;
    }

    /* Чередование цветов строк */
    .responsive-table tr:nth-child(even) {
        background-color: #f8f9fa;
    }

    /* Стили для мобильных устройств */
    @media screen and (max-width: 768px) {
        .responsive-table {
            border: 0;
            box-shadow: none;
        }

        .responsive-table thead {
            display: none; /* Скрываем заголовки на мобильных */
        }

        .responsive-table tr {
            display: block;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .responsive-table td {
            display: block;
            text-align: right;
            padding: 12px;
            position: relative;
            border-bottom: 1px solid #ddd;
        }

        .responsive-table td:last-child {
            border-bottom: 0;
        }

        /* Добавляем названия колонок через псевдоэлемент */
        .responsive-table td::before {
            content: attr(data-label);
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: 600;
            text-align: left;
            color: #555;
        }
    }

    /* Дополнительные улучшения для очень маленьких экранов */
    @media screen and (max-width: 480px) {
        .responsive-table td {
            font-size: 14px;
            padding: 10px;
        }

        .responsive-table td::before {
            font-size: 12px;
            left: 10px;
        }
    }

    /* Ховер-эффекты для десктопа */
    @media (hover: hover) and (pointer: fine) {
        .responsive-table tr:hover {
            background-color: #e9ecef;
            transition: background-color 0.2s ease;
        }
    }
    </style>
@endsection
