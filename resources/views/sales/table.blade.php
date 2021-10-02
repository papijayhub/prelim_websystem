<div class="table-responsive">
    <table class="table" id="sales-table">
        <thead>
            <tr>
                <th>Sales Rep</th>
        <th>Address</th>
        <th>Item</th>
        <th>Quantity</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sales as $sales)
            <tr>
                <td>{{ $sales->sales_rep }}</td>
            <td>{{ $sales->address }}</td>
            <td>{{ $sales->item }}</td>
            <td>{{ $sales->quantity }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['sales.destroy', $sales->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sales.show', [$sales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('sales.edit', [$sales->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
