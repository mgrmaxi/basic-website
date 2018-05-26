@section('sidebar')
    @guest

        @else
    <h4>sidebar section in inc folder </h4>
    
    <table class="table table-{1:striped|sm|bordered|hover|inverse} table-inverse table-responsive">
        <thead class="thead-inverse|thead-default">
            <tr>
                <th>table</th>
                <th>table</th>
                <th>table</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">table table</td>
                    <td>table table</td>
                    <td>table table</td>
                </tr>
                <tr>
                    <td scope="row">c</td>
                    <td>table table</td>
                    <td>table table</td>
                </tr>
            </tbody>
    </table>
    @show
@endguest