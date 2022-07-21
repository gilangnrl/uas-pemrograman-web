@extends('layouts.public.master')
@section('content')
    <div class="left-section-wrapper d-col">

        <div class="calculator container">
            <div class="calculator-wrapper">
                <div class="calculator-display">0</div>
            </div>
            <div id="calculator-key" class="grid-container">
                <button class="grid-item key-operator" data-action="clear">ac</button>
                <button class="grid-item key-operator" data-action="square">^2</button>
                <button class="grid-item key-operator" data-action="mod">%</button>
                <button class="grid-item key-operator" data-action="divide">/</button>
                <button class="grid-item">1</button>
                <button class="grid-item">2</button>
                <button class="grid-item">3</button>
                <button class="grid-item key-operator" data-action="times">&times;</button>
                <button class="grid-item">4</button>
                <button class="grid-item">5</button>
                <button class="grid-item">6</button>
                <button class="grid-item key-operator" data-action="add">+</button>
                <button class="grid-item">7</button>
                <button class="grid-item">8</button>
                <button class="grid-item">9</button>
                <button class="grid-item key-operator" data-action="subtract">-</button>
                <div></div>
                <button class="grid-item">0</button>
                <button class="grid-item" data-action="decimal">.</button>
                <button class="grid-item key-equal" data-action="equal">=</button>
            </div>
        </div>
    </div>
@endsection
