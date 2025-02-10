@extends('site.layout')
@section('title', 'Cart')

@section('content')

    <div class="row container">

        @if ($message = Session::get('success'))


            <div class="card green darken-1">
                <div class="card-content white-text">
                  <span class="card-title">Success</span>
                  <p>{{ $message }}</p>
                </div>
              </div>
        @endif

        <h5>Your cart have: {{ $items->count() }} items.</h5>

            <table>
                <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                    @foreach ($items as $item)
                        <tr>
                            <td><img src="{{ $item->attributes->image }}" class="responsive-img circle" width="70" alt=""></td>
                            <td>{{ Str::limit($item->name, 10) }}</td>
                            <td>$ {{ number_format($item->price, 2, ',', '.') }}</td>
                            <td><input style="width: 50px; font-weight: 600;" class="white center" type="number" name="quantity" value="{{ $item->quantity }}"></td>
                            <td>$ {{ $item->price }}</td>
                            <td>
                                <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></button>
                                <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>

    <div class="row container center">
        <button class="btn waves-effect waves-light blue">Continue buying <i class="material-icons">arrow_back</i></button>
        <button class="btn waves-effect waves-light blue">Clear cart <i class="material-icons">clear</i></button>
        <button class="btna waves-effect waves-light green">Buy <i class="material-icons">check</i></button>
    </div>

@endsection
