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
                <h1><img src="{{ asset('assets/images/server.png') }}"> Enviar planilha para banco de dados (.CSV)</h1>
                @if(Auth::user()->credential == 0)
                <p style="color: brown; font-size: .8em; font-style: italic;"><strong>Obs: </strong>Você não tem permissão para enviar planilhas. Peça isso a um administrador.</p>
                @endif

                @if(isset($result))
                    @if($result2 == "Projeto importado com sucesso")
                <div class="alert alert-success">
                {{ $result }}
                {{ $result2 }}
                </div>
                    @else
                <div class="alert alert-danger">
                {{ $result }}
                {{ $result2 }}
                </div>
                    @endif
                @endif

                @if(isset($errormsg))
                <div class="alert alert-danger">
                {{ $errormsg }}
                </div>
                @endif
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{ route('store') }}" style="display:inline;">
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    <div class="row">
                        <div class="col-lg-10 custom-file">
                            <input id="uploadedfile" type="file" class="custom-file-input" name="uploadedfile" />
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    {{-- <input type="submit" class="btn btn-primary" type="submit" name="postad" value="Enviar CSV" /> --}}
                        <div class="col-lg-2">
                            <input type="hidden" value="{{ Auth::user()->username }}" name="userid" />
                            <input type="hidden" value="{{ Auth::user()->credential }}" name="credential" />
                            @if(Auth::user()->credential == 0)
                            <button class="btn btn-primary" type="button" disabled>Enviar CSV</button>
                            @else
                            <button class="btn btn-primary" type="submit" name="postad">Enviar CSV</button>
                            @endif
                        </div>
                    </div>
                    {{-- onclick="event.preventDefault(); this.closest('form').submit();" --}}
                </form>
                {{-- @if(Auth::user()->credential == 0) --}}
            </div>

            <div class="row py-5">
                <div class="col-12">
                    <a href="{{ url('/view') }}">Planilhas enviadas</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

</x-app-layout>
