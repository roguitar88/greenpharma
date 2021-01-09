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
                <h1><img src="{{ asset('assets/images/spreadsheet.png') }}"> Lista de planilhas enviadas</h1>
                @if($spreadsheetCount->count() == 0)
                <p style="font-size: .9em; color: brown; font-style: italic;">Nenhum dado a ser exibido</p>
                <div style="margin-bottom: 200px;"></div>
                @else
                <table class="table">
                    <thead class="black white-text">
                        <tr>
                        <th scope="col">Planilha</th>
                        <th scope="col">Enviada por</th>
                        <th scope="col">Data/Hora</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($spreadsheets as $spreadsheet)
                        <tr>
                            <th scope="row"><a href="{{ url('/assets/uploads/CSV/'.$spreadsheet->name) }}">{{ $spreadsheet->name }}</a></th>
                            <td>{{ $spreadsheet->username }}</td>
                            <td>{{ $spreadsheet->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {{ $id }}
                <br>
                {{ $getUsername }}
                <br> --}}
                {{ $spreadsheets->links() }}
                @endif
            </div>
        </div>
    </div>

</x-app-layout>
