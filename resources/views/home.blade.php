<x-guest-layout>
    <x-slot name="header">
        <!-- <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2> -->
    </x-slot>

    <style>
        .bxtitle > div {
            border: 0px solid #ccc;
        }
    </style>

    <!-- secão 1 -->
    <div class="section1">
        <div class="bxtitle">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <h1 class="display-1 text-lg-left text-md-center text-sm-center text-xs-center">Conheça nossos produtos</h1>
                        <h2 class="text-lg-left text-md-center text-sm-center text-xs-center" style="color: gray;">Medicamentos, suplementos, <span style="font-style: italic;">natureba</span>, produtos de beleza, adesivos, Viagra&trade;, etc.</h2>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ 'assets/images/hot-doctoress.jpeg' }}" alt="" style="width: 100%; height: auto;" />
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="text-center">Seja uma parceira assim como a Entrefarma</h1>
                        <img src="{{ 'assets/images/entrefarma.jpg' }}" alt="" style="width: 100%; height: auto;" />
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-12">
                        <h1 class="text-center">Aqui tem economia de verdade!</h1>
                        <img src="{{ 'assets/images/generico.gif' }}" alt="" style="width: 100%; height: auto;" />
                    </div>
                </div>
            </div>
        </div>
        <div class="coursebox">
        </div>
    </div>

</x-guest-layout>
