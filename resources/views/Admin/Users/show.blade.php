@extends('layout.admin')

@section('content')

<x-head class="text-center mt-2">Rental History</x-head>
<div class="flex container mx-auto mt-20 flex-col">
    <div class="-my-2 overflow-x-auto ">

        <x-table>
            <x-slot name="heading">
                <x-table.heading> User ID </x-table.heading>
                <x-table.heading> Employee Number </x-table.heading>
                <x-table.heading> Bike ID </x-table.heading>
                <x-table.heading> Payment Fee</x-table.heading>
                <x-table.heading> Payment Status </x-table.heading>
                <x-table.heading> Rent Status </x-table.heading>
                {{-- <x-table.heading> </x-table.heading>
                <x-table.heading_view></x-table.heading_view> --}}
            </x-slot>
            @foreach ($customerrental as $custom)
                <x-table.row>
                    {{-- <x-table.cell-bold></x-table.cell-bold> --}}
                    <x-table.cell>{{ $custom->user_id}}</x-table.cell>
                    <x-table.cell>{{ $custom->employee_nbr}}</x-table.cell>
                    <x-table.cell>{{ $custom->bike_id}}</x-table.cell>
                    <x-table.cell>{{ $custom->payment_fee}}</x-table.cell>
                    <x-table.cell>{{ $custom->payment_status}}</x-table.cell>
                    <x-table.cell>{{ $custom->rent_status}}</x-table.cell>
                </x-table.row>
            @endforeach
        </x-table>

    </div>
</div>

@endsection