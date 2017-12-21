@extends('layouts.app')

@section('content')
    <section>
        <v-layout
                column
                class="mb-2 mt-5"
                align-center
        >
            <v-flex xs12 sm12 lg8 class="my-3">
                @include('documentation.navigation', ['open' => true])
            </v-flex>
        </v-layout>
    </section>
@endsection
