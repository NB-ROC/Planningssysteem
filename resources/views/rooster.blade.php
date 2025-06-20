<?php
$rooster = [
    (object)[
        'naam' => 'Banana Joe',
        'foto' => 'img/',
        'rooster' => [
            'Maandag' => [
                ['start' => '09:00', 'eind' => '12:00'],
                ['start' => '13:00', 'eind' => '17:00'],
            ],
            'Dinsdag' => [
                ['start' => '10:00', 'eind' => '14:00'],
            ],
            'Vrijdag' => [
                ['start' => '13:00', 'eind' => '17:00'],
            ],
        ],
    ],
    (object)[
        'naam' => 'Jane Mangonini',
        'foto' => 'img/',
        'rooster' => [
            'Woensdag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
        ],
    ],
    (object)[
        'naam' => 'Apple Pen',
        'foto' => 'img/',
        'rooster' => [
            'Maandag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
            'Woensdag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
            'Donderdag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
        ],
    ],
    (object)[
        'naam' => 'Pineapple Pen',
        'foto' => 'img/',
        'rooster' => [
            'Maandag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
            'Woensdag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
            'Vrijdag' => [
                ['start' => '08:00', 'eind' => '12:00'],
            ],
        ],
    ],
];
?>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rooster
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th>Naam</th>
                                @foreach (['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag'] as $dag)
                                    <th>{{ $dag }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody class="rooster-lichaam">
                            @foreach ($rooster as $profiel)
                            <tr class="rooster-rij">
                                <td class="rooster-gebruiker">
                                    <img class="rooster-gebruiker-foto" src="{{ asset($profiel->foto) }}" alt="Profielfoto van {{ $profiel->naam }}" style="width:40px; height:40px; border-radius:50%; object-fit:cover;">
                                    <br>
                                    <span class="rooster-gebruiker-naam">{{ $profiel->naam }}</span>
                                </td>
                                @foreach (['Maandag', 'Dinsdag', 'Woensdag', 'Donderdag', 'Vrijdag'] as $dag)
                                <td class="rooster-dag">
                                    @if (isset($profiel->rooster[$dag]))
                                        @foreach ($profiel->rooster[$dag] as $dienst)
                                            <div class="rooster-dienst">{{ $dienst['start'] }} - {{ $dienst['eind'] }}</div>
                                        @endforeach
                                    @else
                                        <div class="rooster-geen-dienst">Geen dienst</div>
                                    @endif
                                </td>
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
