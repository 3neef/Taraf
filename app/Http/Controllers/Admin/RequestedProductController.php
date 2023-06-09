<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRequestedProductRequest;
use App\Http\Requests\StoreRequestedProductRequest;
use App\Http\Requests\UpdateRequestedProductRequest;
use App\Models\RequestedProduct;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RequestedProductController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('requested_product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestedProducts = RequestedProduct::all();

        return view('admin.requestedProducts.index', compact('requestedProducts'));
    }

    public function create()
    {
        abort_if(Gate::denies('requested_product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestedProducts.create');
    }

    public function store(StoreRequestedProductRequest $request)
    {
        $requestedProduct = RequestedProduct::create($request->all());

        return back()->withInput()->with('message', 'Your order is successfully submitted. We will contact you soon.');

    }

    public function edit(RequestedProduct $requestedProduct)
    {
        abort_if(Gate::denies('requested_product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestedProducts.edit', compact('requestedProduct'));
    }

    public function update(UpdateRequestedProductRequest $request, RequestedProduct $requestedProduct)
    {
        $requestedProduct->update($request->all());

        return redirect()->route('admin.requested-products.index');
    }

    public function show(RequestedProduct $requestedProduct)
    {
        abort_if(Gate::denies('requested_product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.requestedProducts.show', compact('requestedProduct'));
    }

    public function destroy(RequestedProduct $requestedProduct)
    {
        abort_if(Gate::denies('requested_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $requestedProduct->delete();

        return back();
    }

    public function massDestroy(MassDestroyRequestedProductRequest $request)
    {
        RequestedProduct::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
