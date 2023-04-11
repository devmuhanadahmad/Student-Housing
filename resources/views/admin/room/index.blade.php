@extends('layouts.master')
@section('title', 'Rooms')
@section('breadcrumb', 'Rooms')

@section('content')
    <!-- row opened -->
    <div class="row row-sm">


        <!--div-->
        <div class="col-xl-12">
            <x-flash-message />

            <div class="card">


                <div class="col-sm-6 col-md-4 col-xl-3 mg-t-20 mt-4">
                    <a class="modal-effect btn btn-outline-dark " data-effect="effect-super-scaled"
                        href="{{ route('room.create') }}">{{ __('Add Room') }}</a>

                </div>

                <div class="card-body">
                    <h3 class="card-title">{{ __('List Rooms') }}</h3>
                    <br>


                    <div class="table-responsive">
                        <table class="table table-hover mb-0 text-md-nowrap">
                            <thead>
                                <tr>
                                    <th>{{ __('ID') }}</th>
                                    <th>{{ __('Image') }}</th>
                                    <th>{{ __('Name Room') }}</th>
                                    <th>{{ __('Price') }}</th>
                                    <th>{{ __('Space') }}</th>
                                    <th>{{ __('Creaed At') }} </th>
                                    <th>{{ __('Opreation') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($rooms as $room)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td><img src="{{ $room->image_url }}" alt="{{$room->name}}" width="100px" height="100px" ></td>
                                        <td>{{ $room->name }}</td>
                                        <td>${{ $room->price }}</td>
                                        <td>cm{{ $room->space }}</td>
                                        <td>{{ $room->created_at }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button aria-expanded="false" aria-haspopup="true"
                                                    class="btn ripple btn-primary btn-sm" data-toggle="dropdown"
                                                    type="button">Opreation<i class="fas fa-caret-down ml-1"></i></button>
                                                <div class="dropdown-menu tx-13">
                                                    <a class="dropdown-item"
                                                        href=" {{ route('room.edit', $room->id) }}">{{ __('Update') }}
                                                    </a>
                                                    <form action="{{ route('room.destroy', $room->id) }}" method="post">
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
                    {{ $rooms->withQueryString()->links() }}
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
