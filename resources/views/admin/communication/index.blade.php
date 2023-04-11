@extends('layouts.master')
@section('title', 'Messages')
@section('breadcrumb', 'Messages')

@section('content')
    <!-- row opened -->
    <div class="row row-sm">


        <!--div-->
        <div class="col-xl-12">
            <x-flash-message />

            <div class="card">




                <div class="card-body">
                    <h3 class="card-title">{{ __('List Messages') }}</h3>
                    <br>


                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Phone') }}</th>
                                    <th>{{ __('Message') }}</th>
                                    <th>{{ __('Creaed At') }} </th>
                                    <th>{{ __('Opreation') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($messages as $message)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $message->name }}</td>
                                        <td>{{ $message->phone }}</td>
                                        <td>{{ $message->notes }}</td>
                                        <td>{{ $message->created_at->diffForHumans() }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">Opreation<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <form action="{{ route('communication.destroy', $message->id) }}" method="post">
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
                    {{ $messages->withQueryString()->links() }}
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
