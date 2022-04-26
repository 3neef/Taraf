<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRequestOrderRequest;
use App\Http\Requests\StoreRequestOrderRequest;
use App\Http\Requests\UpdateRequestOrderRequest;
use App\Models\RequestOrder;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestOrderController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('request_order_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestOrders = RequestOrder::all();

        return view('admin.requestOrders.index', compact('requestOrders'));
    }

    public function create()
    {
        abort_if(Gate::denies('request_order_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestOrders.create');
    }

    public function store(StoreRequestOrderRequest $request)
    {
        $requestOrder = RequestOrder::create($request->all());

        return redirect()->back();
    }

    public function edit(RequestOrder $requestOrder)
    {
        abort_if(Gate::denies('request_order_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestOrders.edit', compact('requestOrder'));
    }

    public function update(UpdateRequestOrderRequest $request, RequestOrder $requestOrder)
    {
        $requestOrder->update($request->all());

        return redirect()->route('admin.request-orders.index');
    }

    public function show(RequestOrder $requestOrder)
    {
        abort_if(Gate::denies('request_order_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestOrders.show', compact('requestOrder'));
    }

    public function destroy(RequestOrder $requestOrder)
    {
        abort_if(Gate::denies('request_order_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestOrder->delete();

        return back();
    }

    public function massDestroy(MassDestroyRequestOrderRequest $request)
    {
        RequestOrder::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
