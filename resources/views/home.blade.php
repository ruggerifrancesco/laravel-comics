@extends('layout.app')

@section('title', 'DC Comics')

@section('main-content')
    <div class="wrapper wrapper-main">
        <div class="series-section-title">
            <h2>Current Series</h2>
        </div>

        <div class="series-wrapper">
            <AppCard v-for="card in cards"
                :thumbnail="card.thumb"
                :price="card.price"
                :series="card.series"
                :type="card.type"/>
        </div>

        <button type="button" class="btn btn-primary" id="load-more-btn">
            Load more
        </button>
    </div>
@endsection