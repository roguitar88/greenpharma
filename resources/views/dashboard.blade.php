<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <!-- <x-jet-welcome /> -->
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                {{-- <p>Olá, mundo!</p>
                <p>{{ Auth::user()->username }}</p>
                <!-- <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> --> --}}
                {{-- {{ $salesCount->count() }} --}}
                <h1><img src="{{ asset('assets/images/report.png') }}"> Gerar relatório</h1>
                @if(isset($salesCount))
                    @if($salesCount->count() == 0)
                <p style="font-size: .7em; color: brown;">Nada a exibir no momento</p>
                    @else
                <p style="font-size: .7em; color: brown;">Use um filtro de cada vez</p>
                <form method="POST" action="{{ route('filter') }}" style="display:inline;">
                    {{-- {{ csrf_field() }} --}}
                    @csrf

                    <div class="row">
                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="product">Produto</label>
                                <select class="form-control" id="product" name="product">
                                    <option selected disabled>Selecione</option>
                                    <option value="8885">8885</option>
                                    <option value="88870">88870</option>
                                    <option value="88820">88820</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="ean">EAN</label>
                                <select class="form-control" id="ean" name="ean">
                                    <option selected disabled>Selecione</option>
                                    <option value="7896004700311">7896004700311</option>
                                    <option value="7896004700274">7896004700274</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <select class="form-control" id="description" name="description">
                                    <option selected disabled>Selecione</option>
                                    <option value="ACECLOFENACO 100MG 12CPR EMS">ACECLOFENACO 100MG 12CPR EMS</option>
                                    <option value="DESLORATADINA 0,5MG/ML XPE 100ML EMS">DESLORATADINA 0,5MG/ML XPE 100ML EMS</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="twenty">Mês/2020</label>
                                <select class="form-control" id="twenty" name="twenty">
                                    <option selected disabled>Selecione</option>
                                    <option value="jan_20">jan/2020</option>
                                    <option value="feb_20">fev/2020</option>
                                    <option value="mar_20">mar/2020</option>
                                    <option value="apr_20">abr/2020</option>
                                    <option value="may_20">mai/2020</option>
                                    <option value="jun_20">jun/2020</option>
                                    <option value="jul_20">jul/2020</option>
                                    <option value="aug_20">ago/2020</option>
                                    <option value="sep_20">set/2020</option>
                                    <option value="oct_20">out/2020</option>
                                    <option value="nov_20">nov/2020</option>
                                    <option value="dec_20">dez/2020</option>
                                </select>
                                {{-- <input type="date" class="form-control" id="start" name="start" /> --}}
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <div class="form-group">
                                <label for="twenty_one">Mês/2021</label>
                                <select class="form-control" id="twenty_one" name="twenty_one">
                                    <option selected disabled>Selecione</option>
                                    <option value="jan_21">jan/2021</option>
                                    <option value="feb_21">fev/2021</option>
                                    <option value="mar_21">mar/2021</option>
                                    <option value="apr_21">abr/2021</option>
                                    <option value="may_21">mai/2021</option>
                                    <option value="jun_21">jun/2021</option>
                                    <option value="jul_21">jul/2021</option>
                                    <option value="aug_21">ago/2021</option>
                                    <option value="sep_21">set/2021</option>
                                    <option value="oct_21">out/2021</option>
                                    <option value="nov_21">nov/2021</option>
                                    <option value="dec_21">dez/2021</option>
                                </select>
                                {{-- <input type="date" class="form-control" id="start" name="start" /> --}}
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6">
                            <!-- Sign up button -->
                            <button class="btn btn-info btn-block" style="margin-top: 31px;" name="submit" type="submit">FILTRAR</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <a href="{{ route('index')}}">Ver Todos</a>
                        </div>
                    </div>

                    {{-- <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="report">Tipo de Relatório</label>
                            <select class="form-control" id="report" name="report">
                                <option selected disabled>Ordenar por</option>
                                <option value="totalsales">Quantidade Vendida</option>
                                <option value="sales">Valor Vendido</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="industry">Indústria</label>
                            <select class="form-control" id="industry" name="industry">
                                <option selected disabled>Selecione</option>
                                <option value="emssa">EMS/SA</option>
                                <option value="hypersa">HYPERA S/A</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="branch">Unidade</label>
                            <select class="form-control" id="branch" name="branch">
                                <option selected disabled>Selecione</option>
                                <option value="pe">Green Pharma - PE</option>
                                <option value="ba">Green Pharma - BA</option>
                                <option value="mg">Green Pharma - MG</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="start">Data Início</label>
                            <input type="date" class="form-control" id="start" name="start" />
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="form-group">
                            <label for="end">Data Fim</label>
                            <input type="date" class="form-control" id="end" name="end" />
                        </div>
                    </div> --}}

                </div>

                </form>

                {{-- <p style="font-size: .7em; color: brown;">Apenas 10 resultados serão exibidos por vez</p> --}}
                    @endif
                @endif

                <div class="table-responsive">
                    <table class="table table-hover table-light" style="font-size: .5em;">
                        <thead>
                            <tr>
                            <th scope="col">PRODUTO</th>
                            <th scope="col">EAN</th>
                            <th scope="col">DESCRIÇÃO</th>
                            <th scope="col">FORNECEDOR</th>
                            <th scope="col">01/2020</th>
                            <th scope="col">02/2020</th>
                            <th scope="col">03/2020</th>
                            <th scope="col">04/2020</th>
                            <th scope="col">05/2020</th>
                            <th scope="col">06/2020</th>
                            <th scope="col">07/2020</th>
                            <th scope="col">08/2020</th>
                            <th scope="col">09/2020</th>
                            <th scope="col">10/2020</th>
                            <th scope="col">11/2020</th>
                            <th scope="col">12/2020</th>
                            <th scope="col">01/2021</th>
                            <th scope="col">02/2021</th>
                            <th scope="col">03/2021</th>
                            <th scope="col">04/2021</th>
                            <th scope="col">05/2021</th>
                            <th scope="col">06/2021</th>
                            <th scope="col">07/2021</th>
                            <th scope="col">08/2021</th>
                            <th scope="col">09/2021</th>
                            <th scope="col">10/2021</th>
                            <th scope="col">11/2021</th>
                            <th scope="col">12/2021</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(isset($sales))
                            @foreach($sales as $sale)
                            <tr>
                                <th scope="row">{{ $sale->product }}</th>
                                <td>{{ $sale->ean }}</td>
                                <td>{{ $sale->description }}</td>
                                <td>{{ $sale->supplier }}</td>
                                <td>{{ $sale->jan_20 }}</td>
                                <td>{{ $sale->feb_20 }}</td>
                                <td>{{ $sale->mar_20 }}</td>
                                <td>{{ $sale->apr_20 }}</td>
                                <td>{{ $sale->may_20 }}</td>
                                <td>{{ $sale->jun_20 }}</td>
                                <td>{{ $sale->jul_20 }}</td>
                                <td>{{ $sale->aug_20 }}</td>
                                <td>{{ $sale->sep_20 }}</td>
                                <td>{{ $sale->oct_20 }}</td>
                                <td>{{ $sale->nov_20 }}</td>
                                <td>{{ $sale->dec_20 }}</td>
                                <td>{{ $sale->jan_21 }}</td>
                                <td>{{ $sale->feb_21 }}</td>
                                <td>{{ $sale->mar_21 }}</td>
                                <td>{{ $sale->apr_21 }}</td>
                                <td>{{ $sale->may_21 }}</td>
                                <td>{{ $sale->jun_21 }}</td>
                                <td>{{ $sale->jul_21 }}</td>
                                <td>{{ $sale->aug_21 }}</td>
                                <td>{{ $sale->sep_21 }}</td>
                                <td>{{ $sale->oct_21 }}</td>
                                <td>{{ $sale->nov_21 }}</td>
                                <td>{{ $sale->dec_21 }}</td>
                                <td></td>
                            </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>

                    @if(isset($sales))
                        @if(isset($links))
                    {!! $links !!}
                        @endif

                        @if($salesCount->count() == 0)
                    <div style="margin-bottom: 200px;"></div>
                        @endif
                    @endif

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
