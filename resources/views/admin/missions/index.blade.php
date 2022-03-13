@extends('layouts.admin')
@section('content')
@can('mission_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.missions.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.mission.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.mission.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Mission">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.mission.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.mission.fields.name_en') }}
                        </th>
                        <th>
                            {{ trans('cruds.mission.fields.name_ar') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($missions as $key => $mission)
                        <tr data-entry-id="{{ $mission->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $mission->id ?? '' }}
                            </td>
                            <td>
                                {{ $mission->name_en ?? '' }}
                            </td>
                            <td>
                                {{ $mission->name_ar ?? '' }}
                            </td>
                            <td>
                                @can('mission_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.missions.show', $mission->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('mission_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.missions.edit', $mission->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('mission_delete')
                                    <form action="{{ route('admin.missions.destroy', $mission->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('mission_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.missions.massDestroy') }}",
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
  let table = $('.datatable-Mission:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection