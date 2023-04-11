@extends('layouts.master')
@section('title', 'Orders')
@section('breadcrumb', 'Orders')

@section('content')
    <!-- row opened -->
    <div class="row row-sm">


        <!--div-->
        <div class="col-xl-12">
            <x-flash-message />

            <div class="card">




                <div class="card-body">
                    <h3 class="card-title">{{ __('List Orders') }}</h3>
                    <br>


                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name User') }}</th>
                                    <th>{{ __('Room') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Order Date') }} </th>
                                    <th>{{ __('Notes') }}</th>
                                    <th>{{ __('Opreation') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($orders as $order)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $order->name }}</td>
                                        <td>{{ $order->room->name }}</td>
                                        <td>{{ $order->phone }}</td>
                                        <td>{{ $order->order_date }}</td>
                                        <td>{{ $order->notes }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">Opreation<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item"
                                                        href=" {{ route('order.edit', $order->id) }}">{{ __('Update') }}
                                                    </a>
                                                    <form action="{{ route('order.destroy', $order->id) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="dropdown-item" href="#"
                                                            data-target="#delete_invoice"><i
                                                                class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;{{ __('Delete') }}
                                                        </button>
                                                    </form>

                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9">{{ __('No Data .') }}</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        {{-- $user->links() --}}{{-- $user->links('pagintor.custom') --}}
                    </div><br>
                    {{ $orders->withQueryString()->links() }}
                </div>
            </div>

        </div>
    </div>
    <!--/div-->
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->

@endsection
