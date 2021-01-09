<x-app-layout>
    <div class="container my-5">
        <h2>Gerenciar usuários cadastrados</h2>
        <div class="table-responsive text-nowrap">
            <!--Table-->
            <table class="table table-striped">

                <!--Table head-->
                <thead>
                    <tr>
                    <th>#</th>
                    <th>Foto</th>
                    <th>Nome</th>
                    <th>Usuário</th>
                    <th>Credencial</th>
                    <th>Email</th>
                    <th>Registrado em</th>
                    <th>Conta Ativa</th>
                    <th>Cancelada</th>
                    <th>Desativada</th>
                    <th>IP</th>
                    <th>Hostname</th>
                    <th>Plano Atual</th>
                    <th>Ação</th>
                    </tr>
                </thead>
                <!--Table head-->

                <!--Table body-->
                <tbody>
                    @foreach($manageUsers as $manageUser)
                    <tr>
                    <th scope="row">{{ $manageUser->id }}</th>
                    <td></td>
                    <td>{{ $manageUser->name }}</td>
                    <td>{{ $manageUser->username }}</td>
                    <td>{{ $manageUser->credential }}</td>
                    <td>{{ $manageUser->email }}</td>
                    <td>{{ $manageUser->register_date }}</td>
                    <td>{{ $manageUser->activated }}</td>
                    <td>{{ $manageUser->canceled }}</td>
                    <td>{{ $manageUser->deactivate }}</td>
                    <td>{{ $manageUser->user_ip }}</td>
                    <td>{{ $manageUser->hostname }}</td>
                    <td>{{ $manageUser->plan }}</td>
                    <td>Editar || Deletar</td>
                    </tr>
                    @endforeach
                    
                    <!-- <tr>
                    <th scope="row">2</th>
                    <td></td>
                    <td>Renato Guanabara</td>
                    <td>renatao</td>
                    <td>comum</td>
                    <td>renato@gmail.com</td>
                    <td>23/10/2020</td>
                    <td>Sim</td>
                    <td>Não</td>
                    <td>Não</td>
                    <td>::1</td>
                    <td>Renato-Desktop</td>
                    <td>Basic</td>
                    <td>
                    </tr> -->
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>
</x-app-layout>