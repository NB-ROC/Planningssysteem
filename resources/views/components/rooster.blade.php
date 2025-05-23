<?php
$rooster = [
    (object)[
        'name' => 'Banana Joe',
        'schedule' => [
            'Monday' => [
                ['start' => '09:00', 'end' => '12:00'],
                ['start' => '13:00', 'end' => '17:00'],
            ],
            'Tuesday' => [
                ['start' => '10:00', 'end' => '14:00'],
            ],
            'Friday' => [
                ['start' => '13:00', 'end' => '17:00'],
            ],

        ],
    ],
    (object)[
        'name' => 'Jane mangonini',
        'schedule' => [
            'Wednesday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],

        ],
    ],

    (object)[
        'name' => 'Apple Pen',
        'schedule' => [
            'Monday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],
             'Wednesday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],
             'thursday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],

        ],
    ],

(object)[
        'name' => 'Pineapple Pen',
        'schedule' => [
            'Monday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],
             'Wednesday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],
            'Friday' => [
                ['start' => '08:00', 'end' => '12:00'],
            ],

        ],
    ],
];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooster</title>
    <link rel="stylesheet" href="css/rooster.css">
    <script src="js/app.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            text-align: center;
            padding: 8px;
        }

        th {
            background-color: #f4f4f4;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Rooster</h1>
        <table>
            <thead>
                <tr>
                    <th></th>
                    @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'] as $day)
                    <th>{{ $day }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach ($rooster as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'] as $day)
                    <td>
                        @if (isset($user->schedule[$day]))
                        @foreach ($user->schedule[$day] as $shift)
                        <div>{{ $shift['start'] }} - {{ $shift['end'] }}</div>
                        @endforeach
                        @else
                        <div>Geen dienst</div>
                        @endif
                    </td>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
