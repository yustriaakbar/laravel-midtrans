@extends('layouts.app')
@section('title', 'Donatur')

@section('content')
<section class="our_major_cause section_gap">
    <div class="container">
        <div class="row justify-content-center section-title-wrap">
            <div class="col-lg-12">
                <h1>Daftar Donatur</h1>
                <br><br>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Donatur</th>
                        {{-- <th scope="col">Email</th> --}}
                        <th scope="col">Nominal</th>
                        <th scope="col">Jenis Donasi</th>
                        <th scope="col">Status</th>
                        <th style="text-align: center;">Pay</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($donations as $donation)
                    <tr>
                        <th scope="row">{{ $donation->id }}</th>
                        <td>{{ $donation->donor_name }}</td>
                        {{-- <td>donatur@example.com</td> --}}
                        <td>Rp. {{ number_format($donation->amount) }},-</td>
                        <td>{{ ucwords(str_replace('_', ' ', $donation->donation_type)) }}</td>
                        <td>{{ ucfirst($donation->status) }}</td>
                        <td style="text-align: center;">
                            @if ($donation->status == 'pending')
                            <button class="btn btn-success btn-sm" onclick="snap.pay('{{ $donation->snap_token }}')">Complete Payment</button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $donations->links('components.pagination') }}
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('services.midtrans.clientKey') }}"></script>
@endsection