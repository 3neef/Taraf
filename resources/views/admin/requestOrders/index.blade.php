@extends('layouts.admin')
@section('content')
@can('request_order_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.request-orders.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.requestOrder.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.requestOrder.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-RequestOrder">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.fullname') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.product') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.packaging_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.quantity') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.expected_price') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.product_country') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.payment_method') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.place_of_delivery') }}
                        </th>
                        <th>
                            {{ trans('cruds.requestOrder.fields.note') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requestOrders as $key => $requestOrder)
                        <tr data-entry-id="{{ $requestOrder->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $requestOrder->id ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->fullname ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->product ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->packaging_type ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->quantity ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->expected_price ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->product_country ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->payment_method ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->place_of_delivery ?? '' }}
                            </td>
                            <td>
                                {{ $requestOrder->note ?? '' }}
                            </td>
                            <td>
                                @can('request_order_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.request-orders.show', $requestOrder->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('request_order_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.request-orders.edit', $requestOrder->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('request_order_delete')
                                    <form action="{{ route('admin.request-orders.destroy', $requestOrder->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('request_order_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.request-orders.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-RequestOrder:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection