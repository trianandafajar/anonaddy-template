@extends('layouts.app')

@section('breadcrumb')
    a {{-- Ganti ini dengan breadcrumb jika memang diperlukan --}}
@endsection

@section('content')
    <div class="container py-8">
        @include('shared.status')

        <recipients
            :user='@json($user)'
            :initial-recipients='@json($recipients)'
            :aliases-using-default='@json($aliasesUsingDefault)'
            :aliases-using-default-count='{{ $aliasesUsingDefaultCount }}'
            domain="{{ config('anonaddy.domain') }}"
        />
    </div>
@endsection
